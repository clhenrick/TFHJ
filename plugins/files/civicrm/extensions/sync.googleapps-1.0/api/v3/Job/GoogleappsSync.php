<?php
/*
 +--------------------------------------------------------------------------+
 | Copyright IT Bliss LLC (c) 2012-2013                                     |
 +--------------------------------------------------------------------------+
 | This program is free software: you can redistribute it and/or modify     |
 | it under the terms of the GNU Affero General Public License as published |
 | by the Free Software Foundation, either version 3 of the License, or     |
 | (at your option) any later version.                                      |
 |                                                                          |
 | This program is distributed in the hope that it will be useful,          |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
 | GNU Affero General Public License for more details.                      |
 |                                                                          |
 | You should have received a copy of the GNU Affero General Public License |
 | along with this program.  If not, see <http://www.gnu.org/licenses/>.    |
 +--------------------------------------------------------------------------+
*/

/**
 * Googleapps_sync API call
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_job_googleapps_sync($params) {
  $custom_group = CRM_Sync_BAO_GoogleApps::get_customGroup();
  $custom_fields = CRM_Sync_BAO_GoogleApps::get_customFields($custom_group['id']);
  $settings = CRM_Sync_BAO_GoogleApps::getSettings();

  /**
   * Add all recently modified contacts to the sync queue
   */
  // Get the last sync from the system preferences
  $last_sync = CRM_Utils_Array::value('last_sync', $settings, '2000-01-01 00:00:00');
  // And launch the query ... starting from civicrm_log table since this is where we'll have the least records to look at
  $query = "
      INSERT INTO " . CRM_Sync_BAO_GoogleApps::GOOGLEAPPS_QUEUE_TABLE_NAME . "
        (civicrm_contact_id, google_contact_id, first_name, last_name, organization, job_title, email, email_location_id, email_is_primary, phone, phone_ext, phone_type_id, phone_location_id, phone_is_primary, is_deleted)
        SELECT
            contact_a.id, custom_gapps." . $custom_fields['google_id']['column_name'] . ",
            contact_a.first_name, contact_a.last_name,
            contact_b.organization_name, contact_a.job_title,
            email.email, email.location_type_id as email_location_type_id, email.is_primary as email_is_primary,
            phone.phone, phone.phone_ext, phone.phone_type_id, phone.location_type_id as phone_location_type_id, phone.is_primary as phone_is_primary,
            contact_a.is_deleted
        FROM civicrm_log log
            INNER JOIN civicrm_contact contact_a ON log.entity_id=contact_a.id
            LEFT JOIN civicrm_relationship rel ON rel.contact_id_a = contact_a.id AND rel.relationship_type_id = 4 AND rel.is_active = 1
            LEFT JOIN civicrm_contact contact_b ON contact_b.id = rel.contact_id_b
            LEFT JOIN civicrm_email email ON email.contact_id=contact_a.id AND email.is_primary=1
            LEFT JOIN civicrm_phone phone ON phone.contact_id=contact_a.id AND phone.is_primary=1
            LEFT JOIN " . $custom_group['table_name'] . " custom_gapps ON custom_gapps.entity_id=contact_a.id
        WHERE
            log.entity_table = 'civicrm_contact' AND log.modified_date > \"" . $last_sync ."\"
            AND contact_a.contact_type = 'Individual'
        GROUP BY
            contact_a.id";
  CRM_Core_DAO::executeQuery( $query );
  // TODO: catch errors
  CRM_Sync_BAO_GoogleApps::setSetting(date('Y-m-d H:m:s'), 'last_sync');

  /**
   *  Take the next batch from the sync queue and perform sync
   */
  $max_processed = CRM_Utils_Array::value('max_processed', $params, 50);
  $query = "SELECT * FROM `" . CRM_Sync_BAO_GoogleApps::GOOGLEAPPS_QUEUE_TABLE_NAME . "` LIMIT $max_processed";
  $dao = CRM_Core_DAO::executeQuery( $query );
  $connected = false;
  $result = array('created'=>0, 'updated'=>0, 'deleted'=>0, 'processed'=>0); // holds summary of actions performed
  try {
    while ( $dao->fetch( ) ) {
      // Connect to Google only if there is at least one item to sync
      if (!$connected) {
        $gapps = new CRM_Sync_BAO_GoogleApps($settings['oauth_email'], $settings['oauth_key'], $settings['oauth_secret']);
        $gapps->setScope($settings['domain']);
        $connected = true;
      }
      $row = $dao->toArray();
      $success = false;
      if (!$row['is_deleted']) {
        // Contact needs to be created or updated in Google
        if (empty($row['google_contact_id'])) { // create contact in Google
          $success = $gapps->call('contact', 'create', $row );
          if ($success) {
            $query = "
UPDATE ".CRM_Sync_BAO_GoogleApps::GOOGLEAPPS_QUEUE_TABLE_NAME."
   SET google_contact_id = '$success'
 WHERE civicrm_contact_id = $row[civicrm_contact_id]";
            CRM_Core_DAO::executeQuery($query);
            $result['created']++;
          }
        } else {                                // update contact in Google
          $success = $gapps->call('contact', 'update', $row );
          $result['updated']++;
        }
      } else {                                    // delete contact in Google
        if ($row['google_contact_id']) {
          $success = $gapps->call('contact', 'delete', $row );
          if ($success) {
            // Update other entries for same the contact in the queue
            $query = "
UPDATE ".CRM_Sync_BAO_GoogleApps::GOOGLEAPPS_QUEUE_TABLE_NAME."
   SET google_contact_id = NULL
 WHERE civicrm_contact_id = $row[civicrm_contact_id]";
            CRM_Core_DAO::executeQuery($query);
            $result['deleted']++;
          }
        } else // nothing to do as the contact was deleted before being sync'ed to Google
          $success = true;
      }
      if ($success) {
        // Delete from queue
        $query = "
DELETE FROM ".CRM_Sync_BAO_GoogleApps::GOOGLEAPPS_QUEUE_TABLE_NAME."
 WHERE id='$row[id]'";
        CRM_Core_DAO::executeQuery($query);
        $result['processed']++;
      }
    }
  } catch (Exception $e) {
    return civicrm_api3_create_error(ts('Google API error - either the extension is not fully configured or there is a database mismatch.'));
  }

  // all done, create summary
  if (empty($result['processed'])) {
    $messages = "Nothing needed to be synchronized.";
  } else {
    foreach( array('created', 'updated', 'deleted') as $action ) {
      $messages[] = $result[$action] . " contact(s) $action.";
    }
    $settings['processed'] += $result['processed'];
    CRM_Sync_BAO_GoogleApps::setSetting($settings['processed'], 'processed');
  }
  return civicrm_api3_create_success( $messages );
}
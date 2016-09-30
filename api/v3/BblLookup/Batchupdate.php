<?php

/**
 * BblLookup.Batchupdate API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
function _civicrm_api3_bbl_lookup_Batchupdate_spec(&$spec) {
}

/**
 * BblLookup.Batchupdate API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_bbl_lookup_Batchupdate($params) {
  if (!isset($params['limit']) || !is_numeric($params['limit'])) {
    $params['limit'] = 500;
  }
  nycgeoclientgeocoder_bbl_lookup($params['limit']);
  return civicrm_api3_create_success(array(1), array("NYC API - BBL batch lookup complete."));
}

function nycgeoclientgeocoder_bbl_lookup($limit) {
  $fieldId = CRM_Nycgeoclient::getBblFieldId();

  //FIXME: This API call doesn't work!  Seems you can't use "IS NULL", etc. on custom fields at this time.  This is an upstream bug.
  /*
  $result = civicrm_api3('Address', 'get', array(
  'sequential' => 1,
  'return' => array("street_number", "street_name", "postal_code", "custom_$fieldId"),
  "custom_$fieldId" => array('IS NULL' => 1),
  'options' => array('limit' => 500),
  ));
   */

  $result = civicrm_api3('CustomField', 'getsingle', array(
    'sequential' => 1,
    'return' => array("custom_group_id.table_name", "column_name"),
    'id' => 7,
  ));
  $bbl_table_name = $result['custom_group_id.table_name'];
  $bbl_column_name = $result['column_name'];

  // Yeah, variables in SQL, but they're already sanitized since
  // they come from the Civi API.
  // Also, I hardcoded the state_province_id to only consider NY.
  $sql = "
      SELECT ca.id,
             street_number, 
             street_name,
             postal_code,
             state_province_id,
             cc.id as cid
        FROM civicrm_address ca 
   LEFT JOIN $bbl_table_name bbltable 
          ON ca.id = bbltable.entity_id 
        JOIN civicrm_contact cc
          ON ca.contact_id = cc.id
       WHERE $bbl_column_name IS NULL
         AND state_province_id = 1031
         AND cc.is_deleted != 1
       LIMIT %1
  ";
  $sql_params = array(
    1 => array($limit, 'Integer'),
  );

  $contact_addresses = CRM_Core_DAO::executeQuery($sql, $sql_params);
  while ($contact_addresses->fetch()) {
    $addressId = $contact_addresses->id;
    $bbl = CRM_Nycgeoclient::getBbl($contact_addresses);
    CRM_Nycgeoclient::setBbl($addressId, $bbl);
  }
}

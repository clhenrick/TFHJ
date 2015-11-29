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

class CRM_Sync_BAO_GoogleApps {
  CONST GOOGLEAPPS_QUEUE_TABLE_NAME = 'cividesk_sync_googleapps';
  CONST GOOGLEAPPS_PREFERENCES_NAME = 'Google Apps Sync Preferences';

  /**
   * The Google Apps handle returned by the Zend library
   *
   * @object Zend_Gdata
   */
  protected $_handle;

  /**
   * The Google Apps requester - owner of the OAuth IDs
   *
   * @object Zend_Gdata
   */
  protected $_requester;

  /**
   * The Google Apps scope on which operations will be performed
   *
   * @string
   */
  protected $_scope;

  /**
   * The custom group holding synchronization fields
   *
   * @string
   */
  protected $_custom_group;

  /**
   * The group fields holding synchronization data
   *
   * @string
   */
  protected $_custom_fields;

  function __construct($oauth_email, $oauth_key, $oauth_secret) {
    /**
     * CiviCRM configuration
     */
    $this->_custom_group = $this->get_customGroup();
    $this->_custom_fields = $this->get_customFields($this->_custom_group['id']);

    /**
     * GoogleApps configuration & includes
     * http://code.google.com/apis/contacts/community/
     */
    require_once 'Zend/Loader.php';
    Zend_Loader::loadClass('Zend_Gdata');
    Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
    Zend_Loader::loadClass('Zend_Http_Client');
    Zend_Loader::loadClass('Zend_Gdata_Query');
    Zend_Loader::loadClass('Zend_Gdata_Feed');
    Zend_Loader::loadClass('Zend_Oauth');
    Zend_Loader::loadClass('Zend_Oauth_Consumer');

    // prepare OAuth login and set protocol version to 3.0
    $oauthOptions = array(
      'requestScheme' => Zend_Oauth::REQUEST_SCHEME_HEADER,
      'version' => '1.0',
      'signatureMethod' => 'HMAC-SHA1',
      'consumerKey' => $oauth_key,
      'consumerSecret' => $oauth_secret,
    );
    $consumer = new Zend_Oauth_Consumer($oauthOptions);
    $token = new Zend_Oauth_Token_Access();
    $client = $token->getHttpClient($oauthOptions,null);
    $client->setMethod(Zend_Http_Client::GET);
    $client->setHeaders('If-Match: *'); // needed for update and delete operations
    $gdata = new Zend_Gdata($client);
    $gdata->setMajorProtocolVersion(3);
    $this->_handle = $gdata;
    $this->_requester = $oauth_email;
  }

  static function get_customGroup() {
    // Get custom group for GoogleApps sync
    $params = array(
      'version' => 3,
      'name' => 'googleapps_sync',
    );
    $result = civicrm_api('CustomGroup', 'get', $params);
    if ($result['count'] == 0) {
      // Non-existent, let's create the custom group
      // Keep title short
      $params += array(
        'title' => 'GoogleApps Sync',
        'extends' => 'Individual',
        'is_active' => 1,
        'collapse_display' => 1,
        'weight' => 100,    // let's place it near the bottom
      );
      $result = civicrm_api('CustomGroup', 'create', $params);
      if ( $result['is_error'] )
        return civicrm_api3_create_error( 'Could not create the custom fields set' );
      $params = reset($result['values']);
      $params['version'] = 3;
      $params['title'] = 'Cividesk sync for Google Apps';
      $result = civicrm_api('CustomGroup', 'create', $params);
    }
    return reset($result['values']);
  }

  static function get_customFields($group_id) {
    $custom_fields = array();

    // Get custom fields in this group
    // - Google Contacts ID
    $params = array(
      'version' => 3,
      'custom_group_id' => $group_id,
      'label' => 'Google Contact Id',
    );
    $result = civicrm_api( 'CustomField','get',$params );
    if ( $result['count'] == 0 ) {
      // Non-existent, let's create the fields:
      $params += array(
        'data_type' => 'String',
        'html_type' => 'Text',
        'text_length' => 32,
        'is_active' => 1,
        'is_view' => 1,
      );
      $result = civicrm_api( 'CustomField','create',$params );
      if ( $result['is_error'] )
        return civicrm_api3_create_error( 'Could not create a custom field' );
    }
    $custom_fields['google_id'] = reset( $result['values'] );

    // - Last Synchronized
    $params = array(
      'version' => 3,
      'custom_group_id' => $group_id,
      'label' => 'Last Synchronized',
    );
    $result = civicrm_api( 'CustomField','get',$params );
    if ( $result['count'] == 0 ) {
      $params += array(
        'data_type' => 'Date',
        'html_type' => 'Select Date',
        'is_active' => 1,
        'is_searchable' => 1,
        'is_view' => 1,
      );
      $result = civicrm_api( 'CustomField','create',$params );
      if ( $result['is_error'] )
        return civicrm_api3_create_error( 'Could not create a custom field' );
    }
    $custom_fields['last_sync'] = reset( $result['values'] );

    return $custom_fields;
  }

  static function get_scheduledJob() {
    // The Job API is not implemented yet, so use DAO
    $dao = new CRM_Core_DAO_Job();
    $dao->domain_id  = CRM_Core_Config::domainID();
    $dao->api_prefix = 'civicrm_api3';
    $dao->api_entity = 'Job';
    $dao->api_action = 'googleapps_sync';
    if (!$dao->find(true)) {
      $dao->name = 'Cividesk sync for Google Apps';
      $dao->description = 'Synchronizes CiviCRM contacts with the Google Apps Contacts Directory. You can adjust the \'max_processed\' parameter to control how many contacts are processed each run (default: 50).';
      $dao->run_frequency = 'Always';
      $dao->is_active = 1;
      $dao->insert();
    }
    return $dao;
  }

  static function getSettings() {
    return CRM_Core_BAO_Setting::getItem(CRM_Sync_BAO_GoogleApps::GOOGLEAPPS_PREFERENCES_NAME);
  }

  static function setSetting($value, $key) {
    return CRM_Core_BAO_Setting::setItem($value, CRM_Sync_BAO_GoogleApps::GOOGLEAPPS_PREFERENCES_NAME, $key);
  }

  /*
   * Sets the scope for requests to Google Apps
   *
   * Scope can either be an email address for personal information, or a domain name for domain information
   */
  function setScope($scope) {
    $this->_scope = $scope;
  }

  function call($object, $op, $params = array()) {
    // Check authentication and scope
    if (empty($this->_handle) || empty($this->_scope)) {
      throw new Exception('You need to initialize the scope before calling Google Apps.');
    }

    // Check sanity of arguments
    if (!in_array($object, array('contact', 'group'))) {
      throw new Exception('Unknow object type.');
    }
    if (!in_array($op, array('get', 'create', 'update', 'delete'))) {
      throw new Exception('Unknow operation type.');
    }

    // Calculate base URL for request
    $url = 'https://www.google.com/m8/feeds/' . $object . 's/';
    if (strpos('@', $this->_scope) !== false) {
      $url .= 'default/';
    } else {
      $url .= $this->_scope . '/';
    }
    $url .= ($op == 'delete' ? 'base' : 'full');
    $url .= ($op == 'update' || $op == 'delete' ? '/'.CRM_Utils_Array::value('google_contact_id', $params) : '');

    // Create Query object
    $query = new Zend_Gdata_Query( $url );
    $query->setParam('xoauth_requestor_id', $this->_requester);

    // Perform operation with Google, then CiviCRM
    $now = date('YmdHis'); // do NOT use MySQL NOW() as this is not user-timezoned
    switch( $op ) {
      case 'get':
        $result = $this->_handle->getFeed($query);
        break;
      case 'create':
        $xml = $this->_objectXML($object, $params);
        if ($result = $this->_handle->insertEntry($xml, $query->getQueryUrl())) {
          // Extract Google Contact Id & save in CiviCRM
          preg_match('/(.*)\/(.*)/', $result->id, $matches);
          $result = $matches[2]; // return the Google_id
          $query = "
INSERT INTO `{$this->_custom_group['table_name']}`
  (entity_id,{$this->_custom_fields['google_id']['column_name']},{$this->_custom_fields['last_sync']['column_name']})
VALUES
  ($params[civicrm_contact_id],'$matches[2]','$now')";
          CRM_Core_DAO::executeQuery($query);
        }
        break;
      case 'update':
        $xml = $this->_objectXML($object, $params);
        if ($result = $this->_handle->updateEntry($xml, $query->getQueryUrl())) {
          $query = "
UPDATE `{$this->_custom_group['table_name']}`
   SET {$this->_custom_fields['last_sync']['column_name']} = '$now'
 WHERE {$this->_custom_fields['google_id']['column_name']} = '$params[google_contact_id]'";
          CRM_Core_DAO::executeQuery($query);
        }
        break;
      case 'delete':
        if ($result = $this->_handle->delete($query->getQueryUrl())) {
          $query = "
DELETE FROM `{$this->_custom_group['table_name']}`
 WHERE entity_id = $params[civicrm_contact_id]";
          CRM_Core_DAO::executeQuery($query);
        }
        break;
    }
    return $result;
  }

  function _objectXML($object, $contact) {
    // TODO: only works for Contact objects right now
    if ($object == 'group')
      throw new Exception('Unsuported with group object.');

    // normalize all contact elements to the right format for DOM & Google
    foreach ($contact as $key => &$value) {
      $value = utf8_encode($value);
      $value = str_replace('&','&amp;',$value);
    }
    // create new entry
    $doc  = new DOMDocument();
    $doc->formatOutput = true;
    $entry = $doc->createElement('atom:entry');
    $entry->setAttributeNS('http://www.w3.org/2000/xmlns/' , 'xmlns:atom'    , 'http://www.w3.org/2005/Atom');
    $entry->setAttributeNS('http://www.w3.org/2000/xmlns/' , 'xmlns:gd'      , 'http://schemas.google.com/g/2005');
    $entry->setAttributeNS('http://www.w3.org/2000/xmlns/' , 'xmlns:gContact', 'http://schemas.google.com/contact/2008');
    if ($contact['google_contact_id'])    // MUST set entry etag attribute if this is an update
      $entry->setAttribute('gd:etag','*');
    $doc->appendChild($entry);
    $category = $doc->createElement('atom:category');
    $category->setAttribute('scheme', 'http://schemas.google.com/g/2005#kind');
    $category->setAttribute('term'  , 'http://schemas.google.com/contact/2008#contact');
    $entry->appendChild($category);

    // add link back to CiviCRM
    $link = $doc->createElement('gContact:website');
    $link->setAttribute('href', CIVICRM_UF_BASEURL.'index.php?q=civicrm/contact/view&reset=1&cid='.$contact['civicrm_contact_id']);
    $link->setAttribute('rel' ,'profile');
    $entry->appendChild($link);
    // add name element
    if ($contact['first_name'] || $contact['last_name']) {
      $name = $doc->createElement('gd:name');
      $entry->appendChild($name);
      foreach (array('first_name'=>'givenName', 'last_name'=>'familyName') as $nametype => $tag)
        if ($contact[$nametype]) {
          $nameelmt = $doc->createElement('gd:'.$tag, $contact[$nametype]);
          $name->appendChild($nameelmt);
        }
    }
    // add organization element
    if ($contact['organization'] || $contact['job_title']) {
      $org = $doc->createElement('gd:organization');
      $org->setAttribute('rel' ,'http://schemas.google.com/g/2005#work');
      $entry->appendChild($org);
      if ($contact['organization']) {
        $orgName = $doc->createElement('gd:orgName', $contact['organization']);
        $org->appendChild($orgName);
      }
      if ($contact['job_title']) {
        $orgTitle = $doc->createElement('gd:orgTitle', $contact['job_title']);
        $org->appendChild($orgTitle);
      }
    }
    // add email element
    if ($contact['email']) {
      $email = $doc->createElement('gd:email');
      if ($contact['email_location_id'] == 1)
        $type = 'home';
      else if ($contact['email_location_id'] == 2)
        $type = 'work';
      else
        $type = 'other';
      $email->setAttribute('rel' ,'http://schemas.google.com/g/2005#'.$type);
      if ($contact['email_is_primary']) {
        $email->setAttribute('primary' ,'true');
      }
      $email->setAttribute('address' , $contact['email']);
      $entry->appendChild($email);
    }
    // add telephone element
    if ($contact['phone']) {
      $tel = $doc->createElement('gd:phoneNumber', $contact['phone'].($contact['phone_ext']?' x'.$contact['phone_ext']:''));
      // Map CiviCRM type/location values to Google values
      // see https://developers.google.com/gdata/docs/1.0/elements#gdPhoneNumber
      // Google has: home, home_fax, work, work_fax, fax, mobile, pager and other
      // Phone numbers of type 'other' are not pushed to iPhones
      // see http://support.google.com/mail/bin/answer.py?hl=en&answer=139635
      if ($contact['phone_location_id'] == 1) // home
        $location = 'home';
      else if (in_array($contact['phone_location_id'], array(2, 3, 5))) // work, main or billing
        $location = 'work';
      else
        $location = 'other';
      if ($contact['phone_type_id'] == 1) // phone
        $type = $location;
      elseif ($contact['phone_type_id'] == 2) // mobile
        $type = 'mobile';
      elseif ($contact['phone_type_id'] == 3) // fax
        $type = ($location == 'other' ? 'fax' : $location . '_fax');
      elseif ($contact['phone_type_id'] == 4) // pager
        $type = 'pager';
      else
        $type = 'other';

      $tel->setAttribute('rel' ,'http://schemas.google.com/g/2005#'.$type);
      if ($contact['phone_is_primary']) {
        $tel->setAttribute('primary' ,'true');
      }
      $entry->appendChild($tel);
    }

    // last minute adjustements on the saved document
    return $doc->saveXML();
  }
}
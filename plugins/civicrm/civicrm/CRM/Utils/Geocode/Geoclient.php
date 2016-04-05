<?php

/**
 * See if a CiviCRM custom field group exists
 *
 * @param string $group_name
 *   custom field group name to look for, corresponds to field civicrm_custom_group.name
 * @return integer
 *   custom field group id if it exists, else zero
 */
function custom_group_get_id($group_name) {
  $result = 0;

  // This is an empty array we pass in to make the retrieve() function happy
  $def = array();
  $params = array(
    'name' => $group_name,
  );

  require_once('CRM/Core/BAO/CustomGroup.php');

  $custom_group = CRM_Core_BAO_CustomGroup::retrieve($params, $def);

  if (!empty($custom_group)) {
    $result = $custom_group->id;
  }
  return $result;
}
/**
 * See if a CiviCRM custom field exists
 *
 * @param integer $custom_group_id
 *   custom group id that the field is expected to belong to
 * @param string $field_label
 *   custom field name to look for, corresponds to field civicrm_custom_field.label
 * @return integer
 *   custom field id if it exists, else zero
 */
function custom_field_get_id($custom_group_id, $field_label) {
  $result = 0;

  // This is an empty array we pass in to make the retrieve() function happy
  $def = array();
  $params = array(
    'custom_group_id' => $custom_group_id,
    'label'           => $field_label,
  );

  require_once('CRM/Core/BAO/CustomField.php');

  $custom_field = CRM_Core_BAO_CustomField::retrieve($params, $def);

  if (!empty($custom_field)) {
    $result = $custom_field->id;
  }
  return $result;
}

function populateContactAddress($address_id, $bbl) {
  $customFieldLabel = 'BBL';
  $customGroupName = 'BBL';
  $group_id = custom_group_get_id($customFieldLabel);
  $field_id = custom_field_get_id($group_id, $customFieldLabel);
  $custom_fields = array('bbl' => 'bbl_' . $field_id);

  updateCustomField($address_id, $customGroupName, $custom_fields, $bbl);
}

// updates the field, returns number of fields updated
function updateCustomField($address_id, $group_name, $field_name, $value){
  $addressParams = array('entity_id' => $address_id, "custom_" . $group_name . ":" . $field_name => $value);
  $address = new CRM_Core_DAO_Address();
  $address->id = $address_id;

  $address->copyValues($addressParams);
  $address->save();
  $address->free();

  return TRUE;
}
/*
  +--------------------------------------------------------------------+
  | CiviCRM version 4.6                                                |
  +--------------------------------------------------------------------+
  | Copyright CiviCRM LLC (c) 2004-2015                                |
  +--------------------------------------------------------------------+
  | This file is a part of CiviCRM.                                    |
  |                                                                    |
  | CiviCRM is free software; you can copy, modify, and distribute it  |
  | under the terms of the GNU Affero General Public License           |
  | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
  |                                                                    |
  | CiviCRM is distributed in the hope that it will be useful, but     |
  | WITHOUT ANY WARRANTY; without even the implied warranty of         |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
  | See the GNU Affero General Public License for more details.        |
  |                                                                    |
  | You should have received a copy of the GNU Affero General Public   |
  | License and the CiviCRM Licensing Exception along                  |
  | with this program; if not, contact CiviCRM LLC                     |
  | at info[AT]civicrm[DOT]org. If you have questions about the        |
  | GNU Affero General Public License or the licensing of CiviCRM,     |
  | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
  +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 * $Id$
 *
 */

/**
 * Class that uses geoclient geocoder
 */

class CRM_Utils_Geocode_Geoclient {

  /**
   *
   * @var string
   */
  static protected $_app_id = '3f88824d';

  /**
   *
   * @var string
   */
  static protected $_app_key = 'f2a2b535bdc9cc8f9a5e1b589002531c';

  /**
   *
   * Server to retrieve the lat/long and BBL data
   *
   * @var string
   */
  static protected $_server = 'https://api.cityofnewyork.us';

  /**
   * Uri of service.
   *
   * @var string
   */

  static protected $_uri = '/geoclient/v1/address.json?';
  /**
   * curl -v  -X GET "https://api.cityofnewyork.us/geoclient/v1/address.xml?
   * params are houseNumber=&street=n&borough=&
   * houseNumber
   * street
   * borough
   * app_id
   * app_key
   *
   */
  /**
   * Function that takes an address object and gets the latitude / longitude for this
   * address. Note that at a later stage, we could make this function also clean up
   * the address into a more valid format
   *
   * @param array $values
   * @param bool $stateName
   *
   * @return bool
   *   true if we modified the address, false otherwise
   */
  public static function format(&$values, $stateName = FALSE) {
    // establish civicrm credentials
    $config = CRM_Core_Config::singleton();

    $house_number = $values['street_number'];
    $street_name = $values['street_name'];
    $zip = $values['postal_code'];
    $entity_id = $values['address_id'];

    $query = self::$_server . self::$_uri . 'houseNumber=' . $house_number . '&street=' . $$street_name . '&zip=' . $zip . '&app_id=' . self::$_app_id . '&app_key=' . self::$_app_key;

    try {
      require_once 'HTTP/Request.php';
      $request = new HTTP_Request($query);
      $request->sendRequest();
      $string = $request->getResponseBody();

      $json = json_decode($string, true);
      $bbl = $json['address']['bbl'];
      populateContactAddress($entity_id, $bbl);
      return TRUE;
    }
    catch(Exception $e) {
      print_r($e);
    };

    usleep(5000000);
  }
}

<?php
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
   * Server to retrieve the lat/long
   *
   * @var string
   */
  static protected $_server = 'https://api.cityofnewyork.us';

  /**
   * Uri of service.
   *
   * @var string
   */

  static protected $_uri = '/geoclient/v1/address.xml?';
  /**
   * curl -v  -X GET "https://api.cityofnewyork.us/geoclient/v1/address.xml?
   * params are houseNumber=&street=n&borough=&
   * houseNumber
   * street
   * borough
   * app_id
   * app_key
   *
   * app_id=3f88824d&app_key=f2a2b535bdc9cc8f9a5e1b589002531c"
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
    // we need a valid country, else we ignore
    // is this necessary? can we default to US?
    $config = CRM_Core_Config::singleton();
    $houseNumber = $values['street_number'];
    $street = $values['street_name'];
    $borough = CRM_Utils_Array::value('city', $values);

    $query = 'http://' . self::$_server . self::$_uri . 'houseNumber=?' . $houseNumber . '&street=' . $street . '&borough=' . $borough;

    require_once 'HTTP/Request.php';
    $request = new HTTP_Request($query);
    $request->sendRequest();
    $string = $request->getResponseBody();

    libxml_use_internal_errors(TRUE);
    $xml = @simplexml_load_string($string);
    if ($xml === FALSE) {
      // account blocked maybe?
      CRM_Core_Error::debug_var('Geocoding failed.  Message from Geoclient:', $string);
      return FALSE;
    }

    if (isset($xml->status)) {
      if ($xml->status == 'OK' &&
        is_a($xml->address,
          'SimpleXMLElement'
        )
      ) {
        $ret = $xml->address->children();
        $BBL = $ret->bbl;
        echo $ret;
        echo $xml;

        require_once 'CRM/Core/BAO/CustomField.php';
        $fieldLabel = 'BBL';
        $groupTitle = 'BBL-address';
        $customFieldID = CRM_Core_BAO_CustomField::getCustomFieldID( $fieldLabel, $groupTitle );

        $custom_fields = array('BBL' => 'BBL_' + $customFieldID);

        $objectId = $values['id'];
        $contact_id = $objectId;
        require_once 'CRM/Core/BAO/CustomValueTable.php';

        $set_params = array('entityID' => $contact_id,
          $custom_fields['BBL'] => $BBL);
        CRM_Core_BAO_CustomValueTable::setValues($set_params);

        return TRUE;
      }
      elseif ($xml->status == 'OVER_QUERY_LIMIT') {
        CRM_Core_Error::debug_var('Geocoding failed. Message from Geoclient: ', (string ) $xml->status);
        $values['geo_code_1'] = $values['geo_code_2'] = 'null';
        $values['geo_code_error'] = $xml->status;
        return FALSE;
      }
    }
    return FALSE;
  }
}

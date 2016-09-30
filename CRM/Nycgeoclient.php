<?php

/**
 *
 * @package CRM
 * @copyright Fizzbuzzsophia (c) 2016
 * $Id$
 *
 */

/**
 * Class that uses NYC Geoclient API geocoder to retrieve lat/long and BBL
 */
class CRM_Nycgeoclient {
  /**
   * This is the App ID that the city of NYC has assigned to this extension.
   *
   * @var string
   */

  static protected $_appId = '9cd0a15f';
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

  static protected $_uri = '/geoclient/v1/address';

  static protected $_bblFieldId;
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
   * Return the Geo Provider Key.
   * Hardcode for now, target 4.6 and 4.7 separately due to the setting being moved.
   */
  private static function getApiKey() {
    $result = civicrm_api3('Setting', 'getvalue', array(
      'name' => "nycapiKey",
    ));
    $key = $result;
    return $key;
  }

  public static function getBblFieldId() {
    // I'm not even 100% sure this caching is necessary, but it doesn't hurt.
    if (self::$_bblFieldId) {
      return self::$_bblFieldId;
    }
    else {
      // Get the field ID for "neighborhood".
      $result = civicrm_api3('CustomField', 'getsingle', array(
        'sequential' => 1,
        'return' => array("id"),
        'custom_group_id' => "BBL",
        'name' => "BBL",
      ));
      $fieldId = $result['id'];
      return $fieldId;
    }
  }

  /**
   * Function that takes an address array and gets the BBL for this address.
   *
   * @param array $values
   *
   * @return bool
   *   true if we modified the address, false otherwise
   */
  public static function getBbl(&$values) {
    $params = array();
    $params['houseNumber'] = $values->street_number;
    $params['street'] = $values->street_name;
    $params['zip'] = $values->postal_code;

    if (!(array_key_exists('houseNumber', $params)
        && array_key_exists('street', $params)
        && array_key_exists('zip', $params))) {
      // the error logging is disabled, because it potentially produces a lot of log messages
      CRM_Core_Error::debug_log_message('Geocoding failed. Address data is incomplete.');
      $values['geo_code_error'] = "INCOMPLETE_ADDRESS";
      return FALSE;
    }
    $params['app_id'] = self::$_appId;
    $params['app_key'] = self::getApiKey();
    $url = self::$_server . self::$_uri;
    $url .= '?format=json';
    foreach ($params as $key => $value) {
      $url .= '&' . urlencode($key) . '=' . urlencode($value);
    }

    require_once 'HTTP/Request.php';
    $request = new HTTP_Request($url);
    $result = $request->sendRequest();
    // check if request was successful
    if (PEAR::isError($result)) {
      CRM_Core_Error::debug_log_message('Geocoding failed: ' . $result->getMessage());
      return FALSE;
    }
    if ($request->getResponseCode() != 200) {
      CRM_Core_Error::debug_log_message('Geocoding failed, invalid response code ' . $request->getResponseCode());
      if ($request->getResponseCode() == 429) {
        // provider says 'TOO MANY REQUESTS'
        $values['geo_code_error'] = 'OVER_QUERY_LIMIT';
      }
      else {
        $values['geo_code_error'] = $request->getResponseCode();
      }
      return FALSE;
    }

    $string = $request->getResponseBody();
    $json = json_decode($string, TRUE);
    $bbl = NULL;
    if (array_key_exists('bbl', $json['address'])) {
      $bbl = $json['address']['bbl'];
    }

    if (is_null($json) || !is_array($json)) {
      // $string could not be decoded; maybe the service is down...
      CRM_Core_Error::debug_log_message('Geocoding failed. "' . $string . '" is no valid json-code. (' . $url . ')');
      return FALSE;
    }
    elseif (count($json) == 0) {
      // array is empty; address is probably invalid...
      // the error logging is disabled, because it potentially reveals address data to the log
      CRM_Core_Error::debug_log_message('Geocoding failed.  No results for: ' . $url);
      $values['geo_code_error'] = "INCOMPLETE_ADDRESS";
      return FALSE;

    }
    elseif ($bbl != NULL && $bbl != 'null') {
      return $bbl;
    }
    elseif ($json['address']['message'] == 'INPUT ZIP CODE IS NOT A NEW YORK CITY ZIP CODE') {
      CRM_Core_Error::debug_log_message('BBL Lookup failed. This is not an NYC zip code.');
      return 'Non-NYC Zip';
    }
    else {
      // don't know what went wrong... we got an array, but without lat and lon
      CRM_Core_Error::debug_log_message('Geocoding failed. Response was positive, but no coordinates were delivered.');
      return FALSE;
    }
  }

  public static function setBbl($addressId, $bbl) {
    // FIXME: You don't need to use "custom_x", you can use BBL:BBL, but I don't 100%
    // know the syntax.  The Electoral API does this though.
    // Get the BBL custom field ID.
    $bbl_field = "custom_" . CRM_Nycgeoclient::getBblFieldId();
    // Store the BBL.
    $params['entity_id'] = $addressId;
    $params[$bbl_field] = $bbl;
    $result = civicrm_api3('CustomValue', 'create', $params);
  }

}

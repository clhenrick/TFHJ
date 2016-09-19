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
class CRM_Utils_Geocode_NYCGeoclient {
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
    if (self::version_at_least('4.7')) {
      $result = civicrm_api3('Setting', 'getvalue', array(
        'name' => "geoAPIKey",
      ));
      $key = $result;
    }
    else {
      $key = '';
    }
    return $key;
  }

  private static function getBblFieldId() {
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

  /**
   * Check version is at least as high as the one passed.
   *
   * @param string $version
   *
   * @return bool
   */
  private function version_at_least($version) {
    $codeVersion = explode('.', CRM_Utils_System::version());
    if (version_compare($codeVersion[0] . '.' . $codeVersion[1], $version) >= 0) {
      return TRUE;
    }
    return FALSE;
  }

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

    $params = array();
    $params['houseNumber'] = CRM_Utils_Array::value('street_number', $values);
    $params['street'] = CRM_Utils_Array::value('street_name', $values);
    $params['zip'] = CRM_Utils_Array::value('postal_code', $values);
    // This used to be 'address_id'.  That's not correct for real-time geocoding;
    // but maybe it's correct for batch geocoding?  We'll need to check.
    $entity_id = CRM_Utils_Array::value('id', $values);

    // Get the BBL custom field ID.
    $bblFieldId = self::getBblFieldId();

    if (!(array_key_exists('houseNumber', $params)
        && array_key_exists('street', $params)
        && array_key_exists('zip', $params)
        && isset($entity_id))) {
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
      } else {
        $values['geo_code_error'] = $request->getResponseCode();
      }
      return FALSE;
    }

    $string = $request->getResponseBody();
    $json = json_decode($string, true);
    $bbl = null;
    if (array_key_exists('bbl', $json['address'])){
      $bbl = $json['address']['bbl'];
    }

    if (is_null($json) || !is_array($json)) {
      // $string could not be decoded; maybe the service is down...
      CRM_Core_Error::debug_log_message('Geocoding failed. "' . $string . '" is no valid json-code. (' . $url . ')');
      return FALSE;
    } elseif (count($json) == 0) {
      // array is empty; address is probably invalid...
      // the error logging is disabled, because it potentially reveals address data to the log
      CRM_Core_Error::debug_log_message('Geocoding failed.  No results for: ' . $url);
      $values['geo_code_error'] = "INCOMPLETE_ADDRESS";
      return FALSE;

    } elseif ($bbl != null && $bbl != 'null') {
      $values["custom_$bblFieldId"] = $json['address']['bbl'];
      $values['geo_code_1'] = substr($json['address']['latitude'],0,12);
      $values['geo_code_2'] = substr($json['address']['longitude'],0,12);
      return TRUE;
    } else {
      // don't know what went wrong... we got an array, but without lat and lon
      CRM_Core_Error::debug_log_message('Geocoding failed. Response was positive, but no coordinates were delivered.');
      return FALSE;
    }
  }
}

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
 * A PHP cron script to format all the addresses in the database. Currently
 * it only does geocoding if the geocode values are not set. At a later
 * stage we will also handle USPS address cleanup and other formatting
 * issues
 *
 */
class CRM_Utils_Address_BatchUpdate {

  var $start = NULL;
  var $end = NULL;
  var $geocoding = 1;
  var $parse = 1;
  var $throttle = 0;
  var $app_key = NULL;
  var $app_id = NULL;

  var $returnMessages = array();
  var $returnError = 0;

  /**
   * @param array $params
   */
  public function __construct($params) {

    foreach ($params as $name => $value) {
      $this->$name = $value;
    }

    // fixme: more params verification
  }

  /**
   * @return array
   */
  public function run() {

    $config = &CRM_Core_Config::singleton();

    // do check for geocoding.
    $processGeocode = FALSE;
    if (empty($config->geocodeMethod)) {
      if (CRM_Utils_String::strtobool($this->geocoding) === TRUE) {
        $this->returnMessages[] = ts('Error: You need to set a mapping provider under Administer > System Settings > Mapping and Geocoding');
        $this->returnError = 1;
        $this->returnResult();
      }
    }
    else {
      $processGeocode = TRUE;
      // user might want to over-ride.
      if (CRM_Utils_String::strtobool($this->geocoding) === FALSE) {
        $processGeocode = FALSE;
      }
    }

    // do check for parse street address.
    $parseAddress = FALSE;
    $parseAddress = CRM_Utils_Array::value('street_address_parsing',
      CRM_Core_BAO_Setting::valueOptions(CRM_Core_BAO_Setting::SYSTEM_PREFERENCES_NAME,
        'address_options'
      ),
      FALSE
    );
    $parseStreetAddress = FALSE;
    if (!$parseAddress) {
      if (CRM_Utils_String::strtobool($this->parse) === TRUE) {
        $this->returnMessages[] = ts('Error: You need to enable Street Address Parsing under Administer > Localization > Address Settings.');
        $this->returnError = 1;
        return $this->returnResult();
      }
    }
    else {
      $parseStreetAddress = TRUE;
      // user might want to over-ride.
      if (CRM_Utils_String::strtobool($this->parse) === FALSE) {
        $parseStreetAddress = FALSE;
      }
    }

    // don't process.
    if (!$parseStreetAddress && !$processGeocode) {
      $this->returnMessages[] = ts('Error: Both Geocode mapping as well as Street Address Parsing are disabled. You must configure one or both options to use this script.');
      $this->returnError = 1;
      return $this->returnResult();
    }

    // do check for parse street address.
    return $this->processContacts($config, $processGeocode, $parseStreetAddress);
  }

  /**
   * @param $config
   * @param $processGeocode
   * @param $parseStreetAddress
   *
   * @return array
   * @throws Exception
   */
  public function processContacts(&$config, $processGeocode, $parseStreetAddress) {
    // build where clause.
    $clause = array('( c.id = a.contact_id )');

    $params = array();
    if ($this->start) {
      $clause[] = "( c.id >= %1 )";
      $params[1] = array($this->start, 'Integer');
    }

    if ($this->end) {
      $clause[] = "( c.id <= %2 )";
      $params[2] = array($this->end, 'Integer');
    }

    if ($processGeocode) {
      $clause[] = "( v.bbl_153 is null OR v.bbl_153 = 0 )";
    }

    $whereClause = implode(' AND ', $clause);
    $custom_table = "civicrm_value_bbl_18";

    $query = "
    SELECT     c.id,
               a.id as address_id,
               a.street_address,
               a.street_number,
               a.street_name,
               a.postal_code,
               v.bbl_153 as bbl
    FROM       civicrm_contact  c
    INNER JOIN civicrm_address        a ON a.contact_id = c.id
    LEFT  JOIN civicrm_value_bbl_18   v ON v.entity_id = a.id
    WHERE      {$whereClause}
      ORDER BY a.id
    ";
    $totalGeocoded = $totalAddresses = $totalAddressParsed = 0;

    $dao = CRM_Core_DAO::executeQuery($query, $params);
    if ($processGeocode) {
      require_once str_replace('_', DIRECTORY_SEPARATOR, $config->geocodeMethod) . '.php';
    }

    $unparseableContactAddress = array();
    while ($dao->fetch()) {
      $totalAddresses++;
      $params = array(
        'address_id' => $dao->id,
        'street_name' => $dao->street_name,
        'street_number' => $dao->street_number,
        'postal_code' => $dao->postal_code,
        'app_key' => $this->app_key,
        'app_id' => $this->app_id,
      );
      $addressParams = array();

      // process geocode.
      if ($processGeocode) {
        // loop through the address removing more information
        // so we can get some geocode for a partial address
        // i.e. city -> state -> country

        for($attempt=0; $attempt<5; $attempt++){
          if ($this->throttle) {
            usleep(50000);
          }

          $className = $config->geocodeMethod;
          if($className::format($params, TRUE)) {
            $attempt = 10;
          }

          // see if we got a geocode error, in this case we'll trigger a fatal
          // CRM-13760
          if (isset($params['geo_code_error'])) {
            if ($params['geo_code_error'] == 'OVER_QUERY_LIMIT') {
              CRM_Core_Error::fatal('Aborting batch geocoding. Hit the over query limit on geocoder.');
            }
            if ($params['geo_code_error'] == 'INCOMPLETE_ADDRESS') {
              CRM_Core_Error::debug_log_message("Incomplete address.");
              $attempt = 10;
            }
          }

          if (isset($params['bbl'])){
            $bbl = $params['bbl'];
            if ($bbl != null && $bbl != 'null'){
              $attempt = 10;
            }
          }
        }

        if (isset($params['bbl']) && $params['bbl'] != 'null') {
          $totalGeocoded++;
          $addressParams['bbl'] = $params['bbl'];
        }

        if (isset($params['geo_code_1']) && $params['geo_code_1'] != 'null') {
          $addressParams['geo_code_1'] = $params['geo_code_1'];
          $addressParams['geo_code_2'] = $params['geo_code_2'];
          $addressParams['postal_code'] = $params['postal_code'];
          $addressParams['postal_code_suffix'] = CRM_Utils_Array::value('postal_code_suffix', $params);
        }
      }

      // parse street address
      if ($parseStreetAddress) {
        $parsedFields = CRM_Core_BAO_Address::parseStreetAddress($dao->street_address);
        $success = TRUE;
        // consider address is automatically parseable,
        // when we should found street_number and street_name
        if (empty($parsedFields['street_name']) || empty($parsedFields['street_number'])) {
          $success = FALSE;
        }

        // do check for all elements.
        if ($success) {
          $totalAddressParsed++;
        }
        elseif ($dao->street_address) {
          //build contact edit url,
          //so that user can manually fill the street address fields if the street address is not parsed, CRM-5886
          $url = CRM_Utils_System::url('civicrm/contact/add', "reset=1&action=update&cid={$dao->id}");
          $unparseableContactAddress[] = " Contact ID: " . $dao->id . " <a href =\"$url\"> " . $dao->street_address . " </a> ";
          // reset element values.
          $parsedFields = array_fill_keys(array_keys($parsedFields), '');
        }
        $addressParams = array_merge($addressParams, $parsedFields);
      }

      // finally update address object.
      if (!empty($params['bbl'])) {
        $field_label = 'BBL';
        $group_name = 'BBL';

        require_once 'CRM/Core/BAO/CustomField.php';
        $custom_field_id = CRM_Core_BAO_CustomField::getCustomFieldID($field_label, $group_name);
        $custom_bbl_field = "custom_" . $custom_field_id;

        $set_params_for_bbl = array(
          $custom_bbl_field => $params['bbl'],
          'entity_id' => $dao->address_id,
        );
        assert(isset($params['bbl']) && $params['bbl'] != 'null', 'bbl is null');
        civicrm_api3('CustomValue', 'create', $set_params_for_bbl);
      }

       // finally update address object.
      if (!empty($addressParams) && !empty($params['geo_code_1']))  {
        $address = new CRM_Core_DAO_Address();
        $address->id = $dao->address_id;
        $address->copyValues($addressParams);
        $address->save();
        $address->free();
      }
    }

    $this->returnMessages[] = ts("Addresses Evaluated: %1", array(
      1 => $totalAddresses,
      )) . "\n";
    if ($processGeocode) {
      $this->returnMessages[] = ts("Addresses Geocoded: %1", array(
          1 => $totalGeocoded,
        )) . "\n";
    }
    if ($parseStreetAddress) {
      $this->returnMessages[] = ts("Street Addresses Parsed: %1", array(
          1 => $totalAddressParsed,
        )) . "\n";
      if ($unparseableContactAddress) {
        $this->returnMessages[] = "<br />\n" . ts("Following is the list of contacts whose address is not parsed:") . "<br />\n";
        foreach ($unparseableContactAddress as $contactLink) {
          $this->returnMessages[] = $contactLink . "<br />\n";
        }
      }
    }

    return $this->returnResult();
  }

  /**
   * @return array
   */
  public function returnResult() {
    $result = array();
    $result['is_error'] = $this->returnError;
    $result['messages'] = implode("", $this->returnMessages);
    return $result;
  }

}

<?php

require_once 'nycgeoclientgeocoder.civix.php';


function nycgeoclientgeocoder_civicrm_check(&$messages) {
  nycgeoclientgeocoder_addressParsingIsEnabled($messages);
}

function nycgeoclientgeocoder_addressParsingIsEnabled(&$messages) {
  // Get the value of "Street Address Parsing" from the option values table.
  $id = civicrm_api3('OptionValue', 'getsingle', array(
    'return' => array("value"),
    'option_group_id' => "address_options",
    'name' => "street_address_parsing",
  ));
  // Get the address_options.
  $result = civicrm_api3('Setting', 'get', array(
    'sequential' => 1,
    'return' => array("address_options"),
  ));
  // Is "Street Address Parsing" set in address_options?
  $parsingEnabled = in_array($id['value'], $result['values'][0]['address_options']);
  if (!$parsingEnabled) {
    $messages[] = new CRM_Utils_Check_Message(
      'nycgeoclientgeocoder_parsingEnabled',
      ts('You have enabled the NYC Geo Client Geocoder extension, but you have not enabled "Street Address Parsing" field in Administer menu » Localization » Address Settings.'),
      ts('Street Address Parsing is not enabled'),
      \Psr\Log\LogLevel::WARNING,
      'fa-globe'
    );
  }
}
/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function nycgeoclientgeocoder_civicrm_config(&$config) {
  _nycgeoclientgeocoder_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param array $files
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function nycgeoclientgeocoder_civicrm_xmlMenu(&$files) {
  _nycgeoclientgeocoder_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function nycgeoclientgeocoder_civicrm_install() {
  // Let's enable street address parsing if it's not.

  // Get the value of "Street Address Parsing" from the option values table.
  $id = civicrm_api3('OptionValue', 'getsingle', array(
    'return' => array("value"),
    'option_group_id' => "address_options",
    'name' => "street_address_parsing",
  ));
  // Get the address_options.
  $result = civicrm_api3('Setting', 'get', array(
    'sequential' => 1,
    'return' => array("address_options"),
  ));
  // Is "Street Address Parsing" set in address_options?
  $parsingEnabled = in_array($id['value'], $result['values'][0]['address_options']);
  if (!$parsingEnabled) {
    $result['values'][0]['address_options'][] = $id['value'];
    $result = civicrm_api3('Setting', 'create', array(
      'sequential' => 1,
      'address_options' => $result['values'][0]['address_options'],
    ));
  }
  _nycgeoclientgeocoder_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function nycgeoclientgeocoder_civicrm_uninstall() {
  _nycgeoclientgeocoder_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function nycgeoclientgeocoder_civicrm_enable() {
  _nycgeoclientgeocoder_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function nycgeoclientgeocoder_civicrm_disable() {
  _nycgeoclientgeocoder_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function nycgeoclientgeocoder_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _nycgeoclientgeocoder_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function nycgeoclientgeocoder_civicrm_managed(&$entities) {
  _nycgeoclientgeocoder_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * @param array $caseTypes
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function nycgeoclientgeocoder_civicrm_caseTypes(&$caseTypes) {
  _nycgeoclientgeocoder_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function nycgeoclientgeocoder_civicrm_angularModules(&$angularModules) {
_nycgeoclientgeocoder_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function nycgeoclientgeocoder_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _nycgeoclientgeocoder_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function nycgeoclientgeocoder_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function nycgeoclientgeocoder_civicrm_navigationMenu(&$menu) {
  _nycgeoclientgeocoder_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'unhp.nycgeoclientgeocoder')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _nycgeoclientgeocoder_civix_navigationMenu($menu);
} // */

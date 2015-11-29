<?php

require_once 'hrprofile.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function hrprofile_civicrm_config(&$config) {
  _hrprofile_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function hrprofile_civicrm_xmlMenu(&$files) {
  _hrprofile_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function hrprofile_civicrm_install() {
  $groups = CRM_Core_PseudoConstant::get('CRM_Core_BAO_UFField', 'uf_group_id', array('labelColumn' => 'name'));
  $profileId = array_search('hrstaffdir_listing', $groups);
  if ($profileId) {
    $originalUrl = "civicrm/profile&reset=1&gid={$profileId}&force=1";
    $updatedUrl = "civicrm/profile/table&reset=1&gid={$profileId}&force=1";
    hrprofile_updateNavigation($originalUrl, $updatedUrl);
  }
  return _hrprofile_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function hrprofile_civicrm_uninstall() {
  $groups = CRM_Core_PseudoConstant::get('CRM_Core_BAO_UFField', 'uf_group_id', array('labelColumn' => 'name'));
  $profileId = array_search('hrstaffdir_listing', $groups);
  if ($profileId) {
    $originalUrl = "civicrm/profile/table&reset=1&gid={$profileId}&force=1";
    $updatedUrl = "civicrm/profile&reset=1&gid={$profileId}&force=1";
    hrprofile_updateNavigation($originalUrl, $updatedUrl);
  }
  return _hrprofile_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function hrprofile_civicrm_enable() {
  $groups = CRM_Core_PseudoConstant::get('CRM_Core_BAO_UFField', 'uf_group_id', array('labelColumn' => 'name'));
  $profileId = array_search('hrstaffdir_listing', $groups);
  if ($profileId) {
    $originalUrl = "civicrm/profile&reset=1&gid={$profileId}&force=1";
    $updatedUrl = "civicrm/profile/table&reset=1&gid={$profileId}&force=1";
    hrprofile_updateNavigation($originalUrl, $updatedUrl);
  }
  return _hrprofile_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function hrprofile_civicrm_disable() {
  $groups = CRM_Core_PseudoConstant::get('CRM_Core_BAO_UFField', 'uf_group_id', array('labelColumn' => 'name'));
  $profileId = array_search('hrstaffdir_listing', $groups);
  if ($profileId) {
    $originalUrl = "civicrm/profile/table&reset=1&gid={$profileId}&force=1";
    $updatedUrl = "civicrm/profile&reset=1&gid={$profileId}&force=1";
    hrprofile_updateNavigation($originalUrl, $updatedUrl);
  }
  return _hrprofile_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function hrprofile_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _hrprofile_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function hrprofile_civicrm_managed(&$entities) {
  return _hrprofile_civix_civicrm_managed($entities);
}

function hrprofile_updateNavigation($orginalUrl, $updatedUrl) {
 
    $navigationParams = array(
                              'label' => 'Directory',
                              'url' => "$orginalUrl",
                              'is_active' => 1,
                              );
    $navigationParamsNew = array(
                                 'label' => 'Directory',
                                 'url' => "$updatedUrl",
                                 'is_active' => 1,
                                 );
    $navigation = CRM_Core_BAO_Navigation::processUpdate($navigationParams,$navigationParamsNew);
    return true;
}
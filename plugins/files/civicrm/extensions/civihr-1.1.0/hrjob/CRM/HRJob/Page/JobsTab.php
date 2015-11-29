<?php
/*
+--------------------------------------------------------------------+
| CiviHR version 1.0                                                 |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2013                                |
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

require_once 'CRM/Core/Page.php';

class CRM_HRJob_Page_JobsTab extends CRM_Core_Page {
  function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(ts('JobsTab'));

    self::registerScripts();
    parent::run();
  }

  static function registerScripts() {
    static $loaded = FALSE;
    if ($loaded) {
      return;
    }
    $loaded = TRUE;

    CRM_Core_Resources::singleton()
      ->addSettingsFactory(function () {
      $config = CRM_Core_Config::singleton();
      return array(
        'PseudoConstant' => array(
          'locationType' => CRM_Core_PseudoConstant::get('CRM_Core_DAO_Address', 'location_type_id'),
        ),
        'FieldOptions' => CRM_HRJob_Page_JobsTab::getFieldOptions(),
        'jobTabApp' => array(
          'contact_id' => CRM_Utils_Request::retrieve('cid', 'Integer'),
          'isLogEnabled'    => (bool) $config->logging,
          'loggingReportId' => CRM_Report_Utils_Report::getInstanceIDForValue('logging/contact/summary'),
          'currencies' => CRM_HRJob_Page_JobsTab::getCurrencyFormats(),
        ),
      );
    })
      ->addScriptFile('civicrm', 'packages/backbone/json2.js', 100, 'html-header', FALSE)
      ->addScriptFile('civicrm', 'packages/backbone/underscore.js', 110, 'html-header', FALSE)
      ->addScriptFile('civicrm', 'packages/backbone/backbone.js', 120, 'html-header')
      ->addScriptFile('civicrm', 'packages/backbone/backbone.marionette.js', 125, 'html-header', FALSE)
      ->addScriptFile('civicrm', 'packages/backbone/backbone.modelbinder.js', 125, 'html-header', FALSE)
      ->addScriptFile('civicrm', 'js/jquery/jquery.crmContactField.js', 125, 'html-header', FALSE)
      ->addScriptFile('civicrm', 'js/jquery/jquery.crmRevisionLink.js', 125, 'html-header', FALSE)
      ->addScriptFile('org.civicrm.hrjob', 'js/jquery/jquery.hrContactLink.js', 125, 'html-header', FALSE)
      ->addScriptFile('civicrm', 'js/crm.backbone.js', 130, 'html-header', FALSE)
      ->addStyleFile('org.civicrm.hrjob', 'css/hrjob.css', 140, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/hrapp.js', 150, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/renderutil.js', 155, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/entities/hrjob.js', 155, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/common/navigation.js', 155, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/common/mbind.js', 155, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/common/views.js', 155, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/jobtabapp.js', 160, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/jobtabapp/intro/show_controller.js', 160, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/jobtabapp/intro/show_views.js', 160, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/jobtabapp/tree/tree_controller.js', 160, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/jobtabapp/tree/tree_views.js', 160, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/jobtabapp/summary/summary_controller.js', 160, 'html-header')
      ->addScriptFile('org.civicrm.hrjob', 'js/jobtabapp/summary/summary_views.js', 160, 'html-header')
    ;
    foreach (array('general', 'funding', 'health', 'hour', 'leave', 'pay', 'pension', 'role') as $module) {
      CRM_Core_Resources::singleton()
        ->addScriptFile('org.civicrm.hrjob', "js/jobtabapp/$module/edit_controller.js", 160, 'html-header')
        ->addScriptFile('org.civicrm.hrjob', "js/jobtabapp/$module/edit_views.js", 160, 'html-header')
        ->addScriptFile('org.civicrm.hrjob', "js/jobtabapp/$module/summary_views.js", 160, 'html-header')
        ;
    }

    $templateDir = CRM_Extension_System::singleton()->getMapper()->keyToBasePath('org.civicrm.hrjob') . '/templates/';
    $region = CRM_Core_Region::instance('page-header');
    foreach (glob($templateDir . 'CRM/HRJob/Underscore/*.tpl') as $file) {
      $fileName = substr($file, strlen($templateDir));
      $region->add(array(
          'template' => $fileName
        ));
    }

    $region->add(array(
      'template' => 'CRM/Form/validate.tpl'
    ));
  }

  /**
   * Get a list of all interesting options
   *
   * @return array e.g. $fieldOptions[$entityName][$fieldName] contains key-value options
   */
  public static function getFieldOptions() {
    $fields = array(
      'HRJob' => array(
        "contract_type",
        "level_type",
        "period_type",
        "location",
        'notice_unit',
        'department'
      ),
      'HRJobHour' => array(
        'hours_type',
        'hours_unit',
      ),
      'HRJobPay' => array(
        'pay_grade',
        'pay_unit',
        'pay_currency',
      ),
      'HRJobPension' => array(
        'pension_type',
      ),
      'HRJobHealth' => array(
        'provider',
        'plan_type',
        'provider_life_insurance',
        'plan_type_life_insurance',
      ),
      'HRJobLeave' => array(
        'leave_type',
      ),
      'HRJobRole' => array(
        'location',
        'department'
      ),
    );
    $fieldOptions = array();
    foreach ($fields as $entityName => $fieldNames) {
      foreach ($fieldNames as $fieldName) {
        $fieldOptions[$entityName][$fieldName] = CRM_Core_PseudoConstant::get("CRM_HRJob_DAO_{$entityName}", $fieldName);
      }
    }
    return $fieldOptions;
  }

  /**
   * Get a list of templates demonstrating how to format currencies.
   */
  static function getCurrencyFormats() {
    $currencies = CRM_Core_PseudoConstant::get('CRM_HRJob_DAO_HRJobPay', 'pay_currency');
    $formats = array();
    foreach ($currencies as $currency => $label) {
      $formats[$currency] = CRM_Utils_Money::format(1234.56, $currency);
    }
    return $formats;
  }
}

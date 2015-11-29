<?php

/**
 * Class CRM_Extendedreport_Form_Report_ActivityExtended
 */
class CRM_Extendedreport_Form_Report_ActivityExtended extends CRM_Extendedreport_Form_Report_ExtendedReport {
//todo move def to getActivityColumns
  /**
   * @var array
   */
  protected $_customGroupExtended = array(
    'contact_activity' => array(
      'extends' => array('Activity'),
      'title'  => 'Activity',
    ),
  );
  /**
   * @var bool
   */
  protected $_addressField = FALSE;
  /**
   * @var bool
   */
  protected $_emailField = FALSE;
  /**
   * @var null
   */
  protected $_summary = NULL;
  /**
   * @var bool
   */
  protected $_exposeContactID = FALSE;
  /**
   * @var bool
   */
  protected $_customGroupGroupBy = FALSE;
  /**
   * @var string
   */
  protected $_baseTable = 'civicrm_activity';

  /**
   * constructor
   * @todo allow filtering on other contacts
   */
  function __construct() {
    $this->_columns = $this->getContactColumns(array('prefix' => '', 'prefix_label' => 'Source Contact ::', 'filters' => TRUE))
    + $this->getContactColumns(array('prefix' => 'target_', 'prefix_label' => 'Target Contact ::', 'filters' => FALSE))
    + $this->getContactColumns(array('prefix' => 'assignee_', 'prefix_label' => 'Assignee Contact ::', 'filters' => FALSE))

    + $this->getActivityColumns();
    parent::__construct();
  }

  /**
   * Generate From clause
   * @todo Should remove all this to parent class
   */
  function from() {
    $this->_from = "
    FROM civicrm_activity {$this->_aliases['civicrm_activity']}";
    $this->joinActivityTargetFromActivity();
    $this->joinActivityAssigneeFromActivity();
    $this->joinActivitySourceFromActivity();
    $this->_from .= " {$this->_aclFrom} ";
   if ($this->isTableSelected('civicrm_case')) {
     $this->_from .= "
       LEFT JOIN civicrm_case_activity case_activity_civireport
         ON case_activity_civireport.activity_id = {$this->_aliases['civicrm_activity']}.id
       LEFT JOIN civicrm_case
         ON case_activity_civireport.case_id = civicrm_case.id ";
    }

   if ($this->isTableSelected('civicrm_email')) {
     $this->_from .= "
       LEFT JOIN civicrm_email civicrm_email_source
         ON {$this->_aliases['civicrm_activity']}.source_contact_id = civicrm_email_source.contact_id
         AND civicrm_email_source.is_primary = 1

       LEFT JOIN civicrm_email civicrm_email_target
         ON {$this->_aliases['civicrm_activity_target']}.target_contact_id = civicrm_email_target.contact_id
         AND civicrm_email_target.is_primary = 1

       LEFT JOIN civicrm_email civicrm_email_assignee
        ON {$this->_aliases['civicrm_activity_assignment']}.assignee_contact_id = civicrm_email_assignee.contact_id
        AND civicrm_email_assignee.is_primary = 1 ";
    }
    $this->addAddressFromClause();
    $this->selectableCustomDataFrom();
  }

  /**
   *
   */
  function postProcess() {
    // get the acl clauses built before we assemble the query
    //@todo - find out why the parent doesn't do this - or if it now does
    $this->buildACLClause($this->_aliases['civicrm_contact']);
    parent::postProcess();
  }
}

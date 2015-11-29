<?php

class CRM_Extendedreport_Form_Report_Contact_Basiccontact extends CRM_Extendedreport_Form_Report_ExtendedReport {
  protected $_baseTable = 'civicrm_contact';
  protected $skipACL = false;
  protected $_joinFilters = array('address_from_contact' => array('civicrm_address' =>  'is_primary = 1 '));
  function __construct() {
    $this->_columns = $this->getContactColumns(array(
      'fields' => true,
      'order_by' => false)
    )
    + $this->getAddressColumns(array(
        'fields' => true,
        'order_by' => false)
    )
    + $this->getEmailColumns(array(
        'fields' => true,
        'order_by' => false)
    )
    + $this->getLatestActivityColumns(array('filters' => false, 'fields' => array('activity_type' => array('title' => 'Latest Activity'))))
    + $this->getTagColumns()
    + $this->getPhoneColumns();
    $this->_columns['civicrm_contact']['fields']['id']['required'] = true;
    $this->addTemplateSelector();
    $this->_groupFilter = true;
    parent::__construct();
  }

  function fromClauses( ) {
    return array(
      'address_from_contact',
      'email_from_contact',
      'phone_from_contact',
      'latestactivity_from_contact',
      'entitytag_from_contact',
    );
  }

  function groupBy() {
     $this->_groupBy = "GROUP BY {$this->_aliases['civicrm_contact']}.id";
  }
}

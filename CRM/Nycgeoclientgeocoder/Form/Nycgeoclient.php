<?php

require_once 'CRM/Core/Form.php';

/**
 * Form controller class
 *
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC43/QuickForm+Reference
 */
class CRM_Nycgeoclientgeocoder_Form_Nycgeoclient extends CRM_Core_Form {

  protected $_settings = array(
    'nycapiAppId' => 'NYC Api App ID',
    'nycapiKey' => 'NYC Api Key',
  );

  public function buildQuickForm() {

    // add form elements
    $this->add(
      'text', // field type
      'nycapiAppId', // field name
      ts('NYC API App ID') // field label
    );
    $this->add(
      'text', // field type
      'nycapiKey', // field name
      ts('NYC API Key') // field label
    );
    $this->addButtons(array(
      array(
        'type' => 'submit',
        'name' => ts('Submit'),
        'isDefault' => TRUE,
      ),
    ));

    // export form elements
    $this->assign('elementNames', $this->getRenderableElementNames());
    parent::buildQuickForm();
  }

  public function postProcess() {
    CRM_Core_Error::debug_var('this', $this);
  }

  /**
   * Get the fields/elements defined in this form.
   *
   * @return array (string)
   */
  public function getRenderableElementNames() {
    // The _elements list includes some items which should not be
    // auto-rendered in the loop -- such as "qfKey" and "buttons".  These
    // items don't have labels.  We'll identify renderable by filtering on
    // the 'label'.
    $elementNames = array();
    foreach ($this->_elements as $element) {
      /** @var HTML_QuickForm_Element $element */
      $label = $element->getLabel();
      if (!empty($label)) {
        $elementNames[] = $element->getName();
      }
    }
    return $elementNames;
  }

}

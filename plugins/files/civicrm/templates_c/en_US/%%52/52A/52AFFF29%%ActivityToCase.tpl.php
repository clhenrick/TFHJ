<?php /* Smarty version 2.6.27, created on 2015-11-20 18:46:57
         compiled from CRM/Case/Form/ActivityToCase.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Case/Form/ActivityToCase.tpl', 1, false),array('block', 'ts', 'CRM/Case/Form/ActivityToCase.tpl', 41, false),array('function', 'crmURL', 'CRM/Case/Form/ActivityToCase.tpl', 61, false),array('function', 'crmKey', 'CRM/Case/Form/ActivityToCase.tpl', 106, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! empty ( $this->_tpl_vars['buildCaseActivityForm'] )): ?>
  <div class="crm-block crm-form-block crm-case-activitytocase-form-block">
    <table class="form-layout">
      <tr class="crm-case-activitytocase-form-block-file_on_case_unclosed_case_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['file_on_case_unclosed_case_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['file_on_case_unclosed_case_id']['html']; ?>
</td>
      </tr>
      <tr class="crm-case-activitytocase-form-block-file_on_case_target_contact_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['file_on_case_target_contact_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['file_on_case_target_contact_id']['html']; ?>
</td>
      </tr>
      <tr class="crm-case-activitytocase-form-block-file_on_case_activity_subject">
        <td class="label"><?php echo $this->_tpl_vars['form']['file_on_case_activity_subject']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['file_on_case_activity_subject']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can modify the activity subject before filing.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
    </table>
  </div>
<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\');
      $(\'input[name=file_on_case_unclosed_case_id]\', $form).crmSelect2({
        placeholder: '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>- select case -<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ',
        minimumInputLength: 1,
        formatResult: CRM.utils.formatSelect2Result,
        formatSelection: function(row) {
          return row.label;
        },
        initSelection: function($el, callback) {
          callback($el.data(\'value\'));
        },
        ajax: {
          url: '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/case/ajax/unclosed','h' => 0), $this);?>
"<?php echo ',
          data: function(term) {
            return {term: term, excludeCaseIds: "'; ?>
<?php echo $this->_tpl_vars['currentCaseId']; ?>
<?php echo '"};
          },
          results: function(response) {
            return {results: response};
          }
        }
      });
    });
  </script>
'; ?>


<?php else: ?>
<?php echo '
<script type="text/javascript">
(function($) {
  window.fileOnCase = function(action, activityID, currentCaseId, a) {
    if ( action == "move" ) {
      var dialogTitle = "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Move to Case<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
    } else if ( action == "copy" ) {
      var dialogTitle = "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Copy to Case<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
    } else if ( action == "file" ) {
      var dialogTitle = "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>File on Case<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
    }

    var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/case/addToCase','q' => 'reset=1','h' => 0), $this);?>
"<?php echo ';
    dataUrl += \'&activityId=\' + activityID + \'&caseId=\' + currentCaseId + \'&cid=\' + '; ?>
"<?php echo $this->_tpl_vars['contactID']; ?>
"<?php echo ';

    function save() {
      var $context = $(\'div.crm-confirm-dialog\'),
        selectedCaseId = $(\'input[name=file_on_case_unclosed_case_id]\', $context).val(),
        caseTitle = $(\'input[name=file_on_case_unclosed_case_id]\', $context).select2(\'data\').label,
        contactId = $(\'input[name=file_on_case_unclosed_case_id]\', $context).select2(\'data\').extra.contact_id,
        subject = $("#file_on_case_activity_subject").val(),
        targetContactId = $("#file_on_case_target_contact_id").val();

      if (!$("#file_on_case_unclosed_case_id").val()) {
        $("#file_on_case_unclosed_case_id").crmError(\''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please select a case from the list<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '.\');
        return false;
      }

      var postUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/activity/convert','h' => 0), $this);?>
"<?php echo ';
      $.post( postUrl, { activityID: activityID, caseID: selectedCaseId, contactID: contactId, newSubject: subject, targetContactIds: targetContactId, mode: action, key: '; ?>
"<?php echo smarty_function_crmKey(array('name' => 'civicrm/ajax/activity/convert'), $this);?>
"<?php echo ' },
        function( values ) {
          if ( values.error_msg ) {
            $().crmError(values.error_msg, "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Unable to file on case.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '");
          } else {
            var destUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/case','q' => 'reset=1&action=view&id=','h' => 0), $this);?>
"<?php echo ';
            var context = \'\';
            '; ?>
<?php if (! empty ( $this->_tpl_vars['fulltext'] )): ?><?php echo '
            context = \'&context='; ?>
<?php echo $this->_tpl_vars['fulltext']; ?>
<?php echo '\';
            '; ?>
<?php endif; ?><?php echo '
            var caseUrl = destUrl + selectedCaseId + \'&cid=\' + contactId + context;

            var statusMsg = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => '%1')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Activity has been filed to %1 case.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
            CRM.alert(ts(statusMsg, {1: \'<a href="\' + caseUrl + \'">\' + caseTitle + \'</a>\'}), \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Saved<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\', \'success\');
            CRM.refreshParent(a);
          }
        }
      );
    }

    CRM.confirm({
      title: dialogTitle,
      width: \'600\',
      resizable: true,
      options: {yes: "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Save<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '", no: "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '"},
      url: dataUrl
    }).on(\'crmConfirm:yes\', save);

  }
})(CRM.$);
</script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
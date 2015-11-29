<?php /* Smarty version 2.6.27, created on 2015-11-29 11:33:59
         compiled from CRM/Report/Form/Tabs/Instance.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Tabs/Instance.tpl', 1, false),array('block', 'ts', 'CRM/Report/Form/Tabs/Instance.tpl', 48, false),array('function', 'help', 'CRM/Report/Form/Tabs/Instance.tpl', 29, false),array('modifier', 'crmAddClass', 'CRM/Report/Form/Tabs/Instance.tpl', 52, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="report-tab-format" class="civireport-criteria">
  <table class="form-layout">
    <tr class="crm-report-instanceForm-form-block-title">
      <td class="report-label" width="20%"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-report_title",'file' => "CRM/Report/Form/Tabs/Settings.hlp"), $this);?>
</td>
      <td ><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td>
    </tr>
    <tr class="crm-report-instanceForm-form-block-description">
      <td class="report-label" width="20%"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
    </tr>
    <tr class="crm-report-instanceForm-form-block-report_header">
      <td class="report-label" width="20%"><?php echo $this->_tpl_vars['form']['report_header']['label']; ?>
<?php echo smarty_function_help(array('id' => "id-report_header",'file' => "CRM/Report/Form/Tabs/Settings.hlp"), $this);?>
</td>
      <td><?php echo $this->_tpl_vars['form']['report_header']['html']; ?>
</td>
    </tr>
    <tr class="crm-report-instanceForm-form-block-report_footer">
      <td class="report-label" width="20%"><?php echo $this->_tpl_vars['form']['report_footer']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['report_footer']['html']; ?>
</td>
    </tr>
  </table>
</div>

<div id="report-tab-email" class="civireport-criteria">
  <h3 class="email-delivery-settings-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Delivery Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-email_settings",'file' => "CRM/Report/Form/Tabs/Settings.hlp"), $this);?>
</h3>
  <table class="form-layout email-delivery-settings-fields">
    <tr class="crm-report-instanceForm-form-block-email_subject">
      <td class="report-label" width="20%"><?php echo $this->_tpl_vars['form']['email_subject']['label']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email_subject']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
    </tr>
    <tr class="crm-report-instanceForm-form-block-email_to">
      <td class="report-label"><?php echo $this->_tpl_vars['form']['email_to']['label']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email_to']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
    </tr>
    <tr class="crm-report-instanceForm-form-block-email_cc">
      <td class="report-label"><?php echo $this->_tpl_vars['form']['email_cc']['label']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email_cc']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
    </tr>
  </table>
</div>

<div id="report-tab-access" class="civireport-criteria">
  <table class="form-layout">
    <tr class="crm-report-instanceForm-form-block-is_navigation">
      <td class="report-label"><?php echo $this->_tpl_vars['form']['is_navigation']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['is_navigation']['html']; ?>
<br />
        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>All report instances are automatically included in the Report Listing page. Check this box to also add this report to the navigation menu.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      </td>
    </tr>
    <tr class="crm-report-instanceForm-form-block-parent_id" id="navigation_menu">
      <td class="report-label"><?php echo $this->_tpl_vars['form']['parent_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-parent",'file' => "CRM/Admin/Form/Navigation.hlp"), $this);?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['parent_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
    </tr>
    <tr class="crm-report-instanceForm-form-block-drilldown">
      <td class="report-label"><?php echo $this->_tpl_vars['form']['drilldown_id']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['drilldown_id']['html']; ?>
</td>
    </tr>
    <?php if ($this->_tpl_vars['config']->userFramework != 'Joomla'): ?>
      <tr class="crm-report-instanceForm-form-block-permission">
        <td class="report-label" width="20%"><?php echo $this->_tpl_vars['form']['permission']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-report_perms",'file' => "CRM/Report/Form/Tabs/Settings.hlp"), $this);?>
</td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['permission']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
      </tr>
      <tr class="crm-report-instanceForm-form-block-role">
        <td class="report-label" width="20%"><?php echo $this->_tpl_vars['form']['grouprole']['label']; ?>
</td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['grouprole']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
      </tr>
    <?php endif; ?>
    <tr class="crm-report-instanceForm-form-block-isReserved">
      <td class="report-label"><?php echo $this->_tpl_vars['form']['is_reserved']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_reserved",'file' => "CRM/Report/Form/Tabs/Settings.hlp"), $this);?>
</td>
      <td><?php echo $this->_tpl_vars['form']['is_reserved']['html']; ?>

        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If reserved, only users with 'administer reserved reports' permission can modify this report instance.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      </td>
    </tr>
    <tr class="crm-report-instanceForm-form-block-addToDashboard">
      <td class="report-label"><?php echo $this->_tpl_vars['form']['addToDashboard']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-dash_avail",'file' => "CRM/Report/Form/Tabs/Settings.hlp"), $this);?>
</td>
      <td><?php echo $this->_tpl_vars['form']['addToDashboard']['html']; ?>

        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Users with appropriate permissions can add this report to their dashboard.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      </td>
    </tr>
    <tr id ="limit_result" class="crm-report-instanceForm-form-block-limitUser">
      <td class="report-label"><?php echo $this->_tpl_vars['form']['row_count']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-dash_limit",'file' => "CRM/Report/Form/Tabs/Settings.hlp"), $this);?>
</td>
      <td><?php echo $this->_tpl_vars['form']['row_count']['html']; ?>
</td>
    </tr>
  </table>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_navigation','trigger_value' => "",'target_element_id' => 'navigation_menu','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'addToDashboard','trigger_value' => "",'target_element_id' => 'limit_result','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['is_navigation']): ?>
  <script type="text/javascript">
    document.getElementById('is_navigation').checked = true;
    showHideByValue('is_navigation','','navigation_menu','table-row','radio',false);
  </script>
<?php endif; ?>

<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    var confirmed = false,
      formName = '; ?>
"<?php echo $this->_tpl_vars['form']['formName']; ?>
"<?php echo ';
    $(\'#_qf_\' + formName + \'_submit_next, #_qf_\' + formName + \'_submit_save\').click(function() {
      if ($(\'#is_navigation\').prop(\'checked\') && $(\'#parent_id\').val() == \'\') {
        var confirmMsg = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have chosen to include this report in the Navigation Menu without selecting a Parent Menu item from the dropdown. This will add the report to the top level menu bar. Are you sure you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo '
        return confirm(confirmMsg);
      }
    });
    // Pop-up confirmation when clicking "Save a copy" (submit_next) or "Create Report" (submit_save)
    var saveAction = $(\'#_qf_\' + formName + \'_submit_next\').length ? \'next\' : \'save\';
    $(\'#_qf_\' + formName + \'_submit_\' + saveAction).click(function(e) {
      if (!confirmed) {
        var $button = $(this),
          title = \'tr.crm-report-instanceForm-form-block-title\',
          description = \'tr.crm-report-instanceForm-form-block-description\';
        $(title).find($("input[id=\'title\']")).attr(\'value\', $("input[id=\'title\']").val());
        $(description).find($("input[id=\'description\']")).attr(\'value\', $("input[id=\'description\']").val());
        e.preventDefault();
        e.stopImmediatePropagation();
        CRM.confirm({
          title: $(this).attr(\'value\'),
          message: \'<table class="form-layout"><tr>\' + $(title).html() + \'</tr><tr>\' + $(description).html() + \'</tr></table>\',
          open: function() {
            var $name = $(\'[name=title]\', this);
            if (saveAction == \'next\') {
              $name.val(\'\' + $name.val() + \' \' + '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(copy)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ')
            }
          }
        })
          .on(\'crmConfirm:yes\', function() {
            confirmed = true;
            $(\'[name=title]\', \'#\' + formName).val($(\'[name=title]\', this).val());
            $(\'[name=description]\', \'#\' + formName).val($(\'[name=description]\', this).val());
            $button.click();
          })
          .on(\'crmConfirm:no\', function() {
            $popUpTitle = $("div.crm-confirm-dialog input[id=\'title\']")
            $popUpDescription = $("div.crm-confirm-dialog input[id=\'description\']")
            $(title).find($("input[id=\'title\']")).val($popUpTitle.val());
            $(description).find($("input[id=\'description\']")).val($popUpDescription.val());
          });
      }
    });
  });
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
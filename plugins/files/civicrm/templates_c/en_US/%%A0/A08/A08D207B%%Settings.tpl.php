<?php /* Smarty version 2.6.27, created on 2015-11-20 18:47:59
         compiled from civimobile/Form/Settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'civimobile/Form/Settings.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><h3>CiviMobile Settings</h3>

<table class="form-layout-compressed">
  <tr>
    <td colspan="2" class="description">Please select the profile to use for your various contact types below.</td><td></td>
  </tr>
<?php if (isset ( $this->_tpl_vars['form']['ind_profile_id'] )): ?>
  <tr class="civimobile-form-block-ind_profile_id">
    <td class="label"><?php echo $this->_tpl_vars['form']['ind_profile_id']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['ind_profile_id']['html']; ?>
</td>
  </tr> 
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['form']['house_profile_id'] )): ?>
  <tr class="civimobile-form-block-house_profile_id">
    <td class="label"><?php echo $this->_tpl_vars['form']['house_profile_id']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['house_profile_id']['html']; ?>
</td>
  </tr> 
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['form']['org_profile_id'] )): ?>
  <tr class="civimobile-form-block-org_profile_id">
    <td class="label"><?php echo $this->_tpl_vars['form']['org_profile_id']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['org_profile_id']['html']; ?>
</td>
  </tr> 
<?php endif; ?>
</table>
 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
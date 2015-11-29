<?php /* Smarty version 2.6.27, created on 2015-11-29 11:33:59
         compiled from CRM/Report/Form/Fields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Fields.tpl', 1, false),array('block', 'ts', 'CRM/Report/Form/Fields.tpl', 39, false),array('modifier', 'cat', 'CRM/Report/Form/Fields.tpl', 59, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! $this->_tpl_vars['printOnly']): ?>   <?php if ($this->_tpl_vars['criteriaForm']): ?>
    <div class="crm-report-criteria">       <div id="mainTabContainer">
                <ul>
          <?php $_from = $this->_tpl_vars['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tab']):
?>
            <li class="ui-corner-all">
              <a title="<?php echo $this->_tpl_vars['tab']['title']; ?>
" href="#report-tab-<?php echo $this->_tpl_vars['tab']['div_label']; ?>
"><?php echo $this->_tpl_vars['tab']['title']; ?>
</a>
            </li>
          <?php endforeach; endif; unset($_from); ?>
          <?php if ($this->_tpl_vars['instanceForm'] || $this->_tpl_vars['instanceFormError']): ?>
            <li id="tab_settings" class="ui-corner-all">
              <a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title and Format<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="#report-tab-format"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title and Format<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            </li>
            <li class="ui-corner-all">
              <a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Delivery<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="#report-tab-email"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Delivery<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            </li>
            <li class="ui-corner-all">
              <a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Access<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="#report-tab-access"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Access<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            </li>
          <?php endif; ?>
        </ul>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Report/Form/Criteria.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php if ($this->_tpl_vars['instanceForm'] || $this->_tpl_vars['instanceFormError']): ?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Report/Form/Tabs/Instance.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
      </div> 
      <?php $this->assign('save', ((is_array($_tmp=((is_array($_tmp='_qf_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['form']['formName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['form']['formName'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_submit_save') : smarty_modifier_cat($_tmp, '_submit_save'))); ?>
      <?php $this->assign('next', ((is_array($_tmp=((is_array($_tmp='_qf_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['form']['formName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['form']['formName'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_submit_next') : smarty_modifier_cat($_tmp, '_submit_next'))); ?>
      <div class="crm-submit-buttons">
        <?php echo $this->_tpl_vars['form']['buttons']['html']; ?>

        <?php if ($this->_tpl_vars['instanceForm']): ?>
          <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['save']]['html']; ?>

        <?php endif; ?>
        <?php if ($this->_tpl_vars['mode'] != 'template' && $this->_tpl_vars['form'][$this->_tpl_vars['next']]): ?>
          <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['next']]['html']; ?>

        <?php endif; ?>
      </div>
    </div>   <?php endif; ?>

<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      var tabSettings = {
        collapsible: true,
        active: '; ?>
<?php if ($this->_tpl_vars['rows']): ?>false<?php else: ?>0<?php endif; ?><?php echo '
      };
      // If a tab contains an error, open it
      if ($(\'.civireport-criteria .crm-error\', \'#mainTabContainer\').length) {
        tabSettings.active = $(\'.civireport-criteria\').index($(\'.civireport-criteria:has(".crm-error")\')[0]);
      }
      $("#mainTabContainer").tabs(tabSettings);
    });

  </script>
'; ?>


<?php endif; ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
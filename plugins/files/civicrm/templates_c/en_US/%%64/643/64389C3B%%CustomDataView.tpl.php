<?php /* Smarty version 2.6.27, created on 2015-11-20 18:42:36
         compiled from CRM/Contact/Page/View/CustomDataView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/View/CustomDataView.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->assign('customGroupCount', 1); ?>
<?php $_from = $this->_tpl_vars['viewCustomData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customGroupId'] => $this->_tpl_vars['customValues']):
?>
  <?php $this->assign('cgcount', 1); ?>
  <?php $this->assign('count', $this->_tpl_vars['customGroupCount']%2); ?>
  <?php if (( $this->_tpl_vars['count'] == $this->_tpl_vars['side'] ) || $this->_tpl_vars['skipTitle']): ?>
    <?php $_from = $this->_tpl_vars['customValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cvID'] => $this->_tpl_vars['cd_edit']):
?>
      <div class="customFieldGroup crm-collapsible<?php if ($this->_tpl_vars['cd_edit']['collapse_display']): ?> collapsed<?php endif; ?> ui-corner-all <?php echo $this->_tpl_vars['cd_edit']['name']; ?>
 crm-custom-set-block-<?php echo $this->_tpl_vars['customGroupId']; ?>
">
        <div class="collapsible-title">
          <?php echo $this->_tpl_vars['cd_edit']['title']; ?>

        </div>
        <?php if ($this->_tpl_vars['cvID'] == 0): ?>
          <?php $this->assign('cvID', '-1'); ?>
        <?php endif; ?>
        <div class="crm-summary-block" id="custom-set-block-<?php echo $this->_tpl_vars['customGroupId']; ?>
-<?php echo $this->_tpl_vars['cvID']; ?>
">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataFieldView.tpl", 'smarty_include_vars' => array('customGroupId' => $this->_tpl_vars['customGroupId'],'customRecId' => $this->_tpl_vars['cvID'],'cgcount' => $this->_tpl_vars['cgcount'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
      </div>
      <?php $this->assign('cgcount', $this->_tpl_vars['cgcount']+1); ?>
    <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
  <?php $this->assign('customGroupCount', $this->_tpl_vars['customGroupCount']+1); ?>
<?php endforeach; endif; unset($_from); ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
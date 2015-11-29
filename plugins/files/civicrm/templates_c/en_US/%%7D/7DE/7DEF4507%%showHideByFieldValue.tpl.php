<?php /* Smarty version 2.6.27, created on 2015-11-29 11:33:59
         compiled from CRM/common/showHideByFieldValue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/showHideByFieldValue.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<script type="text/javascript">
    var trigger_field_id = '<?php echo $this->_tpl_vars['trigger_field_id']; ?>
';
    var trigger_value = '<?php echo $this->_tpl_vars['trigger_value']; ?>
';
    var target_element_id = '<?php echo $this->_tpl_vars['target_element_id']; ?>
';
    var target_element_type = '<?php echo $this->_tpl_vars['target_element_type']; ?>
';
    var field_type  = '<?php echo $this->_tpl_vars['field_type']; ?>
';
    var invert = <?php echo $this->_tpl_vars['invert']; ?>
;

    showHideByValue(trigger_field_id, trigger_value, target_element_id, target_element_type, field_type, invert);

</script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
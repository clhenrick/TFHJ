<?php /* Smarty version 2.6.27, created on 2015-11-22 10:25:38
         compiled from CRM/Contact/Page/ContactImage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/ContactImage.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-contact_image crm-contact_image-block">
  <a href="<?php echo $this->_tpl_vars['imageURL']; ?>
" class='crm-image-popup'>
    <img src="<?php echo $this->_tpl_vars['imageURL']; ?>
" height=<?php echo $this->_tpl_vars['imageThumbHeight']; ?>
 width=<?php echo $this->_tpl_vars['imageThumbWidth']; ?>
>
  </a>
</div>
<?php if ($this->_tpl_vars['action'] == 0 || $this->_tpl_vars['action'] == 2): ?>
  <div class='crm-contact_image-block crm-contact_image crm-contact_image-delete'><?php echo $this->_tpl_vars['deleteURL']; ?>
</div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
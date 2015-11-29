<?php /* Smarty version 2.6.27, created on 2015-11-20 18:47:01
         compiled from CRM/Form/attachmentjs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Form/attachmentjs.tpl', 1, false),array('block', 'ts', 'CRM/Form/attachmentjs.tpl', 7, false),array('function', 'crmURL', 'CRM/Form/attachmentjs.tpl', 12, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><script type="text/javascript">
<?php echo '
  CRM.$(function($) {
    $(\'a.delete-attachment\').off(\'.crmAttachments\').on(\'click.crmAttachments\', function(e) {
      var $el = $(this),
        $row = $el.closest(\'.crm-attachment-wrapper\'),
        msg = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => "%1")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This will immediately delete the file %1. This action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
      CRM.confirm({
        title: $el.attr(\'title\'),
        message: ts(msg, {1: \'<em>\' + $el.data(\'filename\') + \'</em>\'})
      }).on(\'crmConfirm:yes\', function() {
        var postUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/file/delete','h' => 0), $this);?>
"<?php echo ';
        var request = $.post(postUrl, $el.data(\'args\'));
        CRM.status({success: \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Removed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\'}, request);
        request.done(function() {
          $el.trigger(\'crmPopupFormSuccess\');
          $row.remove();
        });
      });
      e.preventDefault();
    });
  });
'; ?>

</script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/Edit/CommunicationPreferences.js.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/CommunicationPreferences.js.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\');
      $(\'#postal_greeting_id, #addressee_id, #email_greeting_id\', $form).change(function() {
        var fldName = $(this).attr(\'id\');
        if ($(this).val() == 4) {
          $("#greetings1, #greetings2", $form).show();
          $("#" + fldName + "_html, #" + fldName + "_label", $form).show();
        } else {
          $("#" + fldName + "_html, #" + fldName + "_label", $form).hide();
          $("#" + fldName.slice(0, -3) + "_custom", $form).val(\'\');
        }
      });
      
      $(\'.replace-plain[data-id]\', $form).click(function() {
        var element = $(this).data(\'id\');
        $(this).hide();
        $(\'#\' + element, $form).show();
        var fldName = \'#\' + element + \'_id\';
        if ($(fldName, $form).val() == 4) {
          $("#greetings1, #greetings2", $form).show();
          $(fldName + "_html, " + fldName + "_label", $form).show();
        }
      });
    });
  </script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php /* Smarty version 2.6.27, created on 2015-11-20 18:46:56
         compiled from CRM/Activity/Form/ActivityJs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Activity/Form/ActivityJs.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
<script type="text/javascript">
  /**
   * Function to check activity status in relavent to activity date
   *
   * @param message JSON object.
   */
  function activityStatus(message) {
    var activityDate =  cj("#activity_date_time_display").datepicker(\'getDate\');
    if (activityDate) {
      var
        // Ignore time, only compare dates
        today = new Date().setHours(0,0,0,0),
        activityStatusId = cj(\'#status_id\').val();
      if (activityStatusId == 2 && today < activityDate) {
        return confirm(message.completed);
      }
      else if (activityStatusId == 1 && today > activityDate) {
        return confirm(message.scheduled);
      }
    }
  }

</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
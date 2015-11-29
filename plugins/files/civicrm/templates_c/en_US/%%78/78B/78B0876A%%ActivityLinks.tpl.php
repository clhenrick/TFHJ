<?php /* Smarty version 2.6.27, created on 2015-11-20 18:42:36
         compiled from CRM/Activity/Form/ActivityLinks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Activity/Form/ActivityLinks.tpl', 1, false),array('block', 'ts', 'CRM/Activity/Form/ActivityLinks.tpl', 34, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['cdType'] == false): ?>
<?php if ($this->_tpl_vars['contact_id']): ?>
<?php $this->assign('contactId', $this->_tpl_vars['contact_id']); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['as_select']): ?> <select name="other_activity" class="crm-form-select crm-select2 crm-action-menu action-icon-plus">
  <option value=""><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Activity<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
<?php $_from = $this->_tpl_vars['activityTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['link']):
?>
  <option value="<?php echo $this->_tpl_vars['urls'][$this->_tpl_vars['k']]; ?>
"><?php echo $this->_tpl_vars['link']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    $(\'[name=other_activity].crm-action-menu\').change(function() {
      var
        $el = $(this),
        url = $el.val();
      if (url) {
        $el.select2(\'val\', \'\');
        CRM.loadForm(url).on(\'crmFormSuccess\', function() {
          CRM.refreshParent($el);
        });
      }
    });
  });
</script>
'; ?>

<?php else: ?>
<ul>
  <li class="crm-activity-tab"><a href="#" data-tab="activity"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Record Activity:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
<?php $_from = $this->_tpl_vars['activityTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['link']):
?>
<li class="crm-activity-type_<?php echo $this->_tpl_vars['k']; ?>
"><a href="<?php echo $this->_tpl_vars['urls'][$this->_tpl_vars['k']]; ?>
" data-tab="activity"><?php echo $this->_tpl_vars['link']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['hookLinks']): ?>
   <?php $_from = $this->_tpl_vars['hookLinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
    <li>
        <a href="<?php echo $this->_tpl_vars['link']['url']; ?>
" data-tab="activity"<?php if (! empty ( $this->_tpl_vars['link']['title'] )): ?> title="<?php echo $this->_tpl_vars['link']['title']; ?>
"<?php endif; ?>>
          <?php if ($this->_tpl_vars['link']['img']): ?>
                <img src="<?php echo $this->_tpl_vars['link']['img']; ?>
" alt="<?php echo $this->_tpl_vars['link']['title']; ?>
" />&nbsp;
          <?php endif; ?>
          <?php echo $this->_tpl_vars['link']['name']; ?>

        </a>
    </li>
   <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

</ul>

<?php endif; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
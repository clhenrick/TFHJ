<?php /* Smarty version 2.6.27, created on 2015-11-20 18:47:01
         compiled from CRM/Custom/Form/CustomData.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Custom/Form/CustomData.tpl', 1, false),array('block', 'ts', 'CRM/Custom/Form/CustomData.tpl', 44, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['formEdit']): ?>
  <?php if ($this->_tpl_vars['cd_edit']['help_pre']): ?>
    <div class="messages help"><?php echo $this->_tpl_vars['cd_edit']['help_pre']; ?>
</div>
  <?php endif; ?>
  <table class="form-layout-compressed">
    <?php $_from = $this->_tpl_vars['cd_edit']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_id'] => $this->_tpl_vars['element']):
?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomField.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; endif; unset($_from); ?>
  </table>
  <div class="spacer"></div>
  <?php if ($this->_tpl_vars['cd_edit']['help_post']): ?>
    <div class="messages help"><?php echo $this->_tpl_vars['cd_edit']['help_post']; ?>
</div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['cd_edit']['is_multiple'] && ( ( $this->_tpl_vars['cd_edit']['max_multiple'] == '' ) || ( $this->_tpl_vars['cd_edit']['max_multiple'] > 0 && $this->_tpl_vars['cd_edit']['max_multiple'] > $this->_tpl_vars['cgCount'] ) )): ?>
    <div id="add-more-link-<?php echo $this->_tpl_vars['cgCount']; ?>
" class="add-more-link-<?php echo $this->_tpl_vars['group_id']; ?>
 add-more-link-<?php echo $this->_tpl_vars['group_id']; ?>
-<?php echo $this->_tpl_vars['cgCount']; ?>
">
      <a href="#" class="crm-hover-button" onclick="CRM.buildCustomData('<?php echo $this->_tpl_vars['cd_edit']['extends']; ?>
',<?php if ($this->_tpl_vars['cd_edit']['subtype']): ?>'<?php echo $this->_tpl_vars['cd_edit']['subtype']; ?>
'<?php else: ?>'<?php echo $this->_tpl_vars['cd_edit']['extends_entity_column_id']; ?>
'<?php endif; ?>, '', <?php echo $this->_tpl_vars['cgCount']; ?>
, <?php echo $this->_tpl_vars['group_id']; ?>
, true ); return false;">
        <span class="icon ui-icon-circle-plus"></span>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['cd_edit']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Another %1 record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </a>
    </div>
  <?php endif; ?>
<?php else: ?>
  <?php $_from = $this->_tpl_vars['groupTree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['custom_sets'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['custom_sets']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group_id'] => $this->_tpl_vars['cd_edit']):
        $this->_foreach['custom_sets']['iteration']++;
?>
    <?php if ($this->_tpl_vars['cd_edit']['is_multiple'] && $this->_tpl_vars['multiRecordDisplay'] == 'single'): ?>
      <div class="custom-group custom-group-<?php echo $this->_tpl_vars['cd_edit']['name']; ?>
">
        <?php if ($this->_tpl_vars['cd_edit']['help_pre']): ?>
          <div class="messages help"><?php echo $this->_tpl_vars['cd_edit']['help_pre']; ?>
</div>
        <?php endif; ?>
        <table>
          <?php $_from = $this->_tpl_vars['cd_edit']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_id'] => $this->_tpl_vars['element']):
?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomField.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endforeach; endif; unset($_from); ?>
        </table>
        <div class="spacer"></div>
        <?php if ($this->_tpl_vars['cd_edit']['help_post']): ?>
          <div class="messages help"><?php echo $this->_tpl_vars['cd_edit']['help_post']; ?>
</div>
        <?php endif; ?>
      </div>
    <?php else: ?>
     <div class="custom-group custom-group-<?php echo $this->_tpl_vars['cd_edit']['name']; ?>
 crm-accordion-wrapper <?php if ($this->_tpl_vars['cd_edit']['collapse_display'] && ! $this->_tpl_vars['skipTitle']): ?>collapsed<?php endif; ?>">
      <?php if (! $this->_tpl_vars['skipTitle']): ?>
      <div class="crm-accordion-header">
        <?php echo $this->_tpl_vars['cd_edit']['title']; ?>

       </div><!-- /.crm-accordion-header -->
      <?php endif; ?>
      <div class="crm-accordion-body">
        <?php if ($this->_tpl_vars['cd_edit']['help_pre']): ?>
          <div class="messages help"><?php echo $this->_tpl_vars['cd_edit']['help_pre']; ?>
</div>
        <?php endif; ?>
        <table class="form-layout-compressed">
          <?php $_from = $this->_tpl_vars['cd_edit']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_id'] => $this->_tpl_vars['element']):
?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomField.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endforeach; endif; unset($_from); ?>
        </table>
        <div class="spacer"></div>
        <?php if ($this->_tpl_vars['cd_edit']['help_post']): ?>
          <div class="messages help"><?php echo $this->_tpl_vars['cd_edit']['help_post']; ?>
</div>
        <?php endif; ?>
      </div>
     </div>
     <?php if ($this->_tpl_vars['cd_edit']['is_multiple'] && ( ( $this->_tpl_vars['cd_edit']['max_multiple'] == '' ) || ( $this->_tpl_vars['cd_edit']['max_multiple'] > 0 && $this->_tpl_vars['cd_edit']['max_multiple'] > $this->_tpl_vars['cgCount'] ) )): ?>
      <?php if ($this->_tpl_vars['skipTitle']): ?>
                <div class="messages help">
          <em><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['cd_edit']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click "Edit Contact" to add more %1 records<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></em>
        </div>
      <?php else: ?>
        <div id="add-more-link-<?php echo $this->_tpl_vars['cgCount']; ?>
">
          <a href="#" class="crm-hover-button" onclick="CRM.buildCustomData('<?php echo $this->_tpl_vars['cd_edit']['extends']; ?>
',<?php if ($this->_tpl_vars['cd_edit']['subtype']): ?>'<?php echo $this->_tpl_vars['cd_edit']['subtype']; ?>
'<?php else: ?>'<?php echo $this->_tpl_vars['cd_edit']['extends_entity_column_id']; ?>
'<?php endif; ?>, '', <?php echo $this->_tpl_vars['cgCount']; ?>
, <?php echo $this->_tpl_vars['group_id']; ?>
, true ); return false;">
            <span class="icon ui-icon-circle-plus"></span>
            <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['cd_edit']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Another %1 record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </a>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>
    <div id="custom_group_<?php echo $this->_tpl_vars['group_id']; ?>
_<?php echo $this->_tpl_vars['cgCount']; ?>
"></div>
  <?php endforeach; endif; unset($_from); ?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachmentjs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
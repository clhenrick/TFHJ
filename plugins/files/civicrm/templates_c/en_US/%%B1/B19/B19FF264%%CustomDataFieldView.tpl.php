<?php /* Smarty version 2.6.27, created on 2015-11-22 10:25:38
         compiled from CRM/Contact/Page/View/CustomDataFieldView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/View/CustomDataFieldView.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Page/View/CustomDataFieldView.tpl', 27, false),array('function', 'crmURL', 'CRM/Contact/Page/View/CustomDataFieldView.tpl', 62, false),array('modifier', 'nl2br', 'CRM/Contact/Page/View/CustomDataFieldView.tpl', 65, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="custom-set-content-<?php echo $this->_tpl_vars['customGroupId']; ?>
" <?php if ($this->_tpl_vars['permission'] == 'edit'): ?> class="crm-inline-edit" data-edit-params='{"cid": "<?php echo $this->_tpl_vars['contactId']; ?>
", "class_name": "CRM_Contact_Form_Inline_CustomData", "groupID": "<?php echo $this->_tpl_vars['customGroupId']; ?>
", "customRecId": "<?php echo $this->_tpl_vars['customRecId']; ?>
", "cgcount" : "<?php echo $this->_tpl_vars['cgcount']; ?>
"}'<?php endif; ?>>
  <div class="crm-clear crm-inline-block-content" <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php endif; ?>>
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
      <div class="crm-edit-help">
        <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
    <?php endif; ?>

    <?php $_from = $this->_tpl_vars['cd_edit']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_id'] => $this->_tpl_vars['element']):
?>
      <div class="crm-summary-row">
        <?php if ($this->_tpl_vars['element']['options_per_line'] != 0): ?>
          <div class="crm-label"><?php echo $this->_tpl_vars['element']['field_title']; ?>
</div>
          <div class="crm-content crm-custom_data">
                            <?php $_from = $this->_tpl_vars['element']['field_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                <?php echo $this->_tpl_vars['val']; ?>

              <?php endforeach; endif; unset($_from); ?>
          </div>
        <?php else: ?>
          <div class="crm-label"><?php echo $this->_tpl_vars['element']['field_title']; ?>
</div>
          <?php if ($this->_tpl_vars['element']['field_type'] == 'File'): ?>
            <?php if ($this->_tpl_vars['element']['field_value']['displayURL']): ?>
                <div class="crm-content crm-custom_data crm-displayURL">
                  <a href="<?php echo $this->_tpl_vars['element']['field_value']['displayURL']; ?>
" class='crm-image-popup'>
                    <img src="<?php echo $this->_tpl_vars['element']['field_value']['displayURL']; ?>
" height = "<?php echo $this->_tpl_vars['element']['field_value']['imageThumbHeight']; ?>
"
                         width="<?php echo $this->_tpl_vars['element']['field_value']['imageThumbWidth']; ?>
">
                  </a>
                </div>
            <?php else: ?>
                <div class="crm-content crm-custom_data crm-fileURL">
                  <a href="<?php echo $this->_tpl_vars['element']['field_value']['fileURL']; ?>
"><?php echo $this->_tpl_vars['element']['field_value']['fileName']; ?>
</a>
                </div>
            <?php endif; ?>
          <?php elseif ($this->_tpl_vars['element']['field_data_type'] == 'ContactReference' && $this->_tpl_vars['element']['contact_ref_id']): ?>
                        <div class="crm-content crm-custom-data crm-contact-reference">
              <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['element']['contact_ref_id'])), $this);?>
" title="view contact"><?php echo $this->_tpl_vars['element']['field_value']; ?>
</a>
            </div>
          <?php elseif ($this->_tpl_vars['element']['field_data_type'] == 'Memo'): ?>
            <div class="crm-content crm-custom-data"><?php echo ((is_array($_tmp=$this->_tpl_vars['element']['field_value'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
          <?php else: ?>
            <div class="crm-content crm-custom-data"><?php echo $this->_tpl_vars['element']['field_value']; ?>
</div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php endforeach; endif; unset($_from); ?>
  </div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
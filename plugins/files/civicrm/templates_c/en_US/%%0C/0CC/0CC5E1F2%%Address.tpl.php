<?php /* Smarty version 2.6.27, created on 2015-11-20 18:42:36
         compiled from CRM/Contact/Page/Inline/Address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/Inline/Address.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Page/Inline/Address.tpl', 28, false),array('function', 'crmURL', 'CRM/Contact/Page/Inline/Address.tpl', 44, false),array('modifier', 'nl2br', 'CRM/Contact/Page/Inline/Address.tpl', 51, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="address-block-<?php echo $this->_tpl_vars['locationIndex']; ?>
" class="address <?php if ($this->_tpl_vars['add']): ?>crm-address_type_<?php echo $this->_tpl_vars['add']['location_type']; ?>
<?php else: ?>add-new<?php endif; ?><?php if ($this->_tpl_vars['permission'] == 'edit'): ?> crm-inline-edit" data-dependent-fields='["#crm-contactinfo-content", ".crm-inline-edit.address:not(.add-new)"]' data-edit-params='{"cid": "<?php echo $this->_tpl_vars['contactId']; ?>
", "class_name": "CRM_Contact_Form_Inline_Address", "locno": "<?php echo $this->_tpl_vars['locationIndex']; ?>
", "aid": "<?php if ($this->_tpl_vars['add']): ?><?php echo $this->_tpl_vars['add']['id']; ?>
<?php else: ?>0<?php endif; ?>"}' data-location-type-id="<?php if ($this->_tpl_vars['add']): ?><?php echo $this->_tpl_vars['add']['location_type_id']; ?>
<?php else: ?>0<?php endif; ?><?php endif; ?>">
  <div class="crm-clear crm-inline-block-content" <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>title="<?php if ($this->_tpl_vars['add']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>"<?php endif; ?>>
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
      <div class="crm-edit-help">
        <span class="batch-edit"></span><?php if ($this->_tpl_vars['add']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
      </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['add']): ?>
      <div class="crm-summary-row <?php if ($this->_tpl_vars['add']['is_primary'] == 1): ?> primary<?php endif; ?>">
        <div class="crm-label">
          <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['add']['location_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%1 Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php if ($this->_tpl_vars['privacy']['do_not_mail']): ?><span class="icon privacy-flag do-not-mail" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Privacy flag: Do Not Mail<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"></span><?php endif; ?>
          <?php if ($this->_tpl_vars['config']->mapProvider && ! empty ( $this->_tpl_vars['add']['geo_code_1'] ) && is_numeric ( $this->_tpl_vars['add']['geo_code_1'] ) && ! empty ( $this->_tpl_vars['add']['geo_code_2'] ) && is_numeric ( $this->_tpl_vars['add']['geo_code_2'] )): ?>
          <br /><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/map','q' => "reset=1&cid=".($this->_tpl_vars['contactId'])."&lid=".($this->_tpl_vars['add']['location_type_id'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array('1' => ($this->_tpl_vars['add']['location_type']))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map %1 Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span class="geotag"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
          <?php endif; ?>
        </div>
        <div class="crm-content">
          <?php if (! empty ( $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['locationIndex']]['shared_address_display']['name'] )): ?>
            <strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['locationIndex']]['shared_address_display']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Address belongs to %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><br />
          <?php endif; ?>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['add']['display'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        </div>
      </div>

    <!-- add custom data -->
    <?php $_from = $this->_tpl_vars['add']['custom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cgId'] => $this->_tpl_vars['customGroup']):
?>       <?php $this->assign('isAddressCustomPresent', 1); ?>
      <?php $_from = $this->_tpl_vars['customGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cvId'] => $this->_tpl_vars['customValue']):
?>
        <div id="address_custom_<?php echo $this->_tpl_vars['cgId']; ?>
_<?php echo $this->_tpl_vars['locationIndex']; ?>
"
        class="crm-collapsible crm-address-custom-<?php echo $this->_tpl_vars['cgId']; ?>
-<?php echo $this->_tpl_vars['locationIndex']; ?>
-accordion
        <?php if ($this->_tpl_vars['customValue']['collapse_display']): ?>collapsed<?php endif; ?>">
        <div class="collapsible-title">
          <?php echo $this->_tpl_vars['customValue']['title']; ?>

        </div>
        <div class="crm-summary-block">
          <?php $_from = $this->_tpl_vars['customValue']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cfId'] => $this->_tpl_vars['customField']):
?>
          <div class="crm-summary-row">
            <div class="crm-label">
              <?php echo $this->_tpl_vars['customField']['field_title']; ?>

            </div>
            <div class="crm-content">
              <?php echo $this->_tpl_vars['customField']['field_value']; ?>

            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?>
          </div>
        </div>
      <?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>     <!-- end custom data -->
    <?php endif; ?>
  </div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
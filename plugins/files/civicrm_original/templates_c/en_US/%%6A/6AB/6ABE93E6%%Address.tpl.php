<?php /* Smarty version 2.6.27, created on 2015-11-17 19:24:51
         compiled from CRM/Contact/Form/Edit/Address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/Address.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Edit/Address.tpl', 39, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if ($this->_tpl_vars['title'] && $this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
<div id="addressBlockId" class="crm-accordion-wrapper crm-address-accordion collapsed">
 <div class="crm-accordion-header">
    <?php echo $this->_tpl_vars['title']; ?>

 </div><!-- /.crm-accordion-header -->
 <div class="crm-accordion-body" id="addressBlock">
<?php endif; ?>

 <div id="Address_Block_<?php echo $this->_tpl_vars['blockId']; ?>
" <?php if ($this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?> class="boxBlock crm-edit-address-block crm-address_<?php echo $this->_tpl_vars['blockId']; ?>
"<?php endif; ?>>
  <?php if ($this->_tpl_vars['blockId'] > 1): ?><fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Supplemental Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend><?php endif; ?>
  <table class="form-layout-compressed crm-edit-address-form">
     <?php if ($this->_tpl_vars['masterAddress'][$this->_tpl_vars['blockId']] > 0): ?>
        <tr><td><div class="message status"><div class="icon inform-icon"></div>&nbsp; <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['masterAddress'][$this->_tpl_vars['blockId']])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This address is shared with %1 contact record(s). Modifying this address will automatically update the shared address for these contacts.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div></td></tr>
     <?php endif; ?>

   <?php if ($this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
     <tr>
        <td id='Address-Primary-html' colspan="2">
           <span class="crm-address-element location_type_id-address-element"><?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['location_type_id']['label']; ?>

           <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['location_type_id']['html']; ?>
</span>
           <span class="crm-address-element is_primary-address-element"><?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['is_primary']['html']; ?>
</span>
           <span class="crm-address-element is_billing-address-element"><?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['is_billing']['html']; ?>
</span>
        </td>
     <?php if ($this->_tpl_vars['blockId'] > 0): ?>
         <td>
             <a href="#" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Address Block<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onClick="removeBlock( 'Address', '<?php echo $this->_tpl_vars['blockId']; ?>
' ); return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete this address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
         </td>
     <?php endif; ?>
     </tr>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/ShareAddress.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php endif; ?>
     <tr>
        <td>
     <table id="address_table_<?php echo $this->_tpl_vars['blockId']; ?>
" class="form-layout-compressed">
                  <?php $_from = $this->_tpl_vars['addressSequence']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['addressElement']):
?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Address/".($this->_tpl_vars['addressElement']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
         <?php endforeach; endif; unset($_from); ?>
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Address/geo_code.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     </table>
        </td>
        <td colspan="2">
           <div class="crm-edit-address-custom_data crm-address-custom-set-block-<?php echo $this->_tpl_vars['blockId']; ?>
">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Address/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </td>
     </tr>
  </table>

  <?php if ($this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
      <div id="addMoreAddress<?php echo $this->_tpl_vars['blockId']; ?>
" class="crm-add-address-wrapper">
          <a href="#" class="button" onclick="buildAdditionalBlocks( 'Address', '<?php echo $this->_tpl_vars['className']; ?>
' );return false;"><span><div class="icon ui-icon-circle-plus"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Another Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
      </div>
  <?php endif; ?>

<?php if ($this->_tpl_vars['title'] && $this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
</div>
 </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->
<?php endif; ?>
<?php echo '
<script type="text/javascript">
//to check if same location type is already selected.
function checkLocation( object, noAlert ) {
  var ele = cj(\'#\' + object);
  var selectedText = cj(\':selected\', ele).text();
  cj(\'td#Address-Primary-html select\').each( function() {
    element = cj(this).attr(\'id\');
    if ( cj(this).val() && element != object && selectedText == cj(\':selected\', this).text() ) {
      if ( !noAlert ) {
          var alertText = selectedText + '; ?>
" <?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>has already been assigned to another address. Please select another location for this address.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ';
          ele.crmError(alertText);
      }
      cj( \'#\' + object ).val(\'\');
    }
  });
}
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
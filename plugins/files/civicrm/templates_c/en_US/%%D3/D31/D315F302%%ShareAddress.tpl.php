<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/ShareAddress.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/ShareAddress.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/ShareAddress.tpl', 106, false),array('function', 'help', 'CRM/Contact/Form/ShareAddress.tpl', 29, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><tr>
  <td>
    <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['use_shared_address']['html']; ?>
<?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['use_shared_address']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-sharedAddress",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

    <div id="shared-address-<?php echo $this->_tpl_vars['blockId']; ?>
" class="form-layout-compressed">
      <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['master_contact_id']['label']; ?>

      <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['master_contact_id']['html']; ?>

      <div class="shared-address-list">
        <?php if (! empty ( $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['blockId']]['shared_address_display'] )): ?>
          <?php $_from = $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['blockId']]['shared_address_display']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sa']):
?>
            <?php $this->assign('sa_name', "selected_shared_address-".($this->_tpl_vars['blockId'])); ?>
            <?php $this->assign('sa_id', ($this->_tpl_vars['sa_name'])."-".($this->_tpl_vars['sa']['id'])); ?>
            <input type="radio" name="<?php echo $this->_tpl_vars['sa_name']; ?>
" id="<?php echo $this->_tpl_vars['sa_id']; ?>
" value="<?php echo $this->_tpl_vars['sa']['id']; ?>
" <?php if ($this->_tpl_vars['sa']['id'] == $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['blockId']]['shared_address_display']['master_id']): ?>checked="checked"<?php endif; ?>>
            <label for="<?php echo $this->_tpl_vars['sa_id']; ?>
"><?php echo $this->_tpl_vars['sa']['display_text']; ?>
</label><?php if ($this->_tpl_vars['sa']['location_type']): ?>(<?php echo $this->_tpl_vars['sa']['location_type']; ?>
)<?php endif; ?><br/>
          <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
      </div>
    </div>
  </td>
</tr>


<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    var blockNo = '; ?>
<?php echo $this->_tpl_vars['blockId']; ?>
<?php echo ',
      $contentArea = $(\'#shared-address-\' + blockNo + \' .shared-address-list\'),
      $masterElement = $(\'input[name="address[\' + blockNo + \'][master_id]"]\');

    function showHideSharedAddress() {
      // based on checkbox, show or hide
      var share = $(this).prop(\'checked\');
      $(\'#shared-address-\' + blockNo).toggle(!!share);
      $(\'table#address_table_\' + blockNo +\', .crm-address-custom-set-block-\' + blockNo).toggle(!share);
    }

    // "Use another contact\'s address" checkbox
    $(\'#address\\\\[\' + blockNo + \'\\\\]\\\\[use_shared_address\\\\]\').each(showHideSharedAddress).click(showHideSharedAddress);

    // When an address is selected
    $contentArea.off().on(\'click\', \'input\', function() {
      $masterElement.val($(this).val());
    });

    // When shared contact is selected/unselected
    $(\'input[name="address[\' + blockNo +\'][master_contact_id]"]\').change(function() {
      var $el = $(this),
        sharedContactId = $el.val();

      $contentArea.html(\'\');
      $masterElement.val(\'\');

      if (!sharedContactId || isNaN(sharedContactId)) {
        return;
      }

      $.post(CRM.url(\'civicrm/ajax/inline\'), {
          \'contact_id\': sharedContactId,
          \'type\': \'method\',
          \'class_name\': \'CRM_Contact_Page_AJAX\',
          \'fn_name\': \'getAddressDisplay\'
        },
        function(response) {
          // Avoid race conditions - check that value hasn\'t been changed by the user while we were waiting for response
          if (response && $el.val() === sharedContactId) {
            var selected = \' checked="checked"\',
              addressHTML = \'\';

            $.each(response, function(i, val) {
              if (addressHTML) {
                selected = \'\';
              } else {
                $(\'input[name="address[\' + blockNo + \'][master_id]"]\').val(val.id);
              }
              var name = \'selected_shared_address-\'+ blockNo,
                id = name + \'-\' + val.id;
              addressHTML += \'<input type="radio" name="\' + name + \'" id="\' + id + \'" value="\' + val.id + \'"\' + selected +\'><label for="\' + id + \'">\' + val.display_text + \'</label>(\'+val.location_type+\')<br/>\';
            });

            if (!addressHTML) {
              addressHTML = '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Selected contact does not have an address. Please edit that contact to add an address, or select a different contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ';
            }

            $contentArea.html(addressHTML);
          }
        },\'json\');
    });
  });
</script>
'; ?>



<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
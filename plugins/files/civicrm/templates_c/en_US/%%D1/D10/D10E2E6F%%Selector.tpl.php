<?php /* Smarty version 2.6.27, created on 2015-11-22 10:25:27
         compiled from CRM/Contact/Form/Selector.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Selector.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Selector.tpl', 29, false),array('function', 'counter', 'CRM/Contact/Form/Selector.tpl', 53, false),array('function', 'cycle', 'CRM/Contact/Form/Selector.tpl', 57, false),array('function', 'crmURL', 'CRM/Contact/Form/Selector.tpl', 67, false),array('modifier', 'crmMoney', 'CRM/Contact/Form/Selector.tpl', 72, false),array('modifier', 'crmDate', 'CRM/Contact/Form/Selector.tpl', 74, false),array('modifier', 'replace', 'CRM/Contact/Form/Selector.tpl', 82, false),array('modifier', 'mb_truncate', 'CRM/Contact/Form/Selector.tpl', 100, false),array('modifier', 'json_encode', 'CRM/Contact/Form/Selector.tpl', 153, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pagerAToZ.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<a href="#" class="crm-selection-reset crm-hover-button"><span class="icon ui-icon-close"></span> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reset all selections<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>

<table summary="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search results listings.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="selector row-highlight">
  <thead class="sticky">
    <tr>
      <th scope="col" title="Select All Rows"><?php echo $this->_tpl_vars['form']['toggleSelect']['html']; ?>
</th>
      <?php if ($this->_tpl_vars['context'] == 'smog'): ?>
          <th scope="col">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </th>
      <?php endif; ?>
      <?php $_from = $this->_tpl_vars['columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
?>
        <th scope="col">
        <?php if ($this->_tpl_vars['header']['sort']): ?>
          <?php $this->assign('key', $this->_tpl_vars['header']['sort']); ?>
          <?php echo $this->_tpl_vars['sort']->_response[$this->_tpl_vars['key']]['link']; ?>

        <?php else: ?>
          <?php echo $this->_tpl_vars['header']['name']; ?>

        <?php endif; ?>
        </th>
      <?php endforeach; endif; unset($_from); ?>
    </tr>
  </thead>

  <?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this);?>


  <?php if ($this->_tpl_vars['id']): ?>
      <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        <tr id='rowid<?php echo $this->_tpl_vars['row']['contact_id']; ?>
' class="<?php echo smarty_function_cycle(array('values' => 'odd-row,even-row'), $this);?>
">
            <?php $this->assign('cbName', $this->_tpl_vars['row']['checkbox']); ?>
            <td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['cbName']]['html']; ?>
</td>
            <?php if ($this->_tpl_vars['context'] == 'smog'): ?>
              <?php if ($this->_tpl_vars['row']['status'] == 'Pending'): ?><td class="status-pending"}>
              <?php elseif ($this->_tpl_vars['row']['status'] == 'Removed'): ?><td class="status-removed">
              <?php else: ?><td><?php endif; ?>
              <?php echo $this->_tpl_vars['row']['status']; ?>
</td>
            <?php endif; ?>
            <td><?php echo $this->_tpl_vars['row']['contact_type']; ?>
</td>
            <td><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['row']['contact_id'])."&key=".($this->_tpl_vars['qfKey'])."&context=".($this->_tpl_vars['context'])), $this);?>
"><?php echo $this->_tpl_vars['row']['sort_name']; ?>
</a></td>
            <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
               <?php if (( $this->_tpl_vars['key'] != 'checkbox' ) && ( $this->_tpl_vars['key'] != 'action' ) && ( $this->_tpl_vars['key'] != 'contact_type' ) && ( $this->_tpl_vars['key'] != 'contact_type_orig' ) && ( $this->_tpl_vars['key'] != 'status' ) && ( $this->_tpl_vars['key'] != 'sort_name' ) && ( $this->_tpl_vars['key'] != 'contact_id' ) && ( $this->_tpl_vars['key'] != 'contact_sub_type' )): ?>
              <td>
                <?php if ($this->_tpl_vars['key'] == 'household_income_total'): ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

                <?php elseif (strpos ( $this->_tpl_vars['key'] , '_date' ) !== false): ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

                <?php else: ?>
                    <?php echo $this->_tpl_vars['value']; ?>

                <?php endif; ?>
                     &nbsp;
              </td>
               <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['row']['contact_id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['row']['contact_id'])); ?>
</td>
        </tr>
     <?php endforeach; endif; unset($_from); ?>
  <?php else: ?>
      <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
         <tr id="rowid<?php echo $this->_tpl_vars['row']['contact_id']; ?>
" class="<?php echo smarty_function_cycle(array('values' => 'odd-row,even-row'), $this);?>
">
            <?php $this->assign('cbName', $this->_tpl_vars['row']['checkbox']); ?>
            <td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['cbName']]['html']; ?>
</td>
            <?php if ($this->_tpl_vars['context'] == 'smog'): ?>
                <?php if ($this->_tpl_vars['row']['status'] == 'Pending'): ?><td class="status-pending"}>
                <?php elseif ($this->_tpl_vars['row']['status'] == 'Removed'): ?><td class="status-removed">
                <?php else: ?><td><?php endif; ?>
                <?php echo $this->_tpl_vars['row']['status']; ?>
</td>
            <?php endif; ?>
            <td><?php echo $this->_tpl_vars['row']['contact_type']; ?>
</td>
            <td><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['row']['contact_id'])."&key=".($this->_tpl_vars['qfKey'])."&context=".($this->_tpl_vars['context'])), $this);?>
"><?php if ($this->_tpl_vars['row']['is_deleted']): ?><del><?php endif; ?><?php echo $this->_tpl_vars['row']['sort_name']; ?>
<?php if ($this->_tpl_vars['row']['is_deleted']): ?></del><?php endif; ?></a></td>
            <?php if ($this->_tpl_vars['action'] == 512 || $this->_tpl_vars['action'] == 256): ?>
              <?php if (! empty ( $this->_tpl_vars['columnHeaders']['street_address'] )): ?>
          <td><span title="<?php echo $this->_tpl_vars['row']['street_address']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['street_address'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 22, "...", true) : smarty_modifier_mb_truncate($_tmp, 22, "...", true)); ?>
<?php if ($this->_tpl_vars['row']['do_not_mail']): ?> <span class="icon privacy-flag do-not-mail"></span><?php endif; ?></span></td>
        <?php endif; ?>
        <?php if (! empty ( $this->_tpl_vars['columnHeaders']['city'] )): ?>
                <td><?php echo $this->_tpl_vars['row']['city']; ?>
</td>
        <?php endif; ?>
        <?php if (! empty ( $this->_tpl_vars['columnHeaders']['state_province'] )): ?>
                <td><?php echo $this->_tpl_vars['row']['state_province']; ?>
</td>
              <?php endif; ?>
              <?php if (! empty ( $this->_tpl_vars['columnHeaders']['postal_code'] )): ?>
                <td><?php echo $this->_tpl_vars['row']['postal_code']; ?>
</td>
              <?php endif; ?>
        <?php if (! empty ( $this->_tpl_vars['columnHeaders']['country'] )): ?>
                <td><?php echo $this->_tpl_vars['row']['country']; ?>
</td>
              <?php endif; ?>
              <td>
                <?php if ($this->_tpl_vars['row']['email']): ?>
                    <span title="<?php echo $this->_tpl_vars['row']['email']; ?>
">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['row']['email'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 17, "...", true) : smarty_modifier_mb_truncate($_tmp, 17, "...", true)); ?>

                        <?php if ($this->_tpl_vars['row']['on_hold']): ?>
                          (On Hold)<span class="status-hold" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This email is on hold (probably due to bouncing).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"></span>
                        <?php elseif ($this->_tpl_vars['row']['do_not_email']): ?>
                          <span class="icon privacy-flag do-not-email" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do Not Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"></span>
                        <?php endif; ?>
                    </span>
                <?php endif; ?>
              </td>
              <td>
                <?php if ($this->_tpl_vars['row']['phone']): ?>
                  <?php echo $this->_tpl_vars['row']['phone']; ?>

                  <?php if ($this->_tpl_vars['row']['do_not_phone']): ?>
                    <span class="icon privacy-flag do-not-phone" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do Not Phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" ></span>
                  <?php endif; ?>
                <?php endif; ?>
              </td>
           <?php else: ?>
              <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
                <?php if (( $this->_tpl_vars['key'] != 'checkbox' ) && ( $this->_tpl_vars['key'] != 'action' ) && ( $this->_tpl_vars['key'] != 'contact_type' ) && ( $this->_tpl_vars['key'] != 'contact_sub_type' ) && ( $this->_tpl_vars['key'] != 'status' ) && ( $this->_tpl_vars['key'] != 'sort_name' ) && ( $this->_tpl_vars['key'] != 'contact_id' ) && ( $this->_tpl_vars['key'] != 'contact_type_orig' )): ?>
                 <td><?php echo $this->_tpl_vars['value']; ?>
&nbsp;</td>
                <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <td style='width:125px;'><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['row']['contact_id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['row']['contact_id'])); ?>
</td>
         </tr>
    <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
</table>

<script type="text/javascript">
  <?php echo '
  CRM.$(function($) {
    // Clear any old selection that may be lingering in quickform
    $("input.select-row, input.select-rows", \'form.crm-search-form\').prop(\'checked\', false).closest(\'tr\').removeClass(\'crm-row-selected\');
    // Retrieve stored checkboxes
    var cids = '; ?>
<?php echo json_encode($this->_tpl_vars['selectedContactIds']); ?>
<?php echo ';
    if (cids.length > 0) {
      $(\'#mark_x_\' + cids.join(\',#mark_x_\') + \',input[name=radio_ts][value=ts_sel]\').prop(\'checked\', true);
    }
  });
'; ?>

</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
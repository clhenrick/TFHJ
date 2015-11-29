<?php /* Smarty version 2.6.27, created on 2015-11-17 19:24:51
         compiled from CRM/Contact/Form/Edit/Email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/Email.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Edit/Email.tpl', 32, false),array('function', 'help', 'CRM/Contact/Form/Edit/Email.tpl', 36, false),array('modifier', 'crmAddClass', 'CRM/Contact/Form/Edit/Email.tpl', 44, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if (! $this->_tpl_vars['addBlock']): ?>
    <tr>
  <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      &nbsp;&nbsp;<a id='addEmail' href="#" title=<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> onClick="buildAdditionalBlocks( 'Email', '<?php echo $this->_tpl_vars['className']; ?>
');return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
  </td>
  <?php if ($this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
      <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>On Hold?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-onhold",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
</td>
      <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Bulk Mailings?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-bulkmail",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
</td>
      <td id="Email-Primary" class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Primary?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
  <?php endif; ?>
    </tr>
<?php endif; ?>

<tr id="Email_Block_<?php echo $this->_tpl_vars['blockId']; ?>
">
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['email']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'email') : smarty_modifier_crmAddClass($_tmp, 'email')); ?>
&nbsp;<?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['location_type_id']['html']; ?>

    <div class="clear"></div>
<?php if ($this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
<div class="email-signature crm-collapsible collapsed">
  <div class="collapsible-title">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Signature<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
  <div id="signatureBlock<?php echo $this->_tpl_vars['blockId']; ?>
">
    <?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['signature_html']['label']; ?>
<br /><?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['signature_html']['html']; ?>
<br />
    <?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['signature_text']['label']; ?>
<br /><?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['signature_text']['html']; ?>

  </div>
</div>

<?php endif; ?>
    </td>
    <td align="center"><?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['on_hold']['html']; ?>
</td>
    <?php if ($this->_tpl_vars['multipleBulk']): ?>
      <td align="center" id="Email-Bulkmail-html"><?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['is_bulkmail']['html']; ?>
</td>
    <?php else: ?>
      <td align="center" id="Email-Bulkmail-html"><?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['is_bulkmail']['1']['html']; ?>
</td>
    <?php endif; ?>
    <td align="center" id="Email-Primary-html" <?php if ($this->_tpl_vars['blockId'] == 1): ?>class="hiddenElement"<?php endif; ?>><?php echo $this->_tpl_vars['form']['email'][$this->_tpl_vars['blockId']]['is_primary']['1']['html']; ?>
</td>
    <?php if ($this->_tpl_vars['blockId'] > 1): ?>
  <td><a href="#" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Email Block<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onClick="removeBlock( 'Email', '<?php echo $this->_tpl_vars['blockId']; ?>
' ); return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></td>
    <?php endif; ?>
</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/Edit/Address/city_postal_code.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/Address/city_postal_code.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Edit/Address/city_postal_code.tpl', 37, false),array('function', 'help', 'CRM/Contact/Form/Edit/Address/city_postal_code.tpl', 40, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><tr><td colspan="3" style="padding:0;">
<table class="crm-address-element">
<tr>
    <?php if (! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['city'] )): ?>
       <td>
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['city']['label']; ?>
<br />
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['city']['html']; ?>

       </td>
    <?php endif; ?>
    <?php if (! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code'] )): ?>
       <td>
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code']['label']; ?>
<?php if (! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code_suffix'] )): ?>&nbsp;<span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Suffix<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span><?php endif; ?><br />
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code']['html']; ?>
&nbsp;&nbsp;
          <?php if (! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code_suffix'] )): ?>
            <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code_suffix']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-postal-code-suffix",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

          <?php endif; ?>
       </td>
    <?php endif; ?>
    <td colspan="2">&nbsp;&nbsp;</td>
</tr>
</table>
</td></tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
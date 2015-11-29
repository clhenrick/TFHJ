<?php /* Smarty version 2.6.27, created on 2015-11-17 19:24:51
         compiled from CRM/Contact/Form/Edit/Address/geo_code.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/Address/geo_code.tpl', 1, false),array('function', 'help', 'CRM/Contact/Form/Edit/Address/geo_code.tpl', 29, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['geo_code_1'] ) && ! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['geo_code_2'] )): ?>
   <tr>
      <td colspan="2">
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['geo_code_1']['label']; ?>
,&nbsp;<?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['geo_code_2']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-geo-code",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
<br />
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['geo_code_1']['html']; ?>
,&nbsp;<?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['geo_code_2']['html']; ?>
<br />
      </td>
    </tr>
    <?php if (! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['manual_geo_code'] )): ?>
     <tr>
        <td colspan="2">
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['manual_geo_code']['html']; ?>

          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['manual_geo_code']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-geo-code-override",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

        </td>
      </tr>
    <?php endif; ?>
   </tr>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
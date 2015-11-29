<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/Edit/Organization.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/Organization.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><table class="form-layout-compressed">
    <tr>
       <td><?php echo $this->_tpl_vars['form']['organization_name']['label']; ?>
<br/>
         <?php echo $this->_tpl_vars['form']['organization_name']['html']; ?>

       </td>

       <td><?php echo $this->_tpl_vars['form']['legal_name']['label']; ?>
<br/>
       <?php echo $this->_tpl_vars['form']['legal_name']['html']; ?>
</td>

       <td><?php echo $this->_tpl_vars['form']['nick_name']['label']; ?>
<br/>
       <?php echo $this->_tpl_vars['form']['nick_name']['html']; ?>
</td>

       <td><?php echo $this->_tpl_vars['form']['sic_code']['label']; ?>
<br/>
       <?php echo $this->_tpl_vars['form']['sic_code']['html']; ?>
</td>

       <td><?php if ($this->_tpl_vars['action'] == 1 && $this->_tpl_vars['contactSubType']): ?>&nbsp;<?php else: ?>
              <?php echo $this->_tpl_vars['form']['contact_sub_type']['label']; ?>
<br />
              <?php echo $this->_tpl_vars['form']['contact_sub_type']['html']; ?>

           <?php endif; ?>
       </td>
     </tr>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
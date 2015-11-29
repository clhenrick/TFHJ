<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/Edit/Tagtree.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/Tagtree.tpl', 1, false),array('function', 'help', 'CRM/Contact/Form/Edit/Tagtree.tpl', 33, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><ul class="tree-level-<?php echo $this->_tpl_vars['level']; ?>
">
  <?php $_from = $this->_tpl_vars['tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['node']):
?>
    <li id="tagli_<?php echo $this->_tpl_vars['id']; ?>
">
      <input name="tag[<?php echo $this->_tpl_vars['id']; ?>
]" id="tag_<?php echo $this->_tpl_vars['id']; ?>
" class="form-checkbox" type="checkbox" value="1" <?php if ($this->_tpl_vars['node']['is_selectable'] == 0): ?>disabled=""<?php endif; ?> <?php if ($this->_tpl_vars['form']['tag']['value'][$this->_tpl_vars['id']] == 1): ?>checked="checked"<?php endif; ?>/>
      <span>
        <label for="tag_<?php echo $this->_tpl_vars['id']; ?>
" id="tagLabel_<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['node']['name']; ?>
</label>
        <?php if ($this->_tpl_vars['node']['description']): ?><?php echo smarty_function_help(array('id' => $this->_tpl_vars['id'],'title' => $this->_tpl_vars['node']['name'],'file' => "CRM/Tag/Form/Tagtree"), $this);?>
<?php endif; ?>
      </span>
      <?php if ($this->_tpl_vars['node']['children']): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Tagtree.tpl", 'smarty_include_vars' => array('tree' => $this->_tpl_vars['node']['children'],'level' => $this->_tpl_vars['level']+1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php endif; ?>
    </li>
  <?php endforeach; endif; unset($_from); ?>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
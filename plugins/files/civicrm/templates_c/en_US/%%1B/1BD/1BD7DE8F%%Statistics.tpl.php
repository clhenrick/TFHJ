<?php /* Smarty version 2.6.27, created on 2015-11-29 11:33:59
         compiled from CRM/Report/Form/Statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Statistics.tpl', 1, false),array('modifier', 'crmMoney', 'CRM/Report/Form/Statistics.tpl', 56, false),array('modifier', 'crmNumberFormat', 'CRM/Report/Form/Statistics.tpl', 60, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['top']): ?>
  <?php if ($this->_tpl_vars['printOnly']): ?>
    <h1><?php echo $this->_tpl_vars['reportTitle']; ?>
</h1>
    <div id="report-date"><?php echo $this->_tpl_vars['reportDate']; ?>
</div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['statistics'] && $this->_tpl_vars['outputMode']): ?>
    <table class="report-layout statistics-table">
      <?php $_from = $this->_tpl_vars['statistics']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        <tr>
          <th class="statistics" scope="row"><?php echo $this->_tpl_vars['row']['title']; ?>
</th>
          <td><?php echo $this->_tpl_vars['row']['value']; ?>
</td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
      <?php $_from = $this->_tpl_vars['statistics']['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        <tr>
          <th class="statistics" scope="row"><?php echo $this->_tpl_vars['row']['title']; ?>
</th>
          <td><?php echo $this->_tpl_vars['row']['value']; ?>
</td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
    </table>
  <?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['bottom'] && $this->_tpl_vars['rows'] && $this->_tpl_vars['statistics']): ?>
  <table class="report-layout">
    <?php $_from = $this->_tpl_vars['statistics']['counts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
      <tr>
        <th class="statistics" scope="row"><?php echo $this->_tpl_vars['row']['title']; ?>
</th>
        <td>
          <?php if ($this->_tpl_vars['row']['type'] == 1024): ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['row']['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

          <?php elseif ($this->_tpl_vars['row']['type'] == 2): ?>
            <?php echo $this->_tpl_vars['row']['value']; ?>

          <?php else: ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['row']['value'])) ? $this->_run_mod_handler('crmNumberFormat', true, $_tmp) : smarty_modifier_crmNumberFormat($_tmp)); ?>

          <?php endif; ?>

        </td>
      </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
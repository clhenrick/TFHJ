<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/Edit/Notes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/Notes.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-accordion-wrapper crm-notesBlock-accordion collapsed">
 <div class="crm-accordion-header">

    <?php echo $this->_tpl_vars['title']; ?>

  </div><!-- /.crm-accordion-header -->
  <div class="crm-accordion-body" id="notesBlock">
   <table class="form-layout-compressed">
     <tr>
       <td colspan=3><?php echo $this->_tpl_vars['form']['subject']['label']; ?>
<br  >
        <?php echo $this->_tpl_vars['form']['subject']['html']; ?>
</td>
     </tr>
     <tr>
       <td colspan=3><?php echo $this->_tpl_vars['form']['note']['label']; ?>
<br />
        <?php echo $this->_tpl_vars['form']['note']['html']; ?>

       </td>
     </tr>
   </table>
 </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
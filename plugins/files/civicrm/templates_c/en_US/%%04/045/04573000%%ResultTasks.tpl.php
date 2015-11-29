<?php /* Smarty version 2.6.27, created on 2015-11-22 10:25:27
         compiled from CRM/Contact/Form/Search/ResultTasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Search/ResultTasks.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Search/ResultTasks.tpl', 37, false),array('function', 'crmURL', 'CRM/Contact/Form/Search/ResultTasks.tpl', 28, false),array('function', 'help', 'CRM/Contact/Form/Search/ResultTasks.tpl', 42, false),array('modifier', 'count', 'CRM/Contact/Form/Search/ResultTasks.tpl', 72, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php ob_start(); ?>
<?php if ($this->_tpl_vars['context'] == 'smog'): ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/group/search/advanced','q' => "gid=".($this->_tpl_vars['group']['id'])."&reset=1&force=1"), $this);?>

<?php elseif ($this->_tpl_vars['context'] == 'amtg'): ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/search/advanced','q' => "context=amtg&amtgID=".($this->_tpl_vars['group']['id'])."&reset=1&force=1"), $this);?>

<?php else: ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/search/advanced','q' => "reset=1"), $this);?>

<?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('advSearchURL', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/search/builder','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('searchBuilderURL', ob_get_contents());ob_end_clean(); ?>

 <div id="search-status">
  <div class="float-right right">
    <?php if ($this->_tpl_vars['action'] == 256): ?>
        <a href="<?php echo $this->_tpl_vars['advSearchURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Advanced Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a><br />
        <?php if ($this->_tpl_vars['context'] == 'search'): ?>             <a href="<?php echo $this->_tpl_vars['searchBuilderURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search Builder<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a><br />
        <?php endif; ?>
        <?php if ($this->_tpl_vars['context'] == 'smog'): ?>
            <?php echo smarty_function_help(array('id' => "id-smog-criteria",'group_id' => $this->_tpl_vars['group']['id'],'group_title' => $this->_tpl_vars['group']['title'],'ssID' => $this->_tpl_vars['ssID'],'ssMappingID' => $this->_tpl_vars['ssMappingID'],'permissionedForGroup' => $this->_tpl_vars['permissionedForGroup']), $this);?>

        <?php elseif ($this->_tpl_vars['context'] == 'amtg'): ?>
            <?php echo smarty_function_help(array('id' => "id-amtg-criteria",'group_title' => $this->_tpl_vars['group']['title']), $this);?>

        <?php else: ?>
            <?php echo smarty_function_help(array('id' => "id-basic-criteria"), $this);?>

        <?php endif; ?>
    <?php elseif ($this->_tpl_vars['action'] == 512): ?>
        <a href="<?php echo $this->_tpl_vars['searchBuilderURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search Builder<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a><br />
    <?php elseif ($this->_tpl_vars['action'] == 8192): ?>
        <a href="<?php echo $this->_tpl_vars['advSearchURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Advanced Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a><br />
    <?php endif; ?>
  </div>

  <table class="form-layout-compressed">
  <tr>
    <td class="font-size12pt" style="width: 30%;">
        <?php if ($this->_tpl_vars['savedSearch']['name']): ?><?php echo $this->_tpl_vars['savedSearch']['name']; ?>
 (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>smart group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>) - <?php endif; ?>
        <?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['pager']->_totalItems,'plural' => '%count Contacts')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </td>

        <td class="nowrap">
    <?php if ($this->_tpl_vars['qill']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/displaySearchCriteria.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="font-size11pt"> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Records<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</td>
    <td class="nowrap">
      <?php $this->assign('checked', count($this->_tpl_vars['selectedContactIds'])); ?>
      <?php echo $this->_tpl_vars['form']['radio_ts']['ts_all']['html']; ?>
 <label for="<?php echo $this->_tpl_vars['ts_all_id']; ?>
"><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['pager']->_totalItems,'plural' => 'All %count records')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The found record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
      <?php if ($this->_tpl_vars['pager']->_totalItems > 1): ?>
        &nbsp; <?php echo $this->_tpl_vars['form']['radio_ts']['ts_sel']['html']; ?>
 <label for="<?php echo $this->_tpl_vars['ts_sel_id']; ?>
"><?php $this->_tag_stack[] = array('ts', array('1' => "<span>".($this->_tpl_vars['checked'])."</span>")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%1 Selected records only<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td colspan="2">
          <?php if ($this->_tpl_vars['context'] != 'amtg'): ?>
        <?php echo $this->_tpl_vars['form']['task']['html']; ?>

     <?php endif; ?>
     <?php if ($this->_tpl_vars['action'] == 512): ?>
       <?php echo $this->_tpl_vars['form']['_qf_Advanced_next_action']['html']; ?>

     <?php elseif ($this->_tpl_vars['action'] == 8192): ?>
       <?php echo $this->_tpl_vars['form']['_qf_Builder_next_action']['html']; ?>
&nbsp;&nbsp;
     <?php elseif ($this->_tpl_vars['action'] == 16384): ?>
       <?php echo $this->_tpl_vars['form']['_qf_Custom_next_action']['html']; ?>
&nbsp;&nbsp;
     <?php else: ?>
       <?php echo $this->_tpl_vars['form']['_qf_Basic_next_action']['html']; ?>

     <?php endif; ?>
     </td>
  </tr>
  </table>
 </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php /* Smarty version 2.6.27, created on 2015-11-20 18:42:36
         compiled from CRM/Contact/Page/Inline/Actions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/Inline/Actions.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Page/Inline/Actions.tpl', 29, false),array('function', 'crmURL', 'CRM/Contact/Page/Inline/Actions.tpl', 39, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div id="crm-contact-actions-wrapper" data-edit-params='{"cid": "<?php echo $this->_tpl_vars['contactId']; ?>
", "class_name": "CRM_Contact_Page_Inline_Actions"}'>
  <a id="crm-contact-actions-link" href="#" class="button"><span><div class="icon ui-icon-arrow-1-se css_right"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Actions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
    <div class="ac_results" id="crm-contact-actions-list">
      <div class="crm-contact-actions-list-inner">
        <div class="crm-contact_activities-list">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Activity/Form/ActivityLinks.tpl", 'smarty_include_vars' => array('as_select' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>

              <div class="crm-contact_print-list">
              <ul class="contact-print">
                  <li class="crm-contact-print">
                     <a class="print" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Printer-friendly view of this page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href='<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/print','q' => "reset=1&print=1&cid=".($this->_tpl_vars['contactId'])), $this);?>
'>
                     <span><div class="icon ui-icon-print"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Print Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                     </a>
                  </li>
                  <li>
                        <a class="vcard " title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>vCard record for this contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/vcard','q' => "reset=1&cid=".($this->_tpl_vars['contactId'])), $this);?>
"><span><div class="icon ui-icon-extlink"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>vCard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                        </a>
                  </li>
                 <?php if (! empty ( $this->_tpl_vars['dashboardURL'] )): ?>
                   <li class="crm-contact-dashboard">
                      <a href="<?php echo $this->_tpl_vars['dashboardURL']; ?>
" class="dashboard " title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>dashboard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                         <span><div class="icon ui-icon-contact"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact Dashboard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                       </a>
                   </li>
                 <?php endif; ?>
                 <?php if (! empty ( $this->_tpl_vars['userRecordUrl'] )): ?>
                   <li class="crm-contact-user-record">
                      <a href="<?php echo $this->_tpl_vars['userRecordUrl']; ?>
" class="user-record " title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>User Record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                         <span><div class="icon ui-icon-person"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>User Record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                      </a>
                   </li>
                 <?php endif; ?>
                 <?php if (! empty ( $this->_tpl_vars['userAddUrl'] )): ?>
                   <li class="crm-contact-user-record">
                      <a href="<?php echo $this->_tpl_vars['userAddUrl']; ?>
" class="user-record " title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Create User Record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                         <span><div class="icon ui-icon-person"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Create User Record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                      </a>
                   </li>
              <?php endif; ?>
        </ul>
        </div>
        <div class="crm-contact_actions-list">
        <ul class="contact-actions">
          <?php $_from = $this->_tpl_vars['actionsMenuList']['moreActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
          <?php if (! empty ( $this->_tpl_vars['row']['href'] ) || ! empty ( $this->_tpl_vars['row']['tab'] )): ?>
          <li class="crm-action-<?php echo $this->_tpl_vars['row']['ref']; ?>
">
            <a href="<?php if (! empty ( $this->_tpl_vars['row']['href'] )): ?><?php echo $this->_tpl_vars['row']['href']; ?>
&cid=<?php echo $this->_tpl_vars['contactId']; ?>
<?php else: ?>#<?php endif; ?>" title="<?php echo $this->_tpl_vars['row']['title']; ?>
" data-tab="<?php echo $this->_tpl_vars['row']['tab']; ?>
" <?php if (! empty ( $this->_tpl_vars['row']['class'] )): ?>class="<?php echo $this->_tpl_vars['row']['class']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['row']['title']; ?>
</a>
          </li>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
              </ul>
              </div>


        <div class="clear"></div>
      </div>
    </div>
  </div>
<?php echo '
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
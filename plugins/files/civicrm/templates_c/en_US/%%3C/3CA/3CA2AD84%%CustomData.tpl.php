<?php /* Smarty version 2.6.27, created on 2015-11-22 10:35:41
         compiled from CRM/Contact/Page/View/CustomData.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/View/CustomData.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contact/Page/View/CustomData.tpl', 38, false),array('block', 'ts', 'CRM/Contact/Page/View/CustomData.tpl', 54, false),array('modifier', 'cat', 'CRM/Contact/Page/View/CustomData.tpl', 37, false),array('function', 'crmURL', 'CRM/Contact/Page/View/CustomData.tpl', 56, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->assign('customDataGroupName', $this->_tpl_vars['customDataGroup']['name']); ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['displayStyle'] != 'tableOriented' && ( $this->_tpl_vars['action'] == 16 || $this->_tpl_vars['action'] == 4 )): ?><?php echo ' '; ?><?php echo '<div class="form-item">'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Page/CustomDataView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>

<?php $_from = $this->_tpl_vars['viewCustomData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customGroupWrapper']):
?>
  <?php $_from = $this->_tpl_vars['customGroupWrapper']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customGroupId'] => $this->_tpl_vars['customGroup']):
?>
    <?php $this->assign('customRegion', ((is_array($_tmp='contact-custom-data-')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['customGroup']['name']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['customGroup']['name']))); ?>
    <?php $this->_tag_stack[] = array('crmRegion', array('name' => $this->_tpl_vars['customRegion'])); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php if ($this->_tpl_vars['customGroup']['help_pre']): ?>
        <div class="messages help"><?php echo $this->_tpl_vars['customGroup']['help_pre']; ?>
</div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['action'] == 0 || $this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['recordActivity']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/CustomData.tpl", 'smarty_include_vars' => array('mainEdit' => $this->_tpl_vars['mainEditForm'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['displayStyle'] == 'tableOriented'): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Profile/Page/MultipleRecordFieldsListing.tpl', 'smarty_include_vars' => array('showListing' => 1,'dontShowTitle' => 1,'pageViewType' => 'customDataView')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php echo '
          <script type="text/javascript">
            CRM.$(function($) {
              var $table = $("#'; ?>
custom-<?php echo $this->_tpl_vars['customGroupId']; ?>
-table-wrapper<?php echo '");
              $(\'a.delete-custom-row\', $table).on(\'click\', function(e) {
                var $el = $(this);
                CRM.confirm({
                  message: \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to delete this record?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\'
                }).on(\'crmConfirm:yes\', function() {
                  var postUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/customvalue','h' => 0), $this);?>
"<?php echo ';
                  var request = $.post(postUrl, $el.data(\'delete_params\'));
                  CRM.status('; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Record Deleted<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ', request);
                  request.done(function() {
                    CRM.refreshParent($el);
                  });
                })
                e.preventDefault();
              });
            });
          </script>
        '; ?>

      <?php else: ?>
        <?php if ($this->_tpl_vars['mainEditForm']): ?>
          <script type="text/javascript">
            var showBlocks1 = new Array(<?php echo $this->_tpl_vars['showBlocks1']; ?>
);
            var hideBlocks1 = new Array(<?php echo $this->_tpl_vars['hideBlocks1']; ?>
);

            on_load_init_blocks(showBlocks1, hideBlocks1);
          </script>
        <?php else: ?>
          <script type="text/javascript">
            var showBlocks = new Array(<?php echo $this->_tpl_vars['showBlocks']; ?>
);
            var hideBlocks = new Array(<?php echo $this->_tpl_vars['hideBlocks']; ?>
);

                        on_load_init_blocks(showBlocks, hideBlocks);
          </script>
        <?php endif; ?>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['customGroup']['help_post']): ?>
        <div class="messages help"><?php echo $this->_tpl_vars['customGroup']['help_post']; ?>
</div>
      <?php endif; ?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
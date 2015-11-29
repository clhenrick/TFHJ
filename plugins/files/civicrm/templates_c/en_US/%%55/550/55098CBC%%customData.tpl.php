<?php /* Smarty version 2.6.27, created on 2015-11-20 18:46:57
         compiled from CRM/common/customData.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/customData.tpl', 1, false),array('function', 'crmURL', 'CRM/common/customData.tpl', 33, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! $this->_tpl_vars['includeWysiwygEditor']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/wysiwyg.tpl", 'smarty_include_vars' => array('includeWysiwygEditor' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php echo '
<script type="text/javascript">
CRM.buildCustomData = function( type, subType, subName, cgCount, groupID, isMultiple ) {
  var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => $this->_tpl_vars['urlPath'],'h' => 0,'q' => 'snippet=4&type='), $this);?>
"<?php echo ' + type;

  if ( subType ) {
    dataUrl = dataUrl + \'&subType=\' + subType;
  }

  if ( subName ) {
    dataUrl = dataUrl + \'&subName=\' + subName;
    cj(\'#customData\' + subName ).show();
  }
  else {
    cj(\'#customData\').show();
  }
  if ( groupID ) {
      dataUrl = dataUrl + \'&groupID=\' + groupID;
  }

  '; ?>

    <?php if ($this->_tpl_vars['urlPathVar']): ?>
      dataUrl = dataUrl + '&' + '<?php echo $this->_tpl_vars['urlPathVar']; ?>
'
    <?php endif; ?>
    <?php if ($this->_tpl_vars['groupID']): ?>
      dataUrl = dataUrl + '&groupID=' + '<?php echo $this->_tpl_vars['groupID']; ?>
'
    <?php endif; ?>
    <?php if ($this->_tpl_vars['qfKey']): ?>
      dataUrl = dataUrl + '&qfKey=' + '<?php echo $this->_tpl_vars['qfKey']; ?>
'
    <?php endif; ?>
    <?php if ($this->_tpl_vars['entityID']): ?>
      dataUrl = dataUrl + '&entityID=' + '<?php echo $this->_tpl_vars['entityID']; ?>
'
    <?php endif; ?>
  <?php echo '

  if ( !cgCount ) {
    cgCount = 1;
    var prevCount = 1;
  }
  else if ( cgCount >= 1 ) {
    var prevCount = cgCount;
    cgCount++;
  }

  dataUrl = dataUrl + \'&cgcount=\' + cgCount;


  if ( isMultiple ) {
    var fname = \'#custom_group_\' + groupID + \'_\' + prevCount;
    if (cj(".add-more-link-" + groupID + "-" + prevCount ).length) {
      cj(".add-more-link-" + groupID + "-" + prevCount).hide();
    }
    else {
      cj("#add-more-link-"+prevCount).hide();
    }
  }
  else {
    if ( subName && subName != \'null\' ) {
      var fname = \'#customData\' + subName ;
    }
    else {
      var fname = \'#customData\';
    }
  }

  cj.ajax({
    url: dataUrl,
    dataType: \'html\',
    async: false,
    success: function(response) {
      var target = cj(fname);
      var storage = {};
      target.children().each(function() {
        var id = cj(this).attr(\'id\');
        if (id) {
          // Help values survive storage
          cj(\'textarea\', this).each(function() {
            cj(this).text(cj(this).val());
          });
          cj(\'option:selected\', this).attr(\'selected\', \'selected\');
          cj(\'option:not(:selected)\', this).removeAttr(\'selected\');
          storage[id] = cj(this).detach();
        }
      });
      target.html(response).trigger(\'crmLoad\');
      target.children().each(function() {
        var id = cj(this).attr(\'id\');
        if (id && storage[id]) {
          cj(this).replaceWith(storage[id]);
        }
      });
      storage = null;
    }
  });
};

</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
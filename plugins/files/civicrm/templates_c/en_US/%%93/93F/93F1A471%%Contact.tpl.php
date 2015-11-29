<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/Contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Contact.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Contact.tpl', 35, false),array('function', 'crmURL', 'CRM/Contact/Form/Contact.tpl', 35, false),array('function', 'help', 'CRM/Contact/Form/Contact.tpl', 58, false),array('modifier', 'crmAddClass', 'CRM/Contact/Form/Contact.tpl', 59, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['addBlock']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['blockName']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <?php if ($this->_tpl_vars['contactId']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Lock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>
  <div class="crm-form-block crm-search-form-block">
    <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'administer CiviCRM' )): ?>
      <a href='<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/setting/preferences/display",'q' => "reset=1"), $this);?>
' title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click here to configure the panes.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span class="icon ui-icon-wrench"></span></a>
    <?php endif; ?>
    <span style="float:right;"><a href="#expand" id="expand"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expand all tabs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
    <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <div class="crm-accordion-wrapper crm-contactDetails-accordion">
      <div class="crm-accordion-header">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div><!-- /.crm-accordion-header -->
      <div class="crm-accordion-body" id="contactDetails">
        <div id="contactDetails">
          <div class="crm-section contact_basic_information-section">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['contactType']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </div>
          <table class="crm-section contact_information-section form-layout-compressed">
            <?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block'] => $this->_tpl_vars['label']):
?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['block']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endforeach; endif; unset($_from); ?>
          </table>
          <table class="crm-section contact_source-section form-layout-compressed">
            <tr class="last-row">
              <td><?php echo $this->_tpl_vars['form']['contact_source']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-source"), $this);?>
<br />
                <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['contact_source']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'twenty') : smarty_modifier_crmAddClass($_tmp, 'twenty')); ?>

              </td>
              <td><?php echo $this->_tpl_vars['form']['external_identifier']['label']; ?>
&nbsp;<?php echo smarty_function_help(array('id' => "id-external-id"), $this);?>
<br />
                <?php echo $this->_tpl_vars['form']['external_identifier']['html']; ?>

              </td>
              <?php if ($this->_tpl_vars['contactId']): ?>
                <td>
                  <label for="internal_identifier_display"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviCRM ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-internal-id"), $this);?>
</label><br />
                  <input id="internal_identifier_display" type="text" class="crm-form-text six" size="6" readonly="readonly" value="<?php echo $this->_tpl_vars['contactId']; ?>
">
                </td>
              <?php endif; ?>
            </tr>
          </table>
          <table class="image_URL-section form-layout-compressed">
            <tr>
              <td>
                <?php echo $this->_tpl_vars['form']['image_URL']['label']; ?>
&nbsp;&nbsp;<?php echo smarty_function_help(array('id' => "id-upload-image",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
<br />
                <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['image_URL']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'twenty') : smarty_modifier_crmAddClass($_tmp, 'twenty')); ?>

                <?php if (! empty ( $this->_tpl_vars['imageURL'] )): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/ContactImage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
              </td>
            </tr>
          </table>

                    <span class="crm-button crm-button_qf_Contact_refresh_dedupe">
            <?php echo $this->_tpl_vars['form']['_qf_Contact_refresh_dedupe']['html']; ?>

          </span>
          <?php if ($this->_tpl_vars['isDuplicate']): ?>
            &nbsp;&nbsp;
              <span class="crm-button crm-button_qf_Contact_upload_duplicate">
                <?php echo $this->_tpl_vars['form']['_qf_Contact_upload_duplicate']['html']; ?>

              </span>
          <?php endif; ?>
          <div class="spacer"></div>
        </div>
      </div><!-- /.crm-accordion-body -->
    </div><!-- /.crm-accordion-wrapper -->

    <?php $_from = $this->_tpl_vars['editOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['title']):
?>
      <?php if ($this->_tpl_vars['name'] == 'CustomData'): ?>
        <div id='customData'><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
      <?php else: ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['name']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  </div>
  <?php echo '

  <script type="text/javascript" >
  CRM.$(function($) {
    var $form = $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '");
    var action = "'; ?>
<?php echo $this->_tpl_vars['action']; ?>
<?php echo '";

    $(\'.crm-accordion-body\').each( function() {
      //remove tab which doesn\'t have any element
      if ( ! $.trim( $(this).text() ) ) {
        ele     = $(this);
        prevEle = $(this).prev();
        $(ele).remove();
        $(prevEle).remove();
      }
      //open tab if form rule throws error
      if ( $(this).children().find(\'span.crm-error\').text().length > 0 ) {
        $(this).parents(\'.collapsed\').crmAccordionToggle();
      }
    });
    if (action == \'2\') {
      $(\'.crm-accordion-wrapper\').not(\'.crm-accordion-wrapper .crm-accordion-wrapper\').each(function() {
        highlightTabs(this);
      });
      $(\'#crm-container\').on(\'change click\', \'.crm-accordion-body :input, .crm-accordion-body a\', function() {
        highlightTabs($(this).parents(\'.crm-accordion-wrapper\'));
      });
    }
    function highlightTabs(tab) {
      //highlight the tab having data inside.
      $(\'.crm-accordion-body :input\', tab).each( function() {
        var active = false;
          switch($(this).prop(\'type\')) {
            case \'checkbox\':
            case \'radio\':
              if($(this).is(\':checked\') && !$(this).is(\'[id$=IsPrimary],[id$=IsBilling]\')) {
                $(\'.crm-accordion-header:first\', tab).addClass(\'active\');
                return false;
              }
              break;

            case \'text\':
            case \'textarea\':
              if($(this).val()) {
                $(\'.crm-accordion-header:first\', tab).addClass(\'active\');
                return false;
              }
              break;

            case \'select-one\':
            case \'select-multiple\':
              if($(this).val() && $(\'option[value=""]\', this).length > 0) {
                $(\'.crm-accordion-header:first\', tab).addClass(\'active\');
                return false;
              }
              break;

            case \'file\':
              if($(this).next().html()) {
                $(\'.crm-accordion-header:first\', tab).addClass(\'active\');
                return false;
              }
              break;
          }
          $(\'.crm-accordion-header:first\', tab).removeClass(\'active\');
      });
    }

    $(\'a#expand\').click( function() {
      if( $(this).attr(\'href\') == \'#expand\') {
        var message = '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Collapse all tabs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ';
        $(this).attr(\'href\', \'#collapse\');
        $(\'.crm-accordion-wrapper.collapsed\').crmAccordionToggle();
      }
      else {
        var message = '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expand all tabs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ';
        $(\'.crm-accordion-wrapper:not(.collapsed)\').crmAccordionToggle();
        $(this).attr(\'href\', \'#expand\');
      }
      $(this).html(message);
      return false;
    });

    $(\'.customDataPresent\').change(function() {
      //$(\'.crm-custom-accordion\').remove();
      var values = $("#contact_sub_type").val();
      var contactType = '; ?>
"<?php echo $this->_tpl_vars['contactType']; ?>
"<?php echo ';
      CRM.buildCustomData(contactType, values);
      loadMultiRecordFields(values);
      $(\'.crm-custom-accordion\').each(function() {
        highlightTabs(this);
      });
    });

    function loadMultiRecordFields(subTypeValues) {
      if (subTypeValues == false) {
        var subTypeValues = null;
      }
        else if (!subTypeValues) {
        var subTypeValues = '; ?>
"<?php echo $this->_tpl_vars['paramSubType']; ?>
"<?php echo ';
      }
      '; ?>

      <?php $_from = $this->_tpl_vars['customValueCount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['groupValue'] => $this->_tpl_vars['groupCount']):
?>
      <?php if ($this->_tpl_vars['groupValue']): ?><?php echo '
        for ( var i = 1; i < '; ?>
<?php echo $this->_tpl_vars['groupCount']; ?>
<?php echo '; i++ ) {
          CRM.buildCustomData( '; ?>
"<?php echo $this->_tpl_vars['contactType']; ?>
"<?php echo ', subTypeValues, null, i, '; ?>
<?php echo $this->_tpl_vars['groupValue']; ?>
<?php echo ', true );
        }
      '; ?>

      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
      <?php echo '
    }

    loadMultiRecordFields();

    '; ?>
<?php if ($this->_tpl_vars['oldSubtypes']): ?><?php echo '
    $(\'input[name=_qf_Contact_upload_view], input[name=_qf_Contact_upload_new]\').click(function() {
      var submittedSubtypes = $(\'#contact_sub_type\').val();
      var oldSubtypes = '; ?>
<?php echo $this->_tpl_vars['oldSubtypes']; ?>
<?php echo ';

      var warning = false;
      $.each(oldSubtypes, function(index, subtype) {
        if ( $.inArray(subtype, submittedSubtypes) < 0 ) {
          warning = true;
        }
      });
      if ( warning ) {
        return confirm('; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>One or more contact subtypes have been de-selected from the list for this contact. Any custom data associated with de-selected subtype will be removed. Click OK to proceed, or Cancel to review your changes before saving.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ');
      }
      return true;
    });
    '; ?>
<?php endif; ?><?php echo '

    // Handle delete of multi-record custom data
    $form.on(\'click\', \'.crm-custom-value-del\', function(e) {
      e.preventDefault();
      var $el = $(this),
        msg = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The record will be deleted immediately. This action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
      CRM.confirm({title: $el.attr(\'title\'), message: msg})
        .on(\'crmConfirm:yes\', function() {
          var url = CRM.url(\'civicrm/ajax/customvalue\');
          var request = $.post(url, $el.data(\'post\'));
          CRM.status({success: \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Record Deleted<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\'}, request);
          var addClass = \'.add-more-link-\' + $el.data(\'post\').groupID;
          $el.closest(\'div.crm-custom-accordion\').remove();
          $(\'div\' + addClass).last().show();
        });
    });
  });

</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/validate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/additionalBlocks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
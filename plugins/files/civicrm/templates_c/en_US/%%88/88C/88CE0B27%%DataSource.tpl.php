<?php /* Smarty version 2.6.27, created on 2015-11-29 11:42:06
         compiled from CRM/Contact/Import/Form/DataSource.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Import/Form/DataSource.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Import/Form/DataSource.tpl', 37, false),array('function', 'help', 'CRM/Contact/Import/Form/DataSource.tpl', 37, false),array('function', 'docURL', 'CRM/Contact/Import/Form/DataSource.tpl', 89, false),array('function', 'crmURL', 'CRM/Contact/Import/Form/DataSource.tpl', 117, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-block crm-form-block crm-import-datasource-form-block">
<?php if ($this->_tpl_vars['showOnlyDataSourceFormPane']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['dataSourceFormTemplateFile'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/WizardHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <div id="help">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The Import Wizard allows you to easily import contact records from other applications into CiviCRM. For example, if your organization has contacts in MS Access&reg; or Excel&reg;, and you want to start using CiviCRM to store these contacts, you can 'import' them here.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => 'choose-data-source-intro'), $this);?>

  </div>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <div id="choose-data-source" class="form-item">
      <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Choose Data Source<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
      <table class="form-layout">
        <tr class="crm-import-datasource-form-block-dataSource">
            <td class="label"><?php echo $this->_tpl_vars['form']['dataSource']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['dataSource']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'data-source-selection'), $this);?>
</td>
        </tr>
      </table>
  </div>

    <div id="data-source-form-block">
    <?php if ($this->_tpl_vars['dataSourceFormTemplateFile']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['dataSourceFormTemplateFile'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
  </div>

  <div id="common-form-controls" class="form-item">
      <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Import Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
      <table class="form-layout-compressed">
         <tr class="crm-import-datasource-form-block-contactType">
       <td class="label"><?php echo $this->_tpl_vars['form']['contactType']['label']; ?>
</td>
             <td><?php echo $this->_tpl_vars['form']['contactType']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'contact-type'), $this);?>
&nbsp;&nbsp;&nbsp;
               <span id="contact-subtype"><?php echo $this->_tpl_vars['form']['subType']['label']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['subType']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'contact-sub-type'), $this);?>
</span></td>
         </tr>
         <tr class="crm-import-datasource-form-block-onDuplicate">
             <td class="label"><?php echo $this->_tpl_vars['form']['onDuplicate']['label']; ?>
</td>
             <td><?php echo $this->_tpl_vars['form']['onDuplicate']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'dupes'), $this);?>
</td>
         </tr>
         <tr class="crm-import-datasource-form-block-dedupe">
             <td class="label"><?php echo $this->_tpl_vars['form']['dedupe']['label']; ?>
</td>
             <td><span id="contact-dedupe"><?php echo $this->_tpl_vars['form']['dedupe']['html']; ?>
</span> <?php echo smarty_function_help(array('id' => 'id-dedupe_rule'), $this);?>
</td>
         </tr>
         <tr class="crm-import-datasource-form-block-fieldSeparator">
             <td class="label"><?php echo $this->_tpl_vars['form']['fieldSeparator']['label']; ?>
</td>
             <td><?php echo $this->_tpl_vars['form']['fieldSeparator']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-fieldSeparator'), $this);?>
</td>
         </tr>
         <tr><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/Date.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></tr>
         <tr>
             <td></td><td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the format that is used for date fields in your import data.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
         </tr>

        <?php if ($this->_tpl_vars['geoCode']): ?>
         <tr class="crm-import-datasource-form-block-doGeocodeAddress">
             <td class="label"></td>
             <td><?php echo $this->_tpl_vars['form']['doGeocodeAddress']['html']; ?>
 <?php echo $this->_tpl_vars['form']['doGeocodeAddress']['label']; ?>
<br />
               <span class="description">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This option is not recommended for large imports. Use the command-line geocoding script instead.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
               </span>
               <?php echo smarty_function_docURL(array('page' => 'Managing Scheduled Jobs','resource' => 'wiki'), $this);?>

            </td>
         </tr>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['savedMapping']): ?>
         <tr  class="crm-import-datasource-form-block-savedMapping">
              <td class="label"><label for="savedMapping"><?php if ($this->_tpl_vars['loadedMapping']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Different Field Mapping<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Load Saved Field Mapping<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></label></td>
              <td><?php echo $this->_tpl_vars['form']['savedMapping']['html']; ?>
<br />
      &nbsp;&nbsp;&nbsp;<span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Saved Mapping or Leave blank to create a new One.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
         </tr>
        <?php endif; ?>
 </table>
  </div>

  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>

  <?php echo '
    <script type="text/javascript">
      CRM.$(function($) {
         //build data source form block
         buildDataSourceFormBlock();
         buildSubTypes();
         buildDedupeRules();
      });

      function buildDataSourceFormBlock(dataSource)
      {
        var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => $this->_tpl_vars['urlPath'],'h' => 0,'q' => $this->_tpl_vars['urlPathVar']), $this);?>
"<?php echo ';

        if (!dataSource ) {
          var dataSource = cj("#dataSource").val();
        }

        if ( dataSource ) {
          dataUrl = dataUrl + \'&dataSource=\' + dataSource;
        } else {
          cj("#data-source-form-block").html( \'\' );
          return;
        }

        cj("#data-source-form-block").load( dataUrl );
      }

      function buildSubTypes( )
      {
        element = cj(\'input[name="contactType"]:checked\').val( );
        var postUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/subtype','h' => 0), $this);?>
"<?php echo ';
        var param = \'parentId=\'+ element;
        cj.ajax({ type: "POST", url: postUrl, data: param, async: false, dataType: \'json\',

                        success: function(subtype){
                                                   if ( subtype.length == 0 ) {
                                                      cj("#subType").empty();
                                                      cj("#contact-subtype").hide();
                                                   } else {
                                                       cj("#contact-subtype").show();
                                                       cj("#subType").empty();

                                                       cj("#subType").append("<option value=\'\'>- '; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>select<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ' -</option>");
                                                       for ( var key in  subtype ) {
                                                           // stick these new options in the subtype select
                                                           cj("#subType").append("<option value="+key+">"+subtype[key]+" </option>");
                                                       }
                                                   }


                                                 }
  });

      }

      function buildDedupeRules( )
      {
        element = cj("input[name=contactType]:checked").val();
        var postUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/dedupeRules','h' => 0), $this);?>
"<?php echo ';
        var param = \'parentId=\'+ element;
        cj.ajax({ type: "POST", url: postUrl, data: param, async: false, dataType: \'json\',

                        success: function(dedupe){
                                                   if ( dedupe.length == 0 ) {
                                                      cj("#dedupe").empty();
                                                      cj("#contact-dedupe").hide();
                                                   } else {
                                                       cj("#contact-dedupe").show();
                                                       cj("#dedupe").empty();

                                                       cj("#dedupe").append("<option value=\'\'>- '; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>select<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ' -</option>");
                                                       for ( var key in  dedupe ) {
                                                           // stick these new options in the dedupe select
                                                           cj("#dedupe").append("<option value="+key+">"+dedupe[key]+" </option>");
                                                       }
                                                   }


                                                 }
  });

      }

    </script>
  '; ?>

<?php endif; ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
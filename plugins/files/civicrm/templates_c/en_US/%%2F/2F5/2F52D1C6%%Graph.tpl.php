<?php /* Smarty version 2.6.27, created on 2015-11-29 11:33:59
         compiled from CRM/Report/Form/Layout/Graph.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Layout/Graph.tpl', 1, false),array('modifier', 'replace', 'CRM/Report/Form/Layout/Graph.tpl', 26, false),array('modifier', 'cat', 'CRM/Report/Form/Layout/Graph.tpl', 26, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->assign('uploadURL', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['config']->imageUploadURL)) ? $this->_run_mod_handler('replace', true, $_tmp, '/persist/contribute/', '/persist/') : smarty_modifier_replace($_tmp, '/persist/contribute/', '/persist/')))) ? $this->_run_mod_handler('cat', true, $_tmp, 'openFlashChart/') : smarty_modifier_cat($_tmp, 'openFlashChart/'))); ?>
<?php if ($this->_tpl_vars['chartEnabled'] && $this->_tpl_vars['chartSupported']): ?>
<div class='crm-flashchart'>
<table class="chart">
        <tr>
            <td>
                <?php if ($this->_tpl_vars['outputMode'] == 'print' || $this->_tpl_vars['outputMode'] == 'pdf'): ?>
                    <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['uploadURL'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['chartId']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['chartId'])); ?>
.png" />
                <?php else: ?>
              <div id="open_flash_chart_<?php echo $this->_tpl_vars['uniqueId']; ?>
"></div>
                <?php endif; ?>
            </td>
        </tr>
</table>
</div>

<?php if (! $this->_tpl_vars['printOnly']): ?> <?php if (! $this->_tpl_vars['section']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/openFlashChart.tpl", 'smarty_include_vars' => array('divId' => "open_flash_chart_".($this->_tpl_vars['uniqueId']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php echo '
<script type="text/javascript">
   CRM.$(function($) {
     buildChart( );

     $("input[id$=\'submit_print\'],input[id$=\'submit_pdf\']").bind(\'click\', function(e){
       // image creator php file path and append image name
       var url = CRM.url(\'civicrm/report/chart\', \'name=\' + \''; ?>
<?php echo $this->_tpl_vars['chartId']; ?>
<?php echo '\' + \'.png\');

       //fetch object and \'POST\' image
       swfobject.getObjectById("open_flash_chart_'; ?>
<?php echo $this->_tpl_vars['uniqueId']; ?>
<?php echo '").post_image(url, true, false);
     });
   });

  function buildChart( ) {
     var chartData = '; ?>
<?php echo $this->_tpl_vars['openFlashChartData']; ?>
<?php echo ';
     cj.each( chartData, function( chartID, chartValues ) {
       var xSize   = eval( "chartValues.size.xSize" );
       var ySize   = eval( "chartValues.size.ySize" );
       var divName = '; ?>
"open_flash_chart_<?php echo $this->_tpl_vars['uniqueId']; ?>
"<?php echo ';

       var loadDataFunction  = '; ?>
"loadData<?php echo $this->_tpl_vars['uniqueId']; ?>
"<?php echo ';
       createSWFObject( chartID, divName, xSize, ySize, loadDataFunction );
     });
  }

  function loadData'; ?>
<?php echo $this->_tpl_vars['uniqueId']; ?>
<?php echo '( chartID ) {
      var allData = '; ?>
<?php echo $this->_tpl_vars['openFlashChartData']; ?>
<?php echo ';
      var data    = eval( "allData." + chartID + ".object" );
      return JSON.stringify( data );
  }
</script>
'; ?>

<?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
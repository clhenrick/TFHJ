<?php /* Smarty version 2.6.27, created on 2015-11-29 11:33:59
         compiled from CRM/Report/Form/Criteria.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Criteria.tpl', 1, false),array('block', 'ts', 'CRM/Report/Form/Criteria.tpl', 30, false),array('function', 'cycle', 'CRM/Report/Form/Criteria.tpl', 153, false),array('modifier', 'count', 'CRM/Report/Form/Criteria.tpl', 216, false),array('modifier', 'cat', 'CRM/Report/Form/Criteria.tpl', 233, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>    <?php if ($this->_tpl_vars['colGroups']): ?>
      <div id="col-groups" class="civireport-criteria" >
        <?php if ($this->_tpl_vars['componentName'] == 'Grant'): ?>
            <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Include these Statistics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <?php else: ?>
            <h3>Display Columns</h3>
        <?php endif; ?>
        <?php $_from = $this->_tpl_vars['colGroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dnc'] => $this->_tpl_vars['grpFields']):
?>
            <?php $this->assign('count', '0'); ?>
                        <?php if ($this->_tpl_vars['grpFields']['group_title']): ?>
                <div class="crm-accordion-wrapper crm-accordion crm-accordion-closed">
                    <div class="crm-accordion-header">
                        <div class="icon crm-accordion-pointer"></div>
                        <?php echo $this->_tpl_vars['grpFields']['group_title']; ?>

                    </div><!-- /.crm-accordion-header -->
                    <div class="crm-accordion-body">
            <?php endif; ?>
            <table class="criteria-group">
                <tr class="crm-report crm-report-criteria-field crm-report-criteria-field-<?php echo $this->_tpl_vars['dnc']; ?>
">
                    <?php $_from = $this->_tpl_vars['grpFields']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['title']):
?>
                        <?php $this->assign('count', ($this->_tpl_vars['count']+1)); ?>
                        <td width="25%"><?php echo $this->_tpl_vars['form']['fields'][$this->_tpl_vars['field']]['html']; ?>
</td>
                        <?php if (!($this->_tpl_vars['count'] % 4)): ?>
                            </tr><tr class="crm-report crm-report-criteria-field crm-report-criteria-field_<?php echo $this->_tpl_vars['dnc']; ?>
">
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php if (!(!($this->_tpl_vars['count'] % 4))): ?>
                        <td colspan="4 - ($count % 4)"></td>
                    <?php endif; ?>
                </tr>
            </table>
            <?php if ($this->_tpl_vars['grpFields']['group_title']): ?>
                    </div><!-- /.crm-accordion-body -->
                </div><!-- /.crm-accordion-wrapper -->
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['groupByElements']): ?>
        <div id="group-by-elements" class="civireport-criteria" >
        <h3>Group by Columns</h3>
        <?php $this->assign('count', '0'); ?>
        <table class="report-layout">
            <tr class="crm-report crm-report-criteria-groupby">
                <?php $_from = $this->_tpl_vars['groupByElements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dnc'] => $this->_tpl_vars['gbElem']):
?>
                    <?php $this->assign('count', ($this->_tpl_vars['count']+1)); ?>
                    <td width="25%" <?php if ($this->_tpl_vars['form']['fields'][$this->_tpl_vars['gbElem']]): ?> onClick="selectGroupByFields('<?php echo $this->_tpl_vars['gbElem']; ?>
');"<?php endif; ?>>
                        <?php echo $this->_tpl_vars['form']['group_bys'][$this->_tpl_vars['gbElem']]['html']; ?>

                        <?php if ($this->_tpl_vars['form']['group_bys_freq'][$this->_tpl_vars['gbElem']]['html']): ?>:<br>
                            &nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['group_bys_freq'][$this->_tpl_vars['gbElem']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['group_bys_freq'][$this->_tpl_vars['gbElem']]['html']; ?>

                        <?php endif; ?>
                    </td>
                    <?php if (!($this->_tpl_vars['count'] % 4)): ?>
                        </tr><tr class="crm-report crm-report-criteria-groupby">
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <?php if (!(!($this->_tpl_vars['count'] % 4))): ?>
                    <td colspan="4 - ($count % 4)"></td>
                <?php endif; ?>
            </tr>
        </table>
     </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['form']['custom_tables']): ?>
    <div id='crm-custom_tables'>
      <table><tr><td>

        <div id='crm-custom_fields'>
            <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Custom Fields(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
                <?php echo $this->_tpl_vars['form']['custom_fields']['html']; ?>

                <?php echo '
                <script type="text/javascript">
                cj("select#custom_fields").crmasmSelect({
                    addItemTarget: \'bottom\',
                    animate: false,
                    highlight: true,
                    sortable: true,
                    respectParents: true
                });
                </script>
                '; ?>

          </div>
          </td>

            <td>
          <?php if ($this->_tpl_vars['form']['templates']): ?>
            <div id='crm-templates'>
            <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Print template<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
            <?php echo $this->_tpl_vars['form']['templates']['html']; ?>

            </div>
          <?php endif; ?>
            </td>
          </tr>
    </table>
    </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['form']['aggregate_column_headers']): ?>
      <table>
        <tr>
          <td>
            <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Column Header<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
            <?php echo $this->_tpl_vars['form']['aggregate_column_headers']['html']; ?>

          </td><td>
            <div id='crm-custom_fields'>
              <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Row Fields<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
              <?php echo $this->_tpl_vars['form']['aggregate_row_headers']['html']; ?>

            </div>
          </td></tr>
      </table>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['orderByOptions']): ?>
      <div id="order-by-elements" class="civireport-criteria" >
        <h3>Order by Columns</h3>

  <table id="optionField">
        <tr>
        <th>&nbsp;</th>
        <th> Column</th>
        <th> Order</th>
        <th> Section Header / Group By</th>
        </tr>

  <?php unset($this->_sections['rowLoop']);
$this->_sections['rowLoop']['name'] = 'rowLoop';
$this->_sections['rowLoop']['start'] = (int)1;
$this->_sections['rowLoop']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rowLoop']['show'] = true;
$this->_sections['rowLoop']['max'] = $this->_sections['rowLoop']['loop'];
$this->_sections['rowLoop']['step'] = 1;
if ($this->_sections['rowLoop']['start'] < 0)
    $this->_sections['rowLoop']['start'] = max($this->_sections['rowLoop']['step'] > 0 ? 0 : -1, $this->_sections['rowLoop']['loop'] + $this->_sections['rowLoop']['start']);
else
    $this->_sections['rowLoop']['start'] = min($this->_sections['rowLoop']['start'], $this->_sections['rowLoop']['step'] > 0 ? $this->_sections['rowLoop']['loop'] : $this->_sections['rowLoop']['loop']-1);
if ($this->_sections['rowLoop']['show']) {
    $this->_sections['rowLoop']['total'] = min(ceil(($this->_sections['rowLoop']['step'] > 0 ? $this->_sections['rowLoop']['loop'] - $this->_sections['rowLoop']['start'] : $this->_sections['rowLoop']['start']+1)/abs($this->_sections['rowLoop']['step'])), $this->_sections['rowLoop']['max']);
    if ($this->_sections['rowLoop']['total'] == 0)
        $this->_sections['rowLoop']['show'] = false;
} else
    $this->_sections['rowLoop']['total'] = 0;
if ($this->_sections['rowLoop']['show']):

            for ($this->_sections['rowLoop']['index'] = $this->_sections['rowLoop']['start'], $this->_sections['rowLoop']['iteration'] = 1;
                 $this->_sections['rowLoop']['iteration'] <= $this->_sections['rowLoop']['total'];
                 $this->_sections['rowLoop']['index'] += $this->_sections['rowLoop']['step'], $this->_sections['rowLoop']['iteration']++):
$this->_sections['rowLoop']['rownum'] = $this->_sections['rowLoop']['iteration'];
$this->_sections['rowLoop']['index_prev'] = $this->_sections['rowLoop']['index'] - $this->_sections['rowLoop']['step'];
$this->_sections['rowLoop']['index_next'] = $this->_sections['rowLoop']['index'] + $this->_sections['rowLoop']['step'];
$this->_sections['rowLoop']['first']      = ($this->_sections['rowLoop']['iteration'] == 1);
$this->_sections['rowLoop']['last']       = ($this->_sections['rowLoop']['iteration'] == $this->_sections['rowLoop']['total']);
?>
  <?php $this->assign('index', $this->_sections['rowLoop']['index']); ?>
  <tr id="optionField_<?php echo $this->_tpl_vars['index']; ?>
" class="form-item <?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
">
        <td>
        <?php if ($this->_tpl_vars['index'] > 1): ?>
            <a onclick="hideRow(<?php echo $this->_tpl_vars['index']; ?>
);" name="orderBy_<?php echo $this->_tpl_vars['index']; ?>
" href="javascript:void(0)" class="form-link"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreeMinus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>hide field or section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></a>
        <?php endif; ?>
        </td>
        <td> <?php echo $this->_tpl_vars['form']['order_bys'][$this->_tpl_vars['index']]['column']['html']; ?>
</td>
        <td> <?php echo $this->_tpl_vars['form']['order_bys'][$this->_tpl_vars['index']]['order']['html']; ?>
</td>
        <td> <?php echo $this->_tpl_vars['form']['order_bys'][$this->_tpl_vars['index']]['section']['html']; ?>
</td>
  </tr>
        <?php endfor; endif; ?>
        </table>
            <div id="optionFieldLink" class="add-remove-link">
            <a onclick="showHideRow();" name="optionFieldLink" href="javascript:void(0)" class="form-link"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreePlus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>show field or section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>another column<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </div>
        <script type="text/javascript">
            var showRows   = new Array(<?php echo $this->_tpl_vars['showBlocks']; ?>
);
            var hideBlocks = new Array(<?php echo $this->_tpl_vars['hideBlocks']; ?>
);
            var rowcounter = 0;
            <?php echo '
            if (navigator.appName == "Microsoft Internet Explorer") {
                for ( var count = 0; count < hideBlocks.length; count++ ) {
                    var r = document.getElementById(hideBlocks[count]);
                    r.style.display = \'none\';
                }
            }

            // hide and display the appropriate blocks as directed by the php code
            on_load_init_blocks( showRows, hideBlocks, \'\' );

            function hideRow(i) {
                showHideRow(i);
                // clear values on hidden field, so they\'re not saved
                cj(\'select#order_by_column_\'+ i).val(\'\');
                cj(\'select#order_by_order_\'+ i).val(\'ASC\');
                cj(\'input#order_by_section_\'+ i).attr(\'checked\', false);
            }

            '; ?>

        </script>
      </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['form']['options']['html'] || $this->_tpl_vars['form']['options']['html']): ?>
        <div id="other-options" class="civireport-criteria" >
        <h3>Other Options</h3>
        <table class="report-layout">
            <tr class="crm-report crm-report-criteria-groupby">
          <td><?php echo $this->_tpl_vars['form']['options']['html']; ?>
</td>
          <?php if ($this->_tpl_vars['form']['blank_column_end']): ?>
              <td><?php echo $this->_tpl_vars['form']['blank_column_end']['label']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['blank_column_end']['html']; ?>
</td>
                <?php endif; ?>
            </tr>
        </table>
        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['filters']): ?>
  <div id="set-filters" class="civireport-criteria" >
        <h3>Set Filters</h3>
        <table class="report-layout">
      <?php $this->assign('counter', 1); ?>
            <?php $_from = $this->_tpl_vars['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tableName'] => $this->_tpl_vars['table']):
?>
           <?php $this->assign('filterCount', count($this->_tpl_vars['table'])); ?>
                      <?php if ($this->_tpl_vars['colGroups'][$this->_tpl_vars['tableName']]['group_title'] && $this->_tpl_vars['filterCount'] >= 1): ?>
                <?php if ($this->_tpl_vars['counter'] == 1): ?>
                </table>
      <?php $this->assign('counter', 0); ?>
        <?php endif; ?>
                    <div class="crm-accordion-wrapper crm-accordion crm-accordion-closed">
                    <div class="crm-accordion-header">
                        <div class="icon crm-accordion-pointer"></div>
                        <?php echo $this->_tpl_vars['colGroups'][$this->_tpl_vars['tableName']]['group_title']; ?>

                    </div><!-- /.crm-accordion-header -->
                    <div class="crm-accordion-body">
                    <table class="report-layout">
               <?php endif; ?>
                <?php $_from = $this->_tpl_vars['table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
                    <?php $this->assign('fieldOp', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_op') : smarty_modifier_cat($_tmp, '_op'))); ?>
                    <?php $this->assign('filterVal', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_value') : smarty_modifier_cat($_tmp, '_value'))); ?>
                    <?php $this->assign('filterMin', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_min') : smarty_modifier_cat($_tmp, '_min'))); ?>
                    <?php $this->assign('filterMax', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_max') : smarty_modifier_cat($_tmp, '_max'))); ?>
                    <?php if ($this->_tpl_vars['field']['operatorType'] & 4): ?>
                        <tr class="report-contents crm-report crm-report-criteria-filter crm-report-criteria-filter-<?php echo $this->_tpl_vars['tableName']; ?>
">
                            <td class="label report-contents"><?php echo $this->_tpl_vars['field']['title']; ?>
</td>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/DateRange.tpl", 'smarty_include_vars' => array('fieldName' => $this->_tpl_vars['fieldName'],'from' => '_from','to' => '_to')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </tr>
                    <?php elseif ($this->_tpl_vars['field']['operatorType'] == 3): ?>
                      <tr class="report-contents crm-report crm-report-criteria-filter crm-report-criteria-filter-<?php echo $this->_tpl_vars['tableName']; ?>
" <?php if ($this->_tpl_vars['field']['no_display']): ?> style="display: none;"<?php endif; ?>>
                        <td class="label report-contents"><?php echo $this->_tpl_vars['field']['title']; ?>
</td>
                        <td class="report-contents"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fieldOp']]['html']; ?>
</td>
                        <td>
                          <span id="<?php echo $this->_tpl_vars['filterVal']; ?>
_cell"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => $this->_tpl_vars['filterVal'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span>
                          <span id="<?php echo $this->_tpl_vars['filterMin']; ?>
_max_cell"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMin']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMin']]['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMax']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMax']]['html']; ?>
</span>
                        </td>
                      </tr>
                    <?php elseif ($this->_tpl_vars['form'][$this->_tpl_vars['fieldOp']]['html']): ?>
                        <tr class="report-contents crm-report crm-report-criteria-filter crm-report-criteria-filter-<?php echo $this->_tpl_vars['tableName']; ?>
" <?php if ($this->_tpl_vars['field']['no_display']): ?> style="display: none;"<?php endif; ?>>
                            <td class="label report-contents"><?php echo $this->_tpl_vars['field']['title']; ?>
</td>
                            <td class="report-contents"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fieldOp']]['html']; ?>
</td>
                            <td>
                               <span id="<?php echo $this->_tpl_vars['filterVal']; ?>
_cell"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterVal']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterVal']]['html']; ?>
</span>
                               <span id="<?php echo $this->_tpl_vars['filterMin']; ?>
_max_cell"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMin']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMin']]['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMax']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMax']]['html']; ?>
</span>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <?php if ($this->_tpl_vars['colGroups'][$this->_tpl_vars['tableName']]['group_title']): ?>
                        </table>
                        </div><!-- /.crm-accordion-body -->
                    </div><!-- /.crm-accordion-wrapper -->
                    <?php $this->assign('closed', 1); ?>                 <?php else: ?>
                     <?php $this->assign('closed', 0); ?>                 <?php endif; ?>

            <?php endforeach; endif; unset($_from); ?>
            <?php if ($this->_tpl_vars['closed'] == 0): ?></table><?php endif; ?>
        </div>
    <?php endif; ?>

    <?php echo '
    <script type="text/javascript">
    '; ?>

        <?php $_from = $this->_tpl_vars['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tableName'] => $this->_tpl_vars['table']):
?>
            <?php $_from = $this->_tpl_vars['table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
    <?php echo 'var val = "dnc";'; ?>

                <?php $this->assign('fieldOp', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_op') : smarty_modifier_cat($_tmp, '_op'))); ?>
                <?php if (! ( $this->_tpl_vars['field']['operatorType'] & 4 ) && ! $this->_tpl_vars['field']['no_display'] && $this->_tpl_vars['form'][$this->_tpl_vars['fieldOp']]['html']): ?>
                    <?php echo 'var val = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fieldOp']; ?>
<?php echo '").value;'; ?>

    <?php endif; ?>
                <?php echo 'showHideMaxMinVal( "'; ?>
<?php echo $this->_tpl_vars['fieldName']; ?>
<?php echo '", val );'; ?>

            <?php endforeach; endif; unset($_from); ?>
        <?php endforeach; endif; unset($_from); ?>

        <?php echo '
        function showHideMaxMinVal( field, val ) {
            var fldVal    = field + "_value_cell";
            var fldMinMax = field + "_min_max_cell";
            if ( val == "bw" || val == "nbw" ) {
                cj(\'#\' + fldVal ).hide();
                cj(\'#\' + fldMinMax ).show();
            } else if (val =="nll" || val == "nnll") {
                cj(\'#\' + fldVal).hide() ;
                cj(\'#\' + field + \'_value\').val(\'\');
                cj(\'#\' + fldMinMax ).hide();
            } else {
                cj(\'#\' + fldVal ).show();
                cj(\'#\' + fldMinMax ).hide();
            }
        }

  function selectGroupByFields(id) {
      var field = \'fields\\[\'+ id+\'\\]\';
      var group = \'group_bys\\[\'+ id+\'\\]\';
      var groups = document.getElementById( group ).checked;
      if ( groups == 1 ) {
          document.getElementById( field ).checked = true;
      } else {
          document.getElementById( field ).checked = false;
      }
  }
    </script>
    '; ?>


    <div><?php echo $this->_tpl_vars['form']['buttons']['html']; ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
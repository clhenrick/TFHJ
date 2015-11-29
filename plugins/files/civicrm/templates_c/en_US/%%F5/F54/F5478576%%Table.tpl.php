<?php /* Smarty version 2.6.27, created on 2015-11-20 18:42:16
         compiled from CRM/Report/Form/Layout/Table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Layout/Table.tpl', 1, false),array('modifier', 'count', 'CRM/Report/Form/Layout/Table.tpl', 68, false),array('modifier', 'cat', 'CRM/Report/Form/Layout/Table.tpl', 100, false),array('modifier', 'crmDate', 'CRM/Report/Form/Layout/Table.tpl', 111, false),array('modifier', 'truncate', 'CRM/Report/Form/Layout/Table.tpl', 116, false),array('modifier', 'crmMoney', 'CRM/Report/Form/Layout/Table.tpl', 123, false),array('function', 'counter', 'CRM/Report/Form/Layout/Table.tpl', 72, false),array('function', 'eval', 'CRM/Report/Form/Layout/Table.tpl', 97, false),array('function', 'cycle', 'CRM/Report/Form/Layout/Table.tpl', 98, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (( ! $this->_tpl_vars['chartEnabled'] || ! $this->_tpl_vars['chartSupported'] ) && $this->_tpl_vars['rows']): ?>
    <?php if ($this->_tpl_vars['pager'] && $this->_tpl_vars['pager']->_response && $this->_tpl_vars['pager']->_response['numPages'] > 1): ?>
        <div class="report-pager">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    <?php endif; ?>
    <table class="report-layout display">
        <?php ob_start(); ?>
            <?php $_from = $this->_tpl_vars['columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['header']):
?>
                <?php $this->assign('class', ""); ?>
                <?php if ($this->_tpl_vars['header']['type'] == 1024 || $this->_tpl_vars['header']['type'] == 1 || $this->_tpl_vars['header']['type'] == 512): ?>
                <?php $this->assign('class', "class='reports-header-right'"); ?>
                <?php else: ?>
                    <?php $this->assign('class', "class='reports-header'"); ?>
                <?php endif; ?>
                <?php if (! $this->_tpl_vars['skip']): ?>
                   <?php if ($this->_tpl_vars['header']['colspan']): ?>
                       <th colspan=<?php echo $this->_tpl_vars['header']['colspan']; ?>
><?php echo $this->_tpl_vars['header']['title']; ?>
</th>
                      <?php $this->assign('skip', true); ?>
                      <?php $this->assign('skipCount', ($this->_tpl_vars['header']['colspan'])); ?>
                      <?php $this->assign('skipMade', 1); ?>
                   <?php else: ?>
                       <th <?php echo $this->_tpl_vars['class']; ?>
><?php echo $this->_tpl_vars['header']['title']; ?>
</th>
                   <?php $this->assign('skip', false); ?>
                   <?php endif; ?>
                <?php else: ?>                    <?php $this->assign('skipMade', ($this->_tpl_vars['skipMade']+1)); ?>
                   <?php if ($this->_tpl_vars['skipMade'] >= $this->_tpl_vars['skipCount']): ?><?php $this->assign('skip', false); ?><?php endif; ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tableHeader', ob_get_contents());ob_end_clean(); ?>

        <?php if (! $this->_tpl_vars['sections']): ?>             <thead class="sticky">
            <tr>
                <?php echo $this->_tpl_vars['tableHeader']; ?>

        </tr>
        </thead>
        <?php endif; ?>

                <?php ob_start(); ?>
            <?php $this->assign('columnCount', count($this->_tpl_vars['columnHeaders'])); ?>
            <?php $this->assign('l', '{'); ?>
            <?php $this->assign('r', '}'); ?>
            <?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['column'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
                <?php echo smarty_function_counter(array('assign' => 'h'), $this);?>

                <?php echo $this->_tpl_vars['l']; ?>
isValueChange value=$row.<?php echo $this->_tpl_vars['column']; ?>
 key="<?php echo $this->_tpl_vars['column']; ?>
" assign=isValueChanged<?php echo $this->_tpl_vars['r']; ?>

                <?php echo $this->_tpl_vars['l']; ?>
if $isValueChanged<?php echo $this->_tpl_vars['r']; ?>


                    <?php echo $this->_tpl_vars['l']; ?>
if $sections.<?php echo $this->_tpl_vars['column']; ?>
.type & 4<?php echo $this->_tpl_vars['r']; ?>

                        <?php echo $this->_tpl_vars['l']; ?>
assign var=printValue value=$row.<?php echo $this->_tpl_vars['column']; ?>
|crmDate<?php echo $this->_tpl_vars['r']; ?>

                    <?php echo $this->_tpl_vars['l']; ?>
elseif $sections.<?php echo $this->_tpl_vars['column']; ?>
.type eq 1024<?php echo $this->_tpl_vars['r']; ?>

                        <?php echo $this->_tpl_vars['l']; ?>
assign var=printValue value=$row.<?php echo $this->_tpl_vars['column']; ?>
|crmMoney<?php echo $this->_tpl_vars['r']; ?>

                    <?php echo $this->_tpl_vars['l']; ?>
else<?php echo $this->_tpl_vars['r']; ?>

                        <?php echo $this->_tpl_vars['l']; ?>
assign var=printValue value=$row.<?php echo $this->_tpl_vars['column']; ?>
<?php echo $this->_tpl_vars['r']; ?>

                    <?php echo $this->_tpl_vars['l']; ?>
/if<?php echo $this->_tpl_vars['r']; ?>


                    <tr class="crm-report-sectionHeader crm-report-sectionHeader-<?php echo $this->_tpl_vars['h']; ?>
<?php if ($this->_tpl_vars['section']['pageBreak']): ?> page-break<?php endif; ?>"><th colspan="<?php echo $this->_tpl_vars['columnCount']; ?>
">
                        <h<?php echo $this->_tpl_vars['h']; ?>
><?php echo $this->_tpl_vars['section']['title']; ?>
: <?php echo $this->_tpl_vars['l']; ?>
$printValue|default:"<em>none</em>"<?php echo $this->_tpl_vars['r']; ?>

                            (<?php echo $this->_tpl_vars['l']; ?>
sectionTotal key=$row.<?php echo $this->_tpl_vars['column']; ?>
 depth=<?php echo ($this->_foreach['sections']['iteration']-1); ?>
<?php echo $this->_tpl_vars['r']; ?>
)
                        </h<?php echo $this->_tpl_vars['h']; ?>
>
                    </th></tr>
                    <?php if (($this->_foreach['sections']['iteration'] == $this->_foreach['sections']['total'])): ?>
                        <tr class="crm-report-sectionCols"><?php echo $this->_tpl_vars['l']; ?>
$tableHeader<?php echo $this->_tpl_vars['r']; ?>
</tr>
                    <?php endif; ?>
                <?php echo $this->_tpl_vars['l']; ?>
/if<?php echo $this->_tpl_vars['r']; ?>

            <?php endforeach; endif; unset($_from); ?>
        <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('sectionHeaderTemplate', ob_get_contents());ob_end_clean(); ?>

        <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rowid'] => $this->_tpl_vars['row']):
?>
           <?php echo smarty_function_eval(array('var' => $this->_tpl_vars['sectionHeaderTemplate']), $this);?>

            <tr  class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
 <?php echo $this->_tpl_vars['row']['class']; ?>
 crm-report" id="crm-report_<?php echo $this->_tpl_vars['rowid']; ?>
">
                <?php $_from = $this->_tpl_vars['columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['header']):
?>
                    <?php $this->assign('fieldLink', ((is_array($_tmp=$this->_tpl_vars['field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_link') : smarty_modifier_cat($_tmp, '_link'))); ?>
                    <?php $this->assign('fieldHover', ((is_array($_tmp=$this->_tpl_vars['field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_hover') : smarty_modifier_cat($_tmp, '_hover'))); ?>
                    <td class="crm-report-<?php echo $this->_tpl_vars['field']; ?>
<?php if ($this->_tpl_vars['header']['type'] == 1024 || $this->_tpl_vars['header']['type'] == 1 || $this->_tpl_vars['header']['type'] == 512): ?> report-contents-right<?php elseif ($this->_tpl_vars['row'][$this->_tpl_vars['field']] == 'Subtotal'): ?> report-label<?php endif; ?>">
                        <?php if ($this->_tpl_vars['row'][$this->_tpl_vars['fieldLink']]): ?>
                            <a title="<?php echo $this->_tpl_vars['row'][$this->_tpl_vars['fieldHover']]; ?>
" href="<?php echo $this->_tpl_vars['row'][$this->_tpl_vars['fieldLink']]; ?>
">
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['row'][$this->_tpl_vars['field']] == 'Subtotal'): ?>
                            <?php echo $this->_tpl_vars['row'][$this->_tpl_vars['field']]; ?>

                        <?php elseif ($this->_tpl_vars['header']['type'] & 4 || $this->_tpl_vars['header']['type'] & 256): ?>
                            <?php if ($this->_tpl_vars['header']['group_by'] == 'MONTH' || $this->_tpl_vars['header']['group_by'] == 'QUARTER'): ?>
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['row'][$this->_tpl_vars['field']])) ? $this->_run_mod_handler('crmDate', true, $_tmp, $this->_tpl_vars['config']->dateformatPartial) : smarty_modifier_crmDate($_tmp, $this->_tpl_vars['config']->dateformatPartial)); ?>

                            <?php elseif ($this->_tpl_vars['header']['group_by'] == 'YEAR'): ?>
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['row'][$this->_tpl_vars['field']])) ? $this->_run_mod_handler('crmDate', true, $_tmp, $this->_tpl_vars['config']->dateformatYear) : smarty_modifier_crmDate($_tmp, $this->_tpl_vars['config']->dateformatYear)); ?>

                            <?php else: ?>
                                <?php if ($this->_tpl_vars['header']['type'] == 4): ?>
                                   <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row'][$this->_tpl_vars['field']])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

                                <?php else: ?>
                                   <?php echo ((is_array($_tmp=$this->_tpl_vars['row'][$this->_tpl_vars['field']])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['header']['type'] == 1024): ?>
                            <?php if ($this->_tpl_vars['currencyColumn']): ?>
                                <span class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['row'][$this->_tpl_vars['field']])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['row'][$this->_tpl_vars['currencyColumn']]) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['row'][$this->_tpl_vars['currencyColumn']])); ?>
</span>
                            <?php else: ?>
                                <span class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['row'][$this->_tpl_vars['field']])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</span>
                           <?php endif; ?>
                        <?php else: ?>
                            <?php echo $this->_tpl_vars['row'][$this->_tpl_vars['field']]; ?>

                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['row'][$this->_tpl_vars['fieldLink']]): ?></a><?php endif; ?>
                    </td>
                <?php endforeach; endif; unset($_from); ?>
            </tr>
        <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['grandStat']): ?>
                        <tr class="total-row">
                <?php $_from = $this->_tpl_vars['columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['header']):
?>
                    <td class="report-label">
                        <?php if ($this->_tpl_vars['header']['type'] == 1024): ?>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['grandStat'][$this->_tpl_vars['field']])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

                        <?php else: ?>
                            <?php echo $this->_tpl_vars['grandStat'][$this->_tpl_vars['field']]; ?>

                        <?php endif; ?>
                    </td>
                <?php endforeach; endif; unset($_from); ?>
            </tr>
                    <?php endif; ?>
    </table>
    <?php if ($this->_tpl_vars['pager'] && $this->_tpl_vars['pager']->_response && $this->_tpl_vars['pager']->_response['numPages'] > 1): ?>
        <div class="report-pager">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php /* Smarty version 2.6.27, created on 2015-11-20 18:46:57
         compiled from CRM/Form/attachment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Form/attachment.tpl', 1, false),array('block', 'ts', 'CRM/Form/attachment.tpl', 29, false),array('modifier', 'cat', 'CRM/Form/attachment.tpl', 81, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['form']['attachFile_1'] || $this->_tpl_vars['currentAttachmentInfo']): ?>
<?php if ($this->_tpl_vars['action'] == 4 && $this->_tpl_vars['currentAttachmentInfo']): ?>     <tr>
        <td class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current Attachment(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
        <td class="view-value">
          <?php $_from = $this->_tpl_vars['currentAttachmentInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attKey'] => $this->_tpl_vars['attVal']):
?>
                <div id="attachStatusMesg" class="status hiddenElement"></div>
                <div id="attachFileRecord_<?php echo $this->_tpl_vars['attVal']['fileID']; ?>
">
                  <strong><a href="<?php echo $this->_tpl_vars['attVal']['url']; ?>
"><?php echo $this->_tpl_vars['attVal']['cleanName']; ?>
</a></strong>
                  <?php if ($this->_tpl_vars['attVal']['description']): ?>&nbsp;-&nbsp;<?php echo $this->_tpl_vars['attVal']['description']; ?>
<?php endif; ?>
                  <?php if (! empty ( $this->_tpl_vars['attVal']['tag'] )): ?>
                    <br />
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['attVal']['tag']; ?>

                    <br />
                  <?php endif; ?>
                </div>
          <?php endforeach; endif; unset($_from); ?>
        </td>
    </tr>
<?php elseif ($this->_tpl_vars['action'] != 4): ?>
    <?php if ($this->_tpl_vars['context'] == 'pcpCampaign'): ?>
      <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Include a Picture or an Image<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('attachTitle', ob_get_contents());ob_end_clean(); ?>
    <?php else: ?>
      <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Attachment(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('attachTitle', ob_get_contents());ob_end_clean(); ?>
    <?php endif; ?>
    <?php if (! $this->_tpl_vars['noexpand']): ?>
    <div class="crm-accordion-wrapper <?php if ($this->_tpl_vars['context'] != 'pcpCampaign' && ! $this->_tpl_vars['currentAttachmentInfo']): ?>collapsed<?php endif; ?>">
       <div class="crm-accordion-header">
          <?php echo $this->_tpl_vars['attachTitle']; ?>

      </div><!-- /.crm-accordion-header -->
     <div class="crm-accordion-body">
     <?php endif; ?>
    <div id="attachments">
      <table class="form-layout-compressed">
      <?php if ($this->_tpl_vars['form']['attachFile_1']): ?>
        <?php if ($this->_tpl_vars['context'] == 'pcpCampaign'): ?>
            <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can upload a picture or image to include on your page. Your file should be in .jpg, .gif, or .png format. Recommended image size is 250 x 250 pixels. Images over 360 pixels wide will be automatically resized to fit.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        <?php endif; ?>
        <tr>
          <td class="label"><?php echo $this->_tpl_vars['form']['attachFile_1']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['attachFile_1']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['attachDesc_1']['html']; ?>
<a href="#" class="crm-hover-button crm-clear-attachment" style="visibility: hidden;" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Clear<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span class="icon ui-icon-close"></span></a>
            <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Browse to the <strong>file</strong> you want to upload.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php if ($this->_tpl_vars['maxAttachments'] > 1): ?> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['maxAttachments'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can have a maximum of %1 attachment(s).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['config']->maxFileSize)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Each file must be less than %1M in size. You can also add a short description.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          </td>
        </tr>
        <?php if ($this->_tpl_vars['form']['tag_1']['html']): ?>
          <tr>
            <td class="label"><?php echo $this->_tpl_vars['form']['tag_1']['label']; ?>
</td>
            <td><div class="crm-select-container crm-attachment-tags"><?php echo $this->_tpl_vars['form']['tag_1']['html']; ?>
</div></td>
          </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['tagsetInfo']['file']): ?>
          <tr><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/Tagset.tpl", 'smarty_include_vars' => array('tagsetType' => 'file','tableLayout' => true,'tagsetElementName' => 'file_taglist_1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></tr>
        <?php endif; ?>
        <?php unset($this->_sections['attachLoop']);
$this->_sections['attachLoop']['name'] = 'attachLoop';
$this->_sections['attachLoop']['start'] = (int)2;
$this->_sections['attachLoop']['loop'] = is_array($_loop=$this->_tpl_vars['numAttachments']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['attachLoop']['show'] = true;
$this->_sections['attachLoop']['max'] = $this->_sections['attachLoop']['loop'];
$this->_sections['attachLoop']['step'] = 1;
if ($this->_sections['attachLoop']['start'] < 0)
    $this->_sections['attachLoop']['start'] = max($this->_sections['attachLoop']['step'] > 0 ? 0 : -1, $this->_sections['attachLoop']['loop'] + $this->_sections['attachLoop']['start']);
else
    $this->_sections['attachLoop']['start'] = min($this->_sections['attachLoop']['start'], $this->_sections['attachLoop']['step'] > 0 ? $this->_sections['attachLoop']['loop'] : $this->_sections['attachLoop']['loop']-1);
if ($this->_sections['attachLoop']['show']) {
    $this->_sections['attachLoop']['total'] = min(ceil(($this->_sections['attachLoop']['step'] > 0 ? $this->_sections['attachLoop']['loop'] - $this->_sections['attachLoop']['start'] : $this->_sections['attachLoop']['start']+1)/abs($this->_sections['attachLoop']['step'])), $this->_sections['attachLoop']['max']);
    if ($this->_sections['attachLoop']['total'] == 0)
        $this->_sections['attachLoop']['show'] = false;
} else
    $this->_sections['attachLoop']['total'] = 0;
if ($this->_sections['attachLoop']['show']):

            for ($this->_sections['attachLoop']['index'] = $this->_sections['attachLoop']['start'], $this->_sections['attachLoop']['iteration'] = 1;
                 $this->_sections['attachLoop']['iteration'] <= $this->_sections['attachLoop']['total'];
                 $this->_sections['attachLoop']['index'] += $this->_sections['attachLoop']['step'], $this->_sections['attachLoop']['iteration']++):
$this->_sections['attachLoop']['rownum'] = $this->_sections['attachLoop']['iteration'];
$this->_sections['attachLoop']['index_prev'] = $this->_sections['attachLoop']['index'] - $this->_sections['attachLoop']['step'];
$this->_sections['attachLoop']['index_next'] = $this->_sections['attachLoop']['index'] + $this->_sections['attachLoop']['step'];
$this->_sections['attachLoop']['first']      = ($this->_sections['attachLoop']['iteration'] == 1);
$this->_sections['attachLoop']['last']       = ($this->_sections['attachLoop']['iteration'] == $this->_sections['attachLoop']['total']);
?>
          <?php $this->assign('index', $this->_sections['attachLoop']['index']); ?>
          <?php $this->assign('attachName', ((is_array($_tmp='attachFile_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['index']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['index']))); ?>
          <?php $this->assign('attachDesc', ((is_array($_tmp='attachDesc_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['index']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['index']))); ?>
          <?php $this->assign('tagElement', ((is_array($_tmp='tag_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['index']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['index']))); ?>
            <tr class="attachment-fieldset solid-border-top"><td colspan="2"></td></tr>
            <tr>
                <td class="label"><?php echo $this->_tpl_vars['form']['attachFile_1']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['attachName']]['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['attachDesc']]['html']; ?>
<a href="#" class="crm-hover-button crm-clear-attachment" style="visibility: hidden;" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Clear<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span class="icon ui-icon-close"></span></a></td>
            </tr>
            <tr>
              <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['tagElement']]['label']; ?>
</td>
              <td><div class="crm-select-container crm-attachment-tags"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['tagElement']]['html']; ?>
</div></td>
            </tr>
            <?php if ($this->_tpl_vars['tagsetInfo']['file']): ?>
              <tr><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/Tagset.tpl", 'smarty_include_vars' => array('tagsetType' => 'file','tableLayout' => true,'tagsetElementName' => "file_taglist_".($this->_tpl_vars['index']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></tr>
            <?php endif; ?>
        <?php endfor; endif; ?>

      <?php endif; ?>
      <?php if ($this->_tpl_vars['currentAttachmentInfo']): ?>
        <tr class="attachment-fieldset solid-border-top"><td colspan="2"></td></tr>
        <tr>
            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current Attachment(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
            <td class="view-value">
          <?php $_from = $this->_tpl_vars['currentAttachmentInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attKey'] => $this->_tpl_vars['attVal']):
?>
                <div class="crm-attachment-wrapper crm-entity" id="file_<?php echo $this->_tpl_vars['attVal']['fileID']; ?>
">
                  <strong><a class="crm-attachment" href="<?php echo $this->_tpl_vars['attVal']['url']; ?>
"><?php echo $this->_tpl_vars['attVal']['cleanName']; ?>
</a></strong>
                  <?php if ($this->_tpl_vars['attVal']['description']): ?>&nbsp;-&nbsp;<?php echo $this->_tpl_vars['attVal']['description']; ?>
<?php endif; ?>
                  <?php if ($this->_tpl_vars['attVal']['deleteURLArgs']): ?>
                   <a href="#" class="crm-hover-button delete-attachment" data-filename="<?php echo $this->_tpl_vars['attVal']['cleanName']; ?>
" data-args="<?php echo $this->_tpl_vars['attVal']['deleteURLArgs']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete File<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span class="icon delete-icon"></span></a>
                  <?php endif; ?>
                  <?php if (! empty ( $this->_tpl_vars['attVal']['tag'] )): ?>
                    <br/>
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['attVal']['tag']; ?>

                    <br/>
                  <?php endif; ?>
                </div>
          <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
        <tr>
            <td class="label">&nbsp;</td>
            <td><?php echo $this->_tpl_vars['form']['is_delete_attachment']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_delete_attachment']['label']; ?>

            </td>
        </tr>
      <?php endif; ?>
      </table>
    </div>
  </div><!-- /.crm-accordion-body -->
  </div><!-- /.crm-accordion-wrapper -->
    <?php echo '
    <script type="text/javascript">
      CRM.$(function($) {
        var $form = $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '");
        $form
          .on(\'click\', \'.crm-clear-attachment\', function(e) {
            e.preventDefault();
            $(this).css(\'visibility\', \'hidden\').closest(\'td\').find(\':input\').val(\'\');
          })
          .on(\'change\', \'#attachments :input\', function() {
            $(this).closest(\'td\').find(\'.crm-clear-attachment\').css(\'visibility\', \'visible\');
          });
      });
    </script>
    '; ?>

 <?php endif; ?> 
<?php if ($this->_tpl_vars['currentAttachmentInfo']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachmentjs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php endif; ?> 
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
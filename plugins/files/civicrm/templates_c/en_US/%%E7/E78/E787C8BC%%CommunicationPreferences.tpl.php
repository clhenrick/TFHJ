<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/Edit/CommunicationPreferences.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/CommunicationPreferences.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Edit/CommunicationPreferences.tpl', 60, false),array('function', 'help', 'CRM/Contact/Form/Edit/CommunicationPreferences.tpl', 37, false),array('modifier', 'crmAddClass', 'CRM/Contact/Form/Edit/CommunicationPreferences.tpl', 58, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-accordion-wrapper crm-commPrefs-accordion collapsed">
 <div class="crm-accordion-header">
    <?php echo $this->_tpl_vars['title']; ?>

  </div><!-- /.crm-accordion-header -->
<div id="commPrefs" class="crm-accordion-body">
    <table class="form-layout-compressed" >
        <?php if (! empty ( $this->_tpl_vars['form']['communication_style_id'] )): ?>
            <tr><td colspan='4'>
                <span class="label"><?php echo $this->_tpl_vars['form']['communication_style_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-communication_style",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
</span>
                <span class="value"><?php echo $this->_tpl_vars['form']['communication_style_id']['html']; ?>
</span>
            </td><tr>
        <?php endif; ?>
        <tr>
            <?php if (! empty ( $this->_tpl_vars['form']['email_greeting_id'] )): ?>
                <td><?php echo $this->_tpl_vars['form']['email_greeting_id']['label']; ?>
</td>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['form']['postal_greeting_id'] )): ?>
                <td><?php echo $this->_tpl_vars['form']['postal_greeting_id']['label']; ?>
</td>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['form']['addressee_id'] )): ?>
                <td><?php echo $this->_tpl_vars['form']['addressee_id']['label']; ?>
</td>
            <?php endif; ?>
      <?php if (! empty ( $this->_tpl_vars['form']['email_greeting_id'] ) || ! empty ( $this->_tpl_vars['form']['postal_greeting_id'] ) || ! empty ( $this->_tpl_vars['form']['addressee_id'] )): ?>
                <td>&nbsp;&nbsp;<?php echo smarty_function_help(array('id' => "id-greeting",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
</td>
      <?php endif; ?>
        </tr>
        <tr>
            <?php if (! empty ( $this->_tpl_vars['form']['email_greeting_id'] )): ?>
                <td>
                    <span id="email_greeting" <?php if (! empty ( $this->_tpl_vars['email_greeting_display'] ) && $this->_tpl_vars['action'] == 2): ?> class="hiddenElement"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email_greeting_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
</span>
                    <?php if (! empty ( $this->_tpl_vars['email_greeting_display'] ) && $this->_tpl_vars['action'] == 2): ?>
                      <div data-id="email_greeting" class="replace-plain" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click to edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                        <?php echo $this->_tpl_vars['email_greeting_display']; ?>

                      </div>
                    <?php endif; ?>
                </td>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['form']['postal_greeting_id'] )): ?>
                <td>
                    <span id="postal_greeting" <?php if (! empty ( $this->_tpl_vars['postal_greeting_display'] ) && $this->_tpl_vars['action'] == 2): ?> class="hiddenElement"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['postal_greeting_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
</span>
                    <?php if (! empty ( $this->_tpl_vars['postal_greeting_display'] ) && $this->_tpl_vars['action'] == 2): ?>
                      <div data-id="postal_greeting" class="replace-plain" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click to edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                        <?php echo $this->_tpl_vars['postal_greeting_display']; ?>

                      </div>
                    <?php endif; ?>
                </td>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['form']['addressee_id'] )): ?>
                <td>
                    <span id="addressee" <?php if (! empty ( $this->_tpl_vars['addressee_display'] ) && $this->_tpl_vars['action'] == 2): ?> class="hiddenElement"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['addressee_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
</span>
                    <?php if (! empty ( $this->_tpl_vars['addressee_display'] ) && $this->_tpl_vars['action'] == 2): ?>
                      <div data-id="addressee" class="replace-plain" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click to edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                        <?php echo $this->_tpl_vars['addressee_display']; ?>

                      </div>
                    <?php endif; ?>
                </td>
            <?php endif; ?>
        </tr>
        <tr id="greetings1" class="hiddenElement">
            <?php if (! empty ( $this->_tpl_vars['form']['email_greeting_custom'] )): ?>
                <td><span id="email_greeting_id_label" class="hiddenElement"><?php echo $this->_tpl_vars['form']['email_greeting_custom']['label']; ?>
</span></td>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['form']['postal_greeting_custom'] )): ?>
                <td><span id="postal_greeting_id_label" class="hiddenElement"><?php echo $this->_tpl_vars['form']['postal_greeting_custom']['label']; ?>
</span></td>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['form']['addressee_custom'] )): ?>
                <td><span id="addressee_id_label" class="hiddenElement"><?php echo $this->_tpl_vars['form']['addressee_custom']['label']; ?>
</span></td>
            <?php endif; ?>
        </tr>
        <tr id="greetings2" class="hiddenElement">
            <?php if (! empty ( $this->_tpl_vars['form']['email_greeting_custom'] )): ?>
                <td><span id="email_greeting_id_html" class="hiddenElement"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email_greeting_custom']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
</span></td>
            <?php endif; ?>
             <?php if (! empty ( $this->_tpl_vars['form']['postal_greeting_custom'] )): ?>
                <td><span id="postal_greeting_id_html" class="hiddenElement"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['postal_greeting_custom']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
</span></td>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['form']['addressee_custom'] )): ?>
                <td><span id="addressee_id_html" class="hiddenElement"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['addressee_custom']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>
</span></td>
            <?php endif; ?>
        </tr>
        <tr>
            <?php $_from = $this->_tpl_vars['commPreference']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <td>
                    <br /><span class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['key']]['label']; ?>
</span> <?php echo smarty_function_help(array('id' => "id-".($this->_tpl_vars['key']),'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

                    <?php $_from = $this->_tpl_vars['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                     <br /><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['key']][$this->_tpl_vars['k']]['html']; ?>

                    <?php endforeach; endif; unset($_from); ?>
                </td>
            <?php endforeach; endif; unset($_from); ?>
                 <td>
                     <br /><span class="label"><?php echo $this->_tpl_vars['form']['preferred_language']['label']; ?>
</span>
                     <br /><?php echo $this->_tpl_vars['form']['preferred_language']['html']; ?>

                </td>
        </tr>
        <tr>
            <td><?php echo $this->_tpl_vars['form']['is_opt_out']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_opt_out']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-optOut",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
</td>
            <?php if (! empty ( $this->_tpl_vars['form']['preferred_mail_format'] )): ?>
                <td><?php echo $this->_tpl_vars['form']['preferred_mail_format']['label']; ?>
 &nbsp;
                    <?php echo $this->_tpl_vars['form']['preferred_mail_format']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-emailFormat",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

                </td>
            <?php endif; ?>
        </tr>
    </table>
 </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/CommunicationPreferences.js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
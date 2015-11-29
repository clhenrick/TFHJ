<?php /* Smarty version 2.6.27, created on 2015-11-20 18:46:57
         compiled from CRM/Event/Form/ManageEvent/ConfirmRepeatMode.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/ManageEvent/ConfirmRepeatMode.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/ManageEvent/ConfirmRepeatMode.tpl', 30, false),array('modifier', 'lower', 'CRM/Event/Form/ManageEvent/ConfirmRepeatMode.tpl', 27, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['hasParent'] || $this->_tpl_vars['isRepeatingEntity'] || $this->_tpl_vars['scheduleReminderId']): ?>
  <?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['recurringEntityType'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('entity_type', ob_get_contents());ob_end_clean(); ?>
  <script type="text/template" id="recurring-dialog-tpl">
    <div class="recurring-dialog">
      <h4><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>How should this change affect others in the series?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4>
      <div>
        <input type="radio" id="recur-only-this-entity" name="recur_mode" value="1">
        <label for="recur-only-this-entity"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['entity_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Only this %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>All others in the series will remain unchanged.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>

        <input type="radio" id="recur-this-and-all-following-entity" name="recur_mode" value="2">
        <label for="recur-this-and-all-following-entity"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['entity_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This %1 onwards<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
        <div class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['entity_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Change applies to this %1 and all that come after it.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>

        <input type="radio" id="recur-all-entity" name="recur_mode" value="3">
        <label for="recur-all-entity"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['entity_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Every %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
        <div class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['entity_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Change applies to every %1 in the series.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      </div>
      <div class="status help"><div class="icon ui-icon-lightbulb"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Changes to date or time will <em>not</em> be applied to others in the series.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    </div>
  </script>
<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      var $form, formClass,
        /** Add your linked entity mapper here **/
        mapper = {
          \'CRM_Event_Form_ManageEvent_EventInfo\': \'\',
          \'CRM_Event_Form_ManageEvent_Location\': \'\',
          \'CRM_Event_Form_ManageEvent_Fee\': \'\',
          \'CRM_Event_Form_ManageEvent_Registration\': \'\',
          \'CRM_Friend_Form_Event\': \'civicrm_tell_friend\',
          \'CRM_PCP_Form_Event\': \'civicrm_pcp_block\',
          \'CRM_Activity_Form_Activity\': \'\'
        };

      function cascadeChangesDialog() {
        CRM.confirm({
          title: "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => $this->_tpl_vars['entity_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Update repeating %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '",
          message: $(\'#recurring-dialog-tpl\').html()
        })
          .on(\'crmConfirm:yes\', updateMode)
          .on(\'click change\', \'input[name=recur_mode]\', function() {
            $(\'button[data-op=yes]\').prop(\'disabled\', false);
          })
          .parent().find(\'button[data-op=yes]\').prop(\'disabled\', true)
      }

      // Intercept form submissions and check if they will impact the recurring entity
      // This ought to attach the handler to the the dialog if we\'re in a popup, or the page wrapper if we\'re not
      $(\'#recurring-dialog-tpl\').closest(\'.crm-container\').on(\'click\', \'.crm-form-submit.validate\', function(e) {
        $form = $(this).closest(\'form\');
        var className = ($form.attr(\'class\') || \'\').match(/CRM_\\S*/);
        formClass = className && className[0];
        if (formClass && mapper.hasOwnProperty(formClass) &&
            // For activities, only show this if the changes were not made to the recurring settings
          (formClass !== \'CRM_Activity_Form_Activity\' || !CRM.utils.initialValueChanged(\'.crm-core-form-recurringentity-block\'))
        ) {
          cascadeChangesDialog();
          e.preventDefault();
        }
      });

      function updateMode() {
        var mode = $(\'input[name=recur_mode]:checked\', this).val(),
          entityID = parseInt(\''; ?>
<?php echo $this->_tpl_vars['entityID']; ?>
<?php echo '\'),
          entityTable = \''; ?>
<?php echo $this->_tpl_vars['entityTable']; ?>
<?php echo '\';
        if (entityID != "" && mode && mapper.hasOwnProperty(formClass) && entityTable !="") {
          $.getJSON(CRM.url("civicrm/ajax/recurringentity/update-mode",
              {mode: mode, entityId: entityID, entityTable: entityTable, linkedEntityTable: mapper[formClass]})
          ).done(function (result) {
              if (result.status != "" && result.status == \'Done\') {
                $form.submit();
              } else if (result.status != "" && result.status == \'Error\') {
                if (confirm("'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => $this->_tpl_vars['entity_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mode could not be updated, save only this %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '")) {
                  $form.submit();
                }
              }
            });
        }
      }
    });
  </script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
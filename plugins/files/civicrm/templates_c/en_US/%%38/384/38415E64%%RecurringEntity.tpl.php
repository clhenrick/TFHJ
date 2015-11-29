<?php /* Smarty version 2.6.27, created on 2015-11-20 18:46:57
         compiled from CRM/Core/Form/RecurringEntity.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Core/Form/RecurringEntity.tpl', 1, false),array('block', 'ts', 'CRM/Core/Form/RecurringEntity.tpl', 29, false),array('function', 'help', 'CRM/Core/Form/RecurringEntity.tpl', 43, false),array('modifier', 'json_encode', 'CRM/Core/Form/RecurringEntity.tpl', 243, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-core-form-recurringentity-block crm-accordion-wrapper<?php if ($this->_tpl_vars['recurringFormIsEmbedded'] && ! $this->_tpl_vars['scheduleReminderId']): ?> collapsed<?php endif; ?>" id="recurring-entity-block">
  <div class="crm-accordion-header">
    <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['recurringEntityType'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Repeat %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
  <div class="crm-accordion-body">
    <?php if (! $this->_tpl_vars['recurringFormIsEmbedded']): ?>
      <div class="crm-submit-buttons">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
    <?php endif; ?>
    <table class="form-layout-compressed">
      <tr class="crm-core-form-recurringentity-block-repetition_start_date" id="tr-repetition_start_date">
        <td class="label"><?php echo $this->_tpl_vars['form']['repetition_start_date']['label']; ?>
</td>
        <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'repetition_start_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      </tr>
      <tr class="crm-core-form-recurringentity-block-repetition_frequency">
        <td class="label"><?php echo $this->_tpl_vars['form']['repetition_frequency_unit']['label']; ?>
&nbsp;<span class="crm-marker">*</span>  <?php echo smarty_function_help(array('id' => "id-repeats",'entityType' => $this->_tpl_vars['recurringEntityType'],'file' => "CRM/Core/Form/RecurringEntity.hlp"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['repetition_frequency_interval']['html']; ?>
 <?php echo $this->_tpl_vars['form']['repetition_frequency_unit']['html']; ?>
</td>
      </tr>
      <tr class="crm-core-form-recurringentity-block-start_action_condition">
        <td class="label">
          <label for="repeats_on"><?php echo $this->_tpl_vars['form']['start_action_condition']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-repeats-on",'entityType' => $this->_tpl_vars['recurringEntityType'],'file' => "CRM/Core/Form/RecurringEntity.hlp"), $this);?>
</label>
        </td>
        <td>
          <?php echo $this->_tpl_vars['form']['start_action_condition']['html']; ?>

        </td>
      </tr>
      <tr class="crm-core-form-recurringentity-block-repeats_by">
        <td class="label"><?php echo $this->_tpl_vars['form']['repeats_by']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-repeats-by-month",'entityType' => $this->_tpl_vars['recurringEntityType'],'file' => "CRM/Core/Form/RecurringEntity.hlp"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['repeats_by']['1']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['limit_to']['html']; ?>

        </td>
      </tr>
      <tr class="crm-core-form-recurringentity-block-repeats_by">
        <td class="label"><?php echo smarty_function_help(array('id' => "id-repeats-by-week",'entityType' => $this->_tpl_vars['recurringEntityType'],'file' => "CRM/Core/Form/RecurringEntity.hlp"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['repeats_by']['2']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['entity_status_1']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['entity_status_2']['html']; ?>

        </td>
      </tr>
      <tr class="crm-core-form-recurringentity-block-ends">
        <td class="label"><?php echo $this->_tpl_vars['form']['ends']['label']; ?>
&nbsp;<span class="crm-marker">*</span> <?php echo smarty_function_help(array('id' => "id-ends-after",'entityType' => $this->_tpl_vars['recurringEntityType'],'file' => "CRM/Core/Form/RecurringEntity.hlp"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['ends']['1']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['start_action_offset']['html']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>occurrences<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      </tr>
      <tr class="crm-core-form-recurringentity-block-absolute_date">
        <td class="label"> <?php echo smarty_function_help(array('id' => "id-ends-on",'entityType' => $this->_tpl_vars['recurringEntityType'],'file' => "CRM/Core/Form/RecurringEntity.hlp"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['ends']['2']['html']; ?>
&nbsp;<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'repeat_absolute_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </td>
      </tr>
      <tr class="crm-core-form-recurringentity-block-exclude_date">
        <td class="label"><?php echo $this->_tpl_vars['form']['exclude_date_list']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-exclude-date",'entityType' => $this->_tpl_vars['recurringEntityType'],'file' => "CRM/Core/Form/RecurringEntity.hlp"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['exclude_date_list']['html']; ?>
</td>
      </tr>
    </table>
    <?php if (! $this->_tpl_vars['recurringFormIsEmbedded']): ?>
      <div class="crm-submit-buttons">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php echo '
<script type="text/javascript">
(function (_) {
  CRM.$(function($) {
    var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\'),
      defaultDate = null;

    // Prevent html5 errors
    $form.attr(\'novalidate\', \'novalidate\');

    function changeFrequencyUnit() {
      switch ($(this).val()) {
        case \'week\':
          //Show "Repeats On" block when week is selected
          $(\'.crm-core-form-recurringentity-block-start_action_condition\', $form).show();
          $(\'.crm-core-form-recurringentity-block-repeats_by td\', $form).hide();
          break;
        case \'month\':
          //Show "Repeats By" block when month is selected
          $(\'.crm-core-form-recurringentity-block-start_action_condition\', $form).hide();
          $(\'.crm-core-form-recurringentity-block-repeats_by td\', $form).show();
          break;
        default:
          $(\'.crm-core-form-recurringentity-block-start_action_condition\', $form).hide();
          $(\'.crm-core-form-recurringentity-block-repeats_by td\', $form).hide();
      }
    }
    $(\'#repetition_frequency_unit\', $form).each(changeFrequencyUnit).change(changeFrequencyUnit);

    function disableUnselected() {
      $(\'input:radio[name=ends], input[name=repeats_by]\', $form).not(\':checked\').siblings(\':input\').prop(\'disabled\', true).removeClass(\'required\');
    }
    disableUnselected();

    $(\'input:radio[name=ends], input[name=repeats_by]\', $form).click(function() {
      $(this).siblings(\':input\').prop(\'disabled\', false).filter(\':visible\').addClass(\'required\').focus();
      disableUnselected();
    });

    $(\'input:radio[name=ends]\').siblings(\'.crm-clear-link\').click(function() {
      $(\'input:radio[name=ends][value=1]\').prop(\'checked\', true).trigger(\'click\');
    });

    function validate() {
      var valid = $(\':input\', \'#recurring-entity-block\').valid(),
        modified = CRM.utils.initialValueChanged(\'#recurring-entity-block\');
      $(\'#allowRepeatConfigToSubmit\', $form).val(valid && modified ? \'1\' : \'0\');
      return valid;
    }

    function getDisplayDate(date) {
      return $.datepicker.formatDate(CRM.config.dateInputFormat, $.datepicker.parseDate(\'yy-mm-dd\', date));
    }

    // Combine select2 and datepicker into a multi-select-date widget
    $(\'#exclude_date_list\', $form).crmSelect2({
      multiple: true,
      data: [],
      initSelection: function(element, callback) {
        var values = [];
        $.each($(element).val().split(\',\'), function(k, v) {
          values.push({
            text: getDisplayDate(v),
            id: v
          });
        });
        callback(values);
      }
    })
      .on(\'select2-opening\', function(e) {
        var $el = $(this),
          $input = $(\'.select2-search-field input\', $el.select2(\'container\'));
        // Prevent select2 from opening and show a datepicker instead
        e.preventDefault();
        if (!$input.data(\'datepicker\')) {
          $input
            .datepicker({
              beforeShow: function() {
                var existingSelections = _.pluck($el.select2(\'data\') || [], \'id\');
                return {
                  changeMonth: true,
                  changeYear: true,
                  defaultDate: defaultDate,
                  beforeShowDay: function(date) {
                    // Don\'t allow the same date to be selected twice
                    var dateStr = $.datepicker.formatDate(\'yy-mm-dd\', date);
                    if (_.includes(existingSelections, dateStr)) {
                      return [false, \'\', \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Already selected<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\'];
                    }
                    return [true, \'\', \'\'];
                  }
                };
              }
            })
            .datepicker(\'show\')
            .on(\'change.crmDate\', function() {
              if ($(this).val()) {
                var date = defaultDate = $(this).datepicker(\'getDate\'),
                data = $el.select2(\'data\') || [];
                data.push({
                  text: $.datepicker.formatDate(CRM.config.dateInputFormat, date),
                  id: $.datepicker.formatDate(\'yy-mm-dd\', date)
                });
                $el.select2(\'data\', data, true);
              }
            })
            .on(\'keyup\', function() {
              $(this).val(\'\').datepicker(\'show\');
            });
        }
      })
      // Don\'t leave datepicker open when clearing selections
      .on(\'select2-removed\', function() {
        $(\'input.hasDatepicker\', $(this).select2(\'container\'))
          .datepicker(\'hide\');
      });


    // Dialog for preview repeat Configuration dates
    function previewDialog() {
      // Set default value for start date on activity forms before generating preview
      if (!$(\'#repetition_start_date\', $form).val() && $(\'#activity_date_time\', $form).val()) {
        $(\'#repetition_start_date\', $form)
          .val($(\'#activity_date_time\', $form).val())
          .next().val($(\'#activity_date_time\', $form).next().val())
          .siblings(\'.hasTimeEntry\').val($(\'#activity_date_time\', $form).siblings(\'.hasTimeEntry\').val());
      }
      var payload = $form.serialize() + \''; ?>
&entity_table=<?php echo $this->_tpl_vars['entityTable']; ?>
&entity_id=<?php echo $this->_tpl_vars['currentEntityId']; ?>
<?php echo '\';
      CRM.confirm({
        width: \'50%\',
        url: CRM.url("civicrm/recurringentity/preview", payload)
      }).on(\'crmConfirm:yes\', function() {
          $form.submit();
        });
    }

    $(\'#_qf_Repeat_submit-top, #_qf_Repeat_submit-bottom\').click(function (e) {
      if (validate()) {
        previewDialog();
      }
      e.preventDefault();
    });

    $(\'#_qf_Activity_upload-top, #_qf_Activity_upload-bottom\').click(function (e) {
      if (CRM.utils.initialValueChanged(\'#recurring-entity-block\')) {
        e.preventDefault();
        if (validate()) {
          previewDialog();
        }
      }
    });

    // Enable/disable form buttons when not embedded in another form
    $form.on(\'change\', function() {
      $(\'#_qf_Repeat_submit-top, #_qf_Repeat_submit-bottom\').prop(\'disabled\', !CRM.utils.initialValueChanged(\'#recurring-entity-block\'));
    });

    // Pluralize frequency options
    var recurringFrequencyOptions = '; ?>
<?php echo json_encode($this->_tpl_vars['recurringFrequencyOptions']); ?>
<?php echo ';
    function pluralizeUnits() {
      CRM.utils.setOptions($(\'[name=repetition_frequency_unit]\', $form),
        $(this).val() === \'1\' ? recurringFrequencyOptions.single : recurringFrequencyOptions.plural);
    }
    $(\'[name=repetition_frequency_interval]\', $form).each(pluralizeUnits).change(pluralizeUnits);

  });
})(CRM._);
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
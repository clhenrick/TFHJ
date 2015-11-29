<?php /* Smarty version 2.6.27, created on 2015-11-20 18:46:56
         compiled from CRM/Activity/Form/Activity.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Activity/Form/Activity.tpl', 1, false),array('block', 'ts', 'CRM/Activity/Form/Activity.tpl', 48, false),array('block', 'edit', 'CRM/Activity/Form/Activity.tpl', 95, false),array('function', 'help', 'CRM/Activity/Form/Activity.tpl', 86, false),array('function', 'crmURL', 'CRM/Activity/Form/Activity.tpl', 289, false),array('modifier', 'crmAddClass', 'CRM/Activity/Form/Activity.tpl', 118, false),array('modifier', 'crmDate', 'CRM/Activity/Form/Activity.tpl', 141, false),array('modifier', 'crmStripAlternatives', 'CRM/Activity/Form/Activity.tpl', 164, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['cdType']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <?php if ($this->_tpl_vars['action'] == 4): ?>
    <div class="crm-block crm-content-block crm-activity-view-block">
  <?php else: ?>
    <?php if ($this->_tpl_vars['activityTypeDescription']): ?>
      <div class="help"><?php echo $this->_tpl_vars['activityTypeDescription']; ?>
</div>
    <?php endif; ?>
    <div class="crm-block crm-form-block crm-activity-form-block">
  <?php endif; ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Activity/Form/ActivityJs.tpl", 'smarty_include_vars' => array('tokenContext' => 'activity')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php if (! $this->_tpl_vars['action'] || ( $this->_tpl_vars['action'] == 1 ) || ( $this->_tpl_vars['action'] == 2 )): ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['action'] == 8): ?>   <table class="form-layout">
  <tr>
    <td colspan="2">
      <div class="status"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to delete <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php if ($this->_tpl_vars['delName']): ?>'<?php echo $this->_tpl_vars['delName']; ?>
'<?php endif; ?>?</div>
    </td>
  </tr>
  <?php elseif ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 4 || $this->_tpl_vars['context'] == 'search' || $this->_tpl_vars['context'] == 'smog'): ?>

  <table class="<?php if ($this->_tpl_vars['action'] == 4): ?>crm-info-panel<?php else: ?>form-layout<?php endif; ?>">

  <?php if ($this->_tpl_vars['action'] == 4): ?>
    <?php if ($this->_tpl_vars['activityTypeDescription']): ?>
    <div class="help"><?php echo $this->_tpl_vars['activityTypeDescription']; ?>
</div>
    <?php endif; ?>
  <?php else: ?>
    <?php if ($this->_tpl_vars['context'] == 'standalone' || $this->_tpl_vars['context'] == 'search' || $this->_tpl_vars['context'] == 'smog'): ?>
    <tr class="crm-activity-form-block-activity_type_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['activity_type_id']['label']; ?>
</td><td class="view-value"><?php echo $this->_tpl_vars['form']['activity_type_id']['html']; ?>
</td>
    </tr>
    <?php endif; ?>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['surveyActivity']): ?>
  <tr class="crm-activity-form-block-survey">
    <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Survey Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td class="view-value"><?php echo $this->_tpl_vars['surveyTitle']; ?>
</td>
  </tr>
  <?php endif; ?>

  <tr class="crm-activity-form-block-source_contact_id">
    <td class="label"><?php echo $this->_tpl_vars['form']['source_contact_id']['label']; ?>
</td>
    <td class="view-value">
      <?php echo $this->_tpl_vars['form']['source_contact_id']['html']; ?>

    </td>
  </tr>

  <tr class="crm-activity-form-block-target_contact_id">
  <td class="label"><?php echo $this->_tpl_vars['form']['target_contact_id']['label']; ?>
</td>
    <td class="view-value">
      <?php echo $this->_tpl_vars['form']['target_contact_id']['html']; ?>

      <?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['single'] == false): ?>
      <div class="crm-is-multi-activity-wrapper">
        <?php echo $this->_tpl_vars['form']['is_multi_activity']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_multi_activity']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_multi_activity"), $this);?>

      </div>
      <?php endif; ?>
    </td>
  </tr>

  <tr class="crm-activity-form-block-assignee_contact_id">
      <td class="label">
        <?php echo $this->_tpl_vars['form']['assignee_contact_id']['label']; ?>

        <?php $this->_tag_stack[] = array('edit', array()); $_block_repeat=true;smarty_block_edit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo smarty_function_help(array('id' => 'assignee_contact_id','title' => $this->_tpl_vars['form']['assignee_contact_id']['label']), $this);?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_edit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </td>
      <td>
        <?php echo $this->_tpl_vars['form']['assignee_contact_id']['html']; ?>

        <?php if ($this->_tpl_vars['action'] != 4): ?>
          <?php if (! $this->_tpl_vars['form']['target_contact_id']['frozen']): ?>
            <a href="#" class="crm-hover-button" id="swap_target_assignee" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Swap Target and Assignee Contacts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" style="position:relative; bottom: 1em;">
              <span class="icon ui-icon-shuffle"></span>
            </a>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['activityAssigneeNotification']): ?>
            <br />
            <span class="description"><span class="icon ui-icon-mail-closed"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>A copy of this activity will be emailed to each Assignee.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          <?php endif; ?>
        <?php endif; ?>
      </td>
  </tr>

  <?php if ($this->_tpl_vars['activityTypeFile']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/".($this->_tpl_vars['crmDir'])."/Form/Activity/".($this->_tpl_vars['activityTypeFile']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>

  <tr class="crm-activity-form-block-subject">
    <td class="label"><?php echo $this->_tpl_vars['form']['subject']['label']; ?>
</td><td class="view-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['subject']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
  </tr>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignTrClass' => "crm-activity-form-block-campaign_id")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['buildEngagementLevel']): ?>
  <tr class="crm-activity-form-block-engagement_level">
    <td class="label"><?php echo $this->_tpl_vars['form']['engagement_level']['label']; ?>
</td>
    <td class="view-value"><?php echo $this->_tpl_vars['form']['engagement_level']['html']; ?>
</td>
  </tr>
  <?php endif; ?>

  <tr class="crm-activity-form-block-location">
    <td class="label"><?php echo $this->_tpl_vars['form']['location']['label']; ?>
</td><td class="view-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['location']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
  </tr>
  <tr class="crm-activity-form-block-activity_date_time">
    <td class="label"><?php echo $this->_tpl_vars['form']['activity_date_time']['label']; ?>
</td>
    <?php if ($this->_tpl_vars['action'] != 4): ?>
      <td class="view-value"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'activity_date_time')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      <?php else: ?>
      <td class="view-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['activity_date_time']['value'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
    <?php endif; ?>
  </tr>
  <tr class="crm-activity-form-block-duration">
    <td class="label"><?php echo $this->_tpl_vars['form']['duration']['label']; ?>
</td>
    <td class="view-value">
      <?php echo $this->_tpl_vars['form']['duration']['html']; ?>

      <?php if ($this->_tpl_vars['action'] != 4): ?><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>minutes<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
    </td>
  </tr>
  <tr class="crm-activity-form-block-status_id">
    <td class="label"><?php echo $this->_tpl_vars['form']['status_id']['label']; ?>
</td><td class="view-value"><?php echo $this->_tpl_vars['form']['status_id']['html']; ?>
</td>
  </tr>
  <tr class="crm-activity-form-block-details">
    <td class="label"><?php echo $this->_tpl_vars['form']['details']['label']; ?>
</td>
    <?php if ($this->_tpl_vars['activityTypeName'] == 'Print PDF Letter'): ?>
      <td class="view-value">
            <?php if ($this->_tpl_vars['defaultWysiwygEditor'] == 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['details']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
<?php else: ?><?php echo $this->_tpl_vars['form']['details']['html']; ?>
<?php endif; ?>
      </td>
      <?php else: ?>
      <td class="view-value">
             <?php if ($this->_tpl_vars['defaultWysiwygEditor'] == 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['form']['details']['html'])) ? $this->_run_mod_handler('crmStripAlternatives', true, $_tmp) : smarty_modifier_crmStripAlternatives($_tmp)))) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['details']['html'])) ? $this->_run_mod_handler('crmStripAlternatives', true, $_tmp) : smarty_modifier_crmStripAlternatives($_tmp)); ?>
<?php endif; ?>
      </td>
    <?php endif; ?>
  </tr>
  <tr class="crm-activity-form-block-priority_id">
    <td class="label"><?php echo $this->_tpl_vars['form']['priority_id']['label']; ?>
</td><td class="view-value"><?php echo $this->_tpl_vars['form']['priority_id']['html']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['surveyActivity']): ?>
  <tr class="crm-activity-form-block-result">
    <td class="label"><?php echo $this->_tpl_vars['form']['result']['label']; ?>
</td><td class="view-value"><?php echo $this->_tpl_vars['form']['result']['html']; ?>
</td>
  </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['form']['tag']['html']): ?>
  <tr class="crm-activity-form-block-tag">
    <td class="label"><?php echo $this->_tpl_vars['form']['tag']['label']; ?>
</td>
    <td class="view-value">
      <div class="crm-select-container"><?php echo $this->_tpl_vars['form']['tag']['html']; ?>
</div>
    </td>
  </tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['tagsetInfo']['activity']): ?>
  <tr class="crm-activity-form-block-tag_set"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/Tagset.tpl", 'smarty_include_vars' => array('tagsetType' => 'activity','tableLayout' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['action'] != 4 || $this->_tpl_vars['viewCustomData']): ?>
  <tr class="crm-activity-form-block-custom_data">
    <td colspan="2">
      <?php if ($this->_tpl_vars['action'] == 4): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Page/CustomDataView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php else: ?>
        <div id="customData"></div>
      <?php endif; ?>
    </td>
  </tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['action'] == 4 && $this->_tpl_vars['currentAttachmentInfo']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  <?php elseif ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2): ?>
    <tr class="crm-activity-form-block-attachment">
      <td colspan="2">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
    </tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 1): ?>
    <tr class="crm-activity-form-block-recurring_activity">
      <td colspan="2">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/Form/RecurringEntity.tpl", 'smarty_include_vars' => array('recurringFormIsEmbedded' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
    </tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['action'] != 4): ?>   <tr class="crm-activity-form-block-schedule_followup">
    <td colspan="2">
      <div class="crm-accordion-wrapper collapsed">
        <div class="crm-accordion-header">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Schedule Follow-up<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div><!-- /.crm-accordion-header -->
        <div class="crm-accordion-body">
          <table class="form-layout-compressed">
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Schedule Follow-up Activity<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
              <td><?php echo $this->_tpl_vars['form']['followup_activity_type_id']['html']; ?>
&nbsp;&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>on<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'followup_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </td>
            </tr>
            <tr>
              <td class="label"><?php echo $this->_tpl_vars['form']['followup_activity_subject']['label']; ?>
</td>
              <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['followup_activity_subject']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
            </tr>
              <tr>
                  <td class="label">
                    <?php echo $this->_tpl_vars['form']['followup_assignee_contact_id']['label']; ?>

                    <?php $this->_tag_stack[] = array('edit', array()); $_block_repeat=true;smarty_block_edit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_edit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                  </td>
                  <td>
                    <?php echo $this->_tpl_vars['form']['followup_assignee_contact_id']['html']; ?>

                  </td>
              </tr>
          </table>
        </div><!-- /.crm-accordion-body -->
      </div><!-- /.crm-accordion-wrapper -->
      <?php echo '
        <script type="text/javascript">
          CRM.$(function($) {
            var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\');
            $(\'.crm-accordion-body\', $form).each( function() {
              //open tab if form rule throws error
              if ( $(this).children( ).find(\'span.crm-error\').text( ).length > 0 ) {
                $(this).parent(\'.collapsed\').crmAccordionToggle();
              }
            });
            function toggleMultiActivityCheckbox() {
              $(\'.crm-is-multi-activity-wrapper\').toggle(!!($(this).val() && $(this).val().indexOf(\',\') > 0));
            }
            $(\'[name=target_contact_id]\', $form).each(toggleMultiActivityCheckbox).change(toggleMultiActivityCheckbox);
            $(\'#swap_target_assignee\').click(function(e) {
              e.preventDefault();
              var assignees = $(\'#assignee_contact_id\', $form).select2("data");
              var targets = $(\'#target_contact_id\', $form).select2("data");
              $(\'#assignee_contact_id\', $form).select2("data", targets);
              $(\'#target_contact_id\', $form).select2("data", assignees).change();
            });
          });
        </script>
      '; ?>

    </td>
  </tr>
  <?php endif; ?>
  <?php endif; ?>   </table>
  <div class="crm-submit-buttons">
  <?php if ($this->_tpl_vars['action'] == 4 && $this->_tpl_vars['activityTName'] != 'Inbound Email'): ?>
    <?php if (! $this->_tpl_vars['context']): ?>
      <?php $this->assign('context', 'activity'); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
      <?php $this->assign('urlParams', "reset=1&atype=".($this->_tpl_vars['atype'])."&action=update&reset=1&id=".($this->_tpl_vars['entityID'])."&cid=".($this->_tpl_vars['contactId'])."&context=".($this->_tpl_vars['context'])); ?>
      <?php if (( $this->_tpl_vars['context'] == 'fulltext' || $this->_tpl_vars['context'] == 'search' ) && $this->_tpl_vars['searchKey']): ?>
        <?php $this->assign('urlParams', "reset=1&atype=".($this->_tpl_vars['atype'])."&action=update&reset=1&id=".($this->_tpl_vars['entityID'])."&cid=".($this->_tpl_vars['contactId'])."&context=".($this->_tpl_vars['context'])."&key=".($this->_tpl_vars['searchKey'])); ?>
      <?php endif; ?>
      <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/activity/add','q' => $this->_tpl_vars['urlParams']), $this);?>
" class="edit button" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span><div class="icon ui-icon-pencil"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
    <?php endif; ?>

    <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete activities' )): ?>
      <?php $this->assign('urlParams', "reset=1&atype=".($this->_tpl_vars['atype'])."&action=delete&reset=1&id=".($this->_tpl_vars['entityID'])."&cid=".($this->_tpl_vars['contactId'])."&context=".($this->_tpl_vars['context'])); ?>
      <?php if (( $this->_tpl_vars['context'] == 'fulltext' || $this->_tpl_vars['context'] == 'search' ) && $this->_tpl_vars['searchKey']): ?>
        <?php $this->assign('urlParams', "reset=1&atype=".($this->_tpl_vars['atype'])."&action=delete&reset=1&id=".($this->_tpl_vars['entityID'])."&cid=".($this->_tpl_vars['contactId'])."&context=".($this->_tpl_vars['context'])."&key=".($this->_tpl_vars['searchKey'])); ?>
      <?php endif; ?>
      <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/activity','q' => $this->_tpl_vars['urlParams']), $this);?>
" class="delete button" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span><div class="icon delete-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
    <?php endif; ?>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['action'] == 4 && call_user_func ( array ( 'CRM_Case_BAO_Case' , 'checkPermission' ) , $this->_tpl_vars['activityId'] , 'File On Case' , $this->_tpl_vars['atype'] )): ?>
    <a href="#" onclick="fileOnCase('file', <?php echo $this->_tpl_vars['activityId']; ?>
, null, this); return false;" class="cancel button" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>File On Case<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span><div class="icon ui-icon-clipboard"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>File on Case<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
  <?php endif; ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Case/Form/ActivityToCase.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['context'] == 'search' || $this->_tpl_vars['context'] == 'smog'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php echo '
    <script type="text/javascript">
    CRM.$(function($) {
    '; ?>

    <?php if ($this->_tpl_vars['customDataSubType']): ?>
      CRM.buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
', <?php echo $this->_tpl_vars['customDataSubType']; ?>
 );
      <?php else: ?>
      CRM.buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
' );
    <?php endif; ?>
    <?php echo '
    });
    </script>
    '; ?>

  <?php endif; ?>
  </div><?php endif; ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/ManageEvent/ConfirmRepeatMode.tpl", 'smarty_include_vars' => array('entityID' => $this->_tpl_vars['activityId'],'entityTable' => 'civicrm_activity')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php /* Smarty version 2.6.27, created on 2015-11-22 10:45:37
         compiled from CRM/Event/Form/ManageEvent/EventInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 70, false),array('function', 'help', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 39, false),array('function', 'crmURL', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 96, false),array('modifier', 'crmAddClass', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 94, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-block crm-form-block crm-event-manage-eventinfo-form-block">
<?php if ($this->_tpl_vars['cdType']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <?php $this->assign('eventID', $this->_tpl_vars['id']); ?>
        <div class="crm-submit-buttons">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
  <table class="form-layout-compressed">
             <?php if ($this->_tpl_vars['form']['template_id']): ?>
      <tr class="crm-event-manage-eventinfo-form-block-template_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['template_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-select-template",'isTemplate' => $this->_tpl_vars['isTemplate']), $this);?>
</td>
            <td><?php echo $this->_tpl_vars['form']['template_id']['html']; ?>
</td>
          </tr>
        <?php endif; ?>
    <?php if ($this->_tpl_vars['form']['template_title']): ?>
      <tr class="crm-event-manage-eventinfo-form-block-template_title">
        <td class="label"><?php echo $this->_tpl_vars['form']['template_title']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-template-title"), $this);?>
<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'template_title','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
        <td><?php echo $this->_tpl_vars['form']['template_title']['html']; ?>
</td>
      </tr>
    <?php endif; ?>
    <tr class="crm-event-manage-eventinfo-form-block-event_type_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['event_type_id']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['event_type_id']['html']; ?>
</td>
    </tr>

                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignTrClass' => "crm-event-manage-eventinfo-form-block-campaign_id")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <tr class="crm-event-manage-eventinfo-form-block-default_role_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['default_role_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-participant-role"), $this);?>
</td>
      <td><?php echo $this->_tpl_vars['form']['default_role_id']['html']; ?>

      </td>
    </tr>
    <tr class="crm-event-manage-eventinfo-form-block-participant_listing_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['participant_listing_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-listing",'isTemplate' => $this->_tpl_vars['isTemplate'],'action' => $this->_tpl_vars['action'],'entityId' => $this->_tpl_vars['entityId']), $this);?>
</td>
      <td><?php echo $this->_tpl_vars['form']['participant_listing_id']['html']; ?>
</td>
    </tr>
    <tr class="crm-event-manage-eventinfo-form-block-title">
      <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'title','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['form']['title']['html']; ?>
<br />
      <span class="description"> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please use only alphanumeric, spaces, hyphens and dashes for event names.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </span></td>
    </tr>
    <tr class="crm-event-manage-eventinfo-form-block-summary">
      <td class="label"><?php echo $this->_tpl_vars['form']['summary']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'summary','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['form']['summary']['html']; ?>
</td>
    </tr>
    <tr class="crm-event-manage-eventinfo-form-block-description">
      <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'description','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
    </tr>
    <?php if (! $this->_tpl_vars['isTemplate']): ?>
      <tr class="crm-event-manage-eventinfo-form-block-start_date">
        <td class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</td>
        <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'start_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      </tr>
      <tr class="crm-event-manage-eventinfo-form-block-end_date">
        <td class="label"><?php echo $this->_tpl_vars['form']['end_date']['label']; ?>
</td>
        <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'end_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
      </tr>
    <?php endif; ?>
    <tr class="crm-event-manage-eventinfo-form-block-max_participants">
      <td class="label"><?php echo $this->_tpl_vars['form']['max_participants']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-max_participants",'waitlist' => $this->_tpl_vars['waitlist']), $this);?>
</td>
      <td>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['max_participants']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'four') : smarty_modifier_crmAddClass($_tmp, 'four')); ?>

        <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'administer CiviCRM' )): ?>
          <a class="crm-popup crm-hover-button" target="_blank" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Participant Status Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/participant_status','q' => 'reset=1'), $this);?>
"><span class="icon ui-icon-wrench"> </span></a>
        <?php endif; ?>
      </td>
    </tr>
    <tr id="id-waitlist" class="crm-event-manage-eventinfo-form-block-has_waitlist">
      <?php if ($this->_tpl_vars['waitlist']): ?>
        <td class="label"><?php echo $this->_tpl_vars['form']['has_waitlist']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['has_waitlist']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-has_waitlist"), $this);?>
</td>
      <?php endif; ?>
    </tr>
    <tr id="id-event_full" class="crm-event-manage-eventinfo-form-block-event_full_text">
      <td class="label"><?php echo $this->_tpl_vars['form']['event_full_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'event_full_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
      <br /><?php echo smarty_function_help(array('id' => "id-event_full_text"), $this);?>
&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><?php echo $this->_tpl_vars['form']['event_full_text']['html']; ?>
</td>
    </tr>
    <tr id="id-waitlist-text" class="crm-event-manage-eventinfo-form-block-waitlist_text">
      <?php if ($this->_tpl_vars['form']['waitlist_text']): ?>
        <td class="label"><?php echo $this->_tpl_vars['form']['waitlist_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'waitlist_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><br /><?php echo smarty_function_help(array('id' => "id-help-waitlist_text"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['waitlist_text']['html']; ?>
</td>
      <?php endif; ?>
    </tr>
    <tr class="crm-event-manage-eventinfo-form-block-is_map">
      <td>&nbsp;</td>
      <td><?php echo $this->_tpl_vars['form']['is_map']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_map']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_map"), $this);?>
</td>
    </tr>
    <tr class="crm-event-manage-eventinfo-form-block-is_public">
      <td>&nbsp;</td>
      <td><?php echo $this->_tpl_vars['form']['is_public']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_public']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_public"), $this);?>
</td>
    </tr>
    <tr class="crm-event-manage-eventinfo-form-block-is_share">
      <td>&nbsp;</td>
      <td><?php echo $this->_tpl_vars['form']['is_share']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_share']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_share"), $this);?>

    </tr>
    <tr class="crm-event-manage-eventinfo-form-block-is_active">
      <td>&nbsp;</td>
      <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
    </tr>

    <?php if ($this->_tpl_vars['eventID']): ?>
    <tr>
      <td>&nbsp;</td>
      <td class="description">
      <?php if ($this->_tpl_vars['config']->userSystem->is_drupal || $this->_tpl_vars['config']->userFramework == 'WordPress'): ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When this Event is active, create links to the Event Information page by copying and pasting the following URL:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
        <strong><?php echo CRM_Utils_System::crmURL(array('a' => 1,'fe' => 1,'p' => 'civicrm/event/info','q' => "reset=1&id=".($this->_tpl_vars['eventID'])), $this);?>
</strong>
      <?php elseif ($this->_tpl_vars['config']->userFramework == 'Joomla'): ?>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['eventID'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When this Event is active, create front-end links to the Event Information page using the Menu Manager. Select <strong>Event Info Page</strong> and enter <strong>%1</strong> for the Event ID.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php endif; ?>
      </td>
    </tr>
    <?php endif; ?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <div id="customData"></div>
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

        <div class="crm-submit-buttons">
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array('elemType' => "table-row")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/validate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
</div>
<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\');
    $(\'#template_id\', $form).change(function() {
      $(this).closest(\'.crm-ajax-container, #crm-main-content-wrapper\')
        .crmSnippet({url: CRM.url(\'civicrm/event/add\', {action: \'add\', reset: 1, template_id: $(this).val()})})
        .crmSnippet(\'refresh\');
    })
  });
</script>
'; ?>


<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<script id="hrjob-pension-template" type="text/template">
<form enctype="multipart/form-data" method="POST">
  <h3>
    {ts}Pension{/ts}
    {literal}<% if (!isNew) { %> {/literal}
    <a class="css_right hrjob-revision-link" data-table-name="civicrm_hrjob_pension" href="#" title="{ts}View Revisions{/ts}">(View Revisions)</a>
    {literal}<% } %>{/literal}
  </h3>

  <div class="crm-summary-row">
    <div class="crm-label">
      <label for="hrjob-is_enrolled">{ts}Is Enrolled{/ts}</label>
    </div>
    <div class="crm-content">
    {literal}
      <%= RenderUtil.select({
        id: 'hrjob-is_enrolled',
        name: 'is_enrolled',
        options: {
          '': '',
          '0': '{/literal}{ts}No{/ts}{literal}',
          '1': '{/literal}{ts}Yes{/ts}{literal}',
          '2': '{/literal}{ts}Opted out{/ts}{literal}'
        }
      }) %>
    {/literal}
    </div>
  </div>
  
  <div class="crm-summary-row">
    <div class="crm-label">
      <label for="hrjob-provider_life_insurance">{ts}Provider{/ts}</label>
    </div>
    <div class="crm-content">
    {literal}
      <%= RenderUtil.select({
        id: 'hrjob-pension_type',
        name: 'pension_type',
        options: _.extend({'':''}, FieldOptions.pension_type)
      }) %>
    {/literal}
    {crmAPI var='result' entity='OptionGroup' action='get' sequential=1 name='hrjob_pension_type'}
    {if call_user_func(array('CRM_Core_Permission','check'), 'administer CiviCRM') }
      <a href="{crmURL p='civicrm/admin/optionValue' q='reset=1&gid='}{$result.id}" target="_blank"><span class="batch-edit"></span></a>
    {/if}
    </div>
  </div>

  <div class="crm-summary-row">
    <div class="crm-label">
      <label for="hrjob-er_contrib_pct">{ts}Employer Contribution (%){/ts}&nbsp;{help id='hrjob-employer' file='CRM/HRJob/Page/helptext'}</label>
    </div>
    <div class="crm-content">
      <input id="hrjob-er_contrib_pct" name="er_contrib_pct" class="form-text-big" type="text" />
    </div>
  </div>

  <div class="crm-summary-row">
    <div class="crm-label">
      <label for="hrjob-ee_contrib_pct">{ts}Employee Contribution (%){/ts}&nbsp;{help id='hrjob-employee' file='CRM/HRJob/Page/helptext'}</label>
    </div>
    <div class="crm-content">
      <input id="hrjob-ee_contrib_pct" name="ee_contrib_pct" class="form-text-big" type="text" />
    </div>
  </div>

  <div class="crm-summary-row">
    <div class="crm-label">
      <label for="hrjob-ee_contrib_abs">{ts}Employee Contribution (absolute amount){/ts}</label>
    </div>
    <div class="crm-content">
      <input id="hrjob-ee_contrib_abs" name="ee_contrib_abs" class="form-text-big" type="text" />
    </div>
  </div>

  <div class="crm-summary-row">
    <div class="crm-label">
      <label for="hrjob-evidence_file">{ts}Evidence File{/ts}</label>
    </div>
    <div class="crm-content">
      <input id="evidence_file" type='file' name='evidence_file'/>
    </div>
  </div>

  <div class="crm-summary-row">
    <div class="crm-label">
      <label for="hrjob-ee_evidence_note">{ts}Evidence Note{/ts}</label>
    </div>
    <div class="crm-content">
      <input id="hrjob-ee_evidence_note" name="ee_evidence_note" class="form-text-big" type="text" />
    </div>
  </div>
  <%= RenderUtil.standardButtons() %>
</form>
</script>

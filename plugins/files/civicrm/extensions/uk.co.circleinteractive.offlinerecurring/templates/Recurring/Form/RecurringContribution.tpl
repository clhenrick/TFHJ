{*
 +--------------------------------------------------------------------+
 | CiviCRM version 3.3                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2010                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*}
<div class="crm-block crm-form-block crm-export-form-block">

<!--<div class="help">
<p>{ts}Use this form to add publications.{/ts}</p>
</div>-->
{if $action eq '1' OR $action eq '2'}

<div class="view-content">
    <div id="help">
        You can setup a recurring payment. You need to enable the 'Process Offline Recurring Payments' job on the <a href="{crmURL p="civicrm/admin/job" q="reset=1"}">Scheduled Jobs</a> page, which will create contributions on the specified intervals for the contact. Please note the 'Next Scheduled Date' is the date, the contribution will be created. Please make sure the background process (cron job) is set to run every day.   
    </div>
</div>

<table class="form-layout">
     <tr>
		<td>
			<table class="form-layout">
			  <tr><td class="label">{$form.processor_id.label}</td><td>
			  {if $no_mandate_for_contact} 
            No Mandate Available for this contact. Please <a href="{crmURL p="civicrm/contact/view/cd/edit" q="tableId=$cid&cid=$cid&groupId=$groupId&action=update&reset=1"}">click here</a> to add one.
        {else}
            {$form.processor_id.html}    
        {/if}    
        </td><tr>
				<tr><td class="label">{$form.amount.label}</td><td>{$form.amount.html}</td><tr>
				<tr><td>&nbsp;</td><td><p><strong>{$form.is_1recur.html} {ts}{$form.frequency_interval.label}{/ts} &nbsp;{$form.frequency_interval.html} &nbsp; {$form.frequency_unit.html}<!--&nbsp; {ts}for{/ts} &nbsp; {$form.installments.html} &nbsp;{$form.installments.label}--></strong></td></tr>
				<tr><td class="label">{$form.start_date.label}</td><td>{include file="CRM/common/jcalendar.tpl" elementName=start_date}</td></tr>
				<tr><td class="label">{$form.next_sched_contribution.label}</td><td>{include file="CRM/common/jcalendar.tpl" elementName=next_sched_contribution}<br />
				<div class="description">{ts}This is the date the contribution record will be created for the recurring payment (by the background process). If you want the first contribution on the start date, this should be same as start date.{/ts}</div>
        </td></tr>
				<tr><td class="label">{$form.end_date.label}</td><td>{include file="CRM/common/jcalendar.tpl" elementName=end_date} <br/>
				<div class="description">{ts}Please specify end date only if you want to end the recurring contribution. Else leave it blank.<br /><b>Please note: No contribution record will be created (by the background process) for the contact, if end date is specified</b>.{/ts}</div>
        </td></tr>
			</table>
		</td>
     </tr>
</table>
<div class="crm-submit-buttons">{include file="CRM/common/formButtons.tpl" location="top"}
&nbsp;&nbsp;&nbsp;<a class="button" href="{crmURL p='civicrm/contact/view' q="cid=$cid&reset=1"}"><span>{ts}Cancel{/ts}</span></a></div>
</div>

{else if $action eq '8'}
    <h3>Package: {$packageName}</h3>
		<div class="crm-participant-form-block-delete messages status">
        <div class="crm-content">
            <div class="icon inform-icon"></div> &nbsp;
            {ts}WARNING: This operation cannot be undone.{/ts} {ts}Do you want to continue?{/ts}
        </div>
    </div>
    {assign var=id value=$id}
    <div class="crm-submit-buttons">
        <a class="button" href="{crmURL p='civicrm/package/add' q="action=force_delete&id=$id&reset=1"}"><span><div class="icon delete-icon"></div>{ts}Delete{/ts}</span></a>        
        <a class="button" href="{crmURL p='civicrm/package' q='reset=1'}"><span>{ts}Cancel{/ts}</span></a>
    </div>    
    </div>
{/if}

{literal}
<script type="text/javascript">
cj(function() {
   cj().crmaccordions(); 
});
</script>
{/literal}
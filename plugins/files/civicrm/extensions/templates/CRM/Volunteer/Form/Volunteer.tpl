{*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
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

{capture assign=volunteerLogURL}{crmURL p="civicrm/volunteer/loghours" q="reset=1&action=add&vid=`$vid`"}{/capture}

<div id="help">
  {if $form.is_active.value}
    <p>
      Volunteer Management is enabled for this event. Note that only users with
      the "register to volunteer" permission will be able to access the
      volunteer sign-up form. Click one of the buttons below to get started.
    </p>
    <p>
      {ts}If you want to disable Volunteer Management for this event, uncheck
      the box below and submit the form. Disabling Volunteer Management for this
      event will not result in loss of volunteer data.{/ts}
      {help id="id-volunteer-init"}
    </p>
  {else}
    <p>
      {ts}If you want to enable Volunteer Management for this event, check
      the box below and submit the form.{/ts}
      {help id="id-volunteer-init"}
    </p>
  {/if}
</div>

{if $form.is_active.value}
<table class="crm-block crm-form-block crm-event-manage-volunteer-form-block">
  <tr>
    <td><a href="#" class="button crm-volunteer-popup" data-vid="{$vid}" data-tab="Define"><span><div class="icon edit-icon"></div>{ts}Define Volunteer Needs{/ts}</span></a></td>
    <td><a href="#" class="button crm-volunteer-popup" data-vid="{$vid}" data-tab="Assign"><span><div class="icon edit-icon"></div>{ts}Assign Volunteers{/ts}</span></a></td>
    <td><a href="{$volunteerLogURL}" class="button"><span><div class="icon edit-icon"></div>{ts}Log Volunteer Hours{/ts}</span></a></td>
  </tr>
</table>
{/if}

<div class="crm-block crm-form-block crm-event-manage-volunteer-form-block">
  <div id="init">
   <table class="form-layout">
       <tr class="crm-event-manage-volunteer-form-block-is_active">
          <td class="label">{$form.is_active.label}</td>
          <td>{$form.is_active.html}
            <span class="description">{ts}Enable or disable volunteer management for this event.{/ts}</span>
          </td>
       </tr>
   </table>
  </div>
  <div class="crm-submit-buttons">
    {include file="CRM/common/formButtons.tpl" location="bottom"}
  </div>
</div>

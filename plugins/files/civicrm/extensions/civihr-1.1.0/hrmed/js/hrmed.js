// Copyright CiviCRM LLC 2013. See http://civicrm.org/licensing
cj(function($) {
  // add helpicon for conitions
  cj('body').on('crmFormLoad', function(event) {
    if (event.profileName == 'hrmed_tab') {
      var accessName = $('[data-crm-custom="Medical_Disability:Condition"]').attr('name');
      if($('div#editrow-' + accessName + ' a.helpicon').length == 0) {
        var helpIcon = $( "<span class ='crm-container'><a class='helpicon' onclick='CRM.help(\"\", {\"id\":\"hrmed-med-condition\",\"file\":\"CRM\/HRMed\/Page\/helptext\"}); return false;' title='Condition Help'></a></span>" );
        $('div#editrow-' + accessName +' div label').append(helpIcon);
      }
    }
  });
});

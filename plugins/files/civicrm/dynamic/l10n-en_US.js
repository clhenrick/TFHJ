 // http://civicrm.org/licensing
// <script> Generated 17 Sep 2014 13:38:15
(function($) {
  // Config settings
  CRM.config.userFramework = "WordPress";
  CRM.config.resourceBase = "\/wp-content\/plugins\/civicrm\/civicrm\/";
  CRM.config.lcMessages = "en_US";

  // Contact create links
  if (CRM.profileCreate !== false) {
    CRM.profileCreate = [{"label":"New Individual","url":"\/wp-admin\/admin.php?page=CiviCRM&q=civicrm\/profile\/create&reset=1&context=dialog&gid=4","type":"Individual"},{"label":"New Organization","url":"\/wp-admin\/admin.php?page=CiviCRM&q=civicrm\/profile\/create&reset=1&context=dialog&gid=5","type":"Organization"},{"label":"New Household","url":"\/wp-admin\/admin.php?page=CiviCRM&q=civicrm\/profile\/create&reset=1&context=dialog&gid=6","type":"Household"}];
  }
  
  // Initialize CRM.url and CRM.formatMoney
  CRM.url('init', '/wp-admin/admin.php?page=CiviCRM&q=civicrm/example&placeholder');
  CRM.formatMoney('init', "$ 1,234.56");

  // Localize select2
  $.fn.select2.defaults.formatNoMatches = "None found.";
  $.fn.select2.defaults.formatLoadMore = "Loading...";
  $.fn.select2.defaults.formatSearching = "Searching...";
  $.fn.select2.defaults.formatInputTooShort = function() {
    return $(this).data('api-entity') == 'contact' ? "Start typing a name or email..." : "Enter search term...";
  };

  // Localize strings for jQuery.validate
  var messages = {
    required: "This field is required.",
    remote: "Please fix this field.",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (YYYY-MM-DD).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: $.validator.format("Please enter no more than {0} characters."),
    minlength: $.validator.format("Please enter at least {0} characters."),
    rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
    range: $.validator.format("Please enter a value between {0} and {1}."),
    max: $.validator.format("Please enter a value less than or equal to {0}."),
    min: $.validator.format("Please enter a value greater than or equal to {0}.")
  };
  $.extend($.validator.messages, messages);
  

  var params = {
    errorClass: 'crm-inline-error',
    messages: {}
  };

  // use civicrm notifications when there are errors
  params.invalidHandler = function(form, validator) {
    if ($('#crm-notification-container').length) {
      $.each(validator.errorList, function(k, error) {
        $(error.element).crmError(error.message);
      });
    } else {
      alert("Please review and correct the highlighted fields before continuing.");
    }
  };

  CRM.validate = {
    _defaults: params,
    params: {},
    functions: []
  };
})(jQuery);


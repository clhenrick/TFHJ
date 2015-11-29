// for contact edit screen
cj(document).ready(function() {
  // Call contactImLink function on page load 
  contactImLink();
});

// for inline edit
cj(document).ajaxSuccess(function(event, xhr, settings) {
  // Call contactImLink function if url has class name CRM_Contact_Page_Inline_IM
  if(settings.url.search('class_name=CRM_Contact_Page_Inline_IM')>0) {
    contactImLink();
  }
});

function contactImLink() {
  // build array for IM and its protocol
  var params = {
    'Yahoo':'ymsgr:sendIM?',
    'Skype':'skype:',
    //'GTalk':'gtalk:chat?jid=', // error message doesn't work in FF/OSX
    'AIM':'aim:goim?screenname=',
    'Jabber':'xmpp:',
    'MSN':'skype:'
  };
  cj("#crm-im-content .crm-summary-row").each(function() {
    if (this) {
      // get providerlabels
      var providerLabel = cj(this).find('.crm-label').text();
      // get IM address
      var imName = cj(this).find('.crm-contact_im').text();
      if(imName) {
        var providerName = providerLabel.substr(0,providerLabel.match(/\s[(]/).index);
        if(params[providerName]) {
          // build links of IM address
          clickableIM = '<a href="'+ params[providerName] +''+ imName +'">'+ imName + '</a>';
          cj(this).find('.crm-contact_im').html(clickableIM);
        }
      }
    }
  });
  cj('.crm-contact_im a').on('click',function() {
    CRM.alert("Having trouble? <a href='https://civicrm.org/go/im-support' target='_blank'>Click here to discuss</a>", 'Experimental: Instant Messaging', 'notice');
  });
}
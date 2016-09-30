# TFHJ : CiviCRM NYC Geoclient BBL Lookup
This CiviCRM extension adds the NYC Geoclient API to look up BBL numbers.


## Installation
* Download and unzip the extension from Github to your extensions directory.  The Github URL is: https://github.com/clhenrick/TFHJ.
If you don't know the location of your extensions directory, you can find it by going to **Administer menu » System Settings » Directories**.  If the "Extensions Directory" lists a token (e.g. "[civicrm.files]"), you can find the absolute path of that token by clicking the blue circle with a question mark in the help text at the top of the page.
* Once the files are in place, you can install them from **Administer menu » System Settings » Extensions**.
If you upgraded CiviCRM from an earlier version, "Extensions" might be "Manage Extensions", and may be under **Administer menu » Customize Data and Screens** instead.
If this extension isn't present in the list, press "Refresh".
* Once installed, navigate to **Administer menu » System Settings »  NYC API Settings**.
* Enter your App ID and API Key and press "Submit".

## API Restrictions:
* Maximum of 2,500 requests per minute;
* Maximum of 500,000 requests per day.

### Compatibility
**This extension requires CiviCRM 4.6 or higher.**. 

# TFHJ : CiviCRM NYC Geoclient Geocoder
This CiviCRM extension adds the NYC Geoclient API as a geocoding option.


## Installation
* Download and unzip the extension from Github to your extensions directory.  The Github URL is: https://github.com/clhenrick/TFHJ.
If you don't know your extensions directory, you can find it by going to **Administer menu » System Settings » Directories**.  If the "Extensions Directory" lists a token (e.g. "[civicrm.files]"), you can find the absolute path of that token by clicking the blue circle with a question mark in the help text at the top of the page.
* Once the files are in place, you can install them from **Administer menu » System Settings » Extensions**.
If you upgraded CiviCRM from an earlier version, "Extensions" might be "Manage Extensions", and may be under **Administer menu » Customize Data and Screens** instead.
If this extension isn't present in the list, press "Refresh".
* Once installed, select it under **Administer menu » System Settings » Mapping and Geocoding** under "Geocoding Provider".
* Also on this screen is the "Geo Provider Key" field.  Fill this in with the API Key you received from the [Geoclient website](https://developer.cityofnewyork.us/api/geoclient-api).

## API Restrictions:
* Maximum of 2,500 requests per minute;
* Maximum of 500,000 requests per day.

### Compatibility
**This extension requires CiviCRM 4.7 or higher.**. CiviCRM 4.6 support is possible by hardcoding the API key.  Find the "getApiKey" function in CRM/Utils/Geocode/NYCGeoclient.php.  Change the line:

    $key = '';

to:

    $key = '<your key here>';

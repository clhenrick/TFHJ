# TFHJ : CiviCRM NYC Geoclient Geocoder
Incorporating the NYC Building Indicators Project data with CiviCRM

This CiviCRM extension adds the NYC Geoclient API as a geocoding option.
Just install the extension by going to "Administer" => "System Settings" => "Manage Extensions",
and activate via "Administer" => "System Settings" => "Mapping and Geocoding".

This will require an api_key and an app_id, available by request at the [Geoclient website](https://developer.cityofnewyork.us/api/geoclient-api)


Note: Expects the custom field to update be called "bbl" with a label "BBL"

## API Restrictions:
* Maximum of 2,500 requests per minute;
* Maximum of 500,000 requests per day.

## Installation
After installation, go to **Administer menu » System Settings » Mapping and Geocoding**.  Set your "Geocoding Provider" to "NYCGeoClient" and "Geo Provider Key" to your API key.

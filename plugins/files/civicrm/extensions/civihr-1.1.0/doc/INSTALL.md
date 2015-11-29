## Pre-requisites

CiviCRM 4.4.0 or higher

> NOTE: CiviHR includes some significant changes to the nomal CiviCRM
> user-experience.  As with any significant change or addition, CiviHR
> should be evaluated on a test/staging site before installing on a
> live/production site.

## Download

```bash
cd </path/to/extension/dir>
#  (ex: $drupalroot/vendor/civicrm or $civiroot/tools/extensions or a custom-configed path)

wget https://github.com/civicrm/civihr/archive/1.1.0.zip
unzip civihr-1.1.0.zip
mv civihr-1.1.0 civihr
```

> NOTE: On some misconfigured systems, the "wget" command may display a warning
> like "ERROR: The certificate of `github.com' is not trusted." For a workaround,
> add the option "--no-check-certificate" or check out [this article](http://blog.55minutes.com/2012/01/fixing-https-certificate-errors-in-wget-and-ruby/).

## Install (Option A: Drush)

If you have Drush installed, then you can enable all the extensions at once:

```bash
cd /var/www/drupal
bash vendor/civicrm/civihr/bin/drush-install.sh --with-sample-data
```

If you're familiar with different ways to call drush, then you can use the same
techniques with drush-install.sh, e.g.

```bash
cd /var/www/drupal/vendor/civicrm/civihr
./bin/drush-install.sh --with-sample-data --root=/var/www/drupal

or

cd /var/www/drupal/sites/example.com
bash /var/www/drupal/vendor/civicrm/civihr/bin/drush-install.sh --with-sample-data
```

Read the drush-install.sh for details.

## Install (Option B: Manual)

CiviHR includes over a dozen extensions. These can be activated piecemeal.
The following extensions provide the major features and may be activated
individually:

 * org.civicrm.hrcareer: Career History
 * org.civicrm.hrdemog: Extended Demographics
 * org.civicrm.hremerg: Emergency Contacts
 * org.civicrm.hrident: Identification
 * org.civicrm.hrjob: Jobs and Roles
 * org.civicrm.hrmed: Medical and Disability
 * org.civicrm.hrqual: Qualifications
 * org.civicrm.hrreport: Reporting
 * org.civicrm.hrstaffdir: Staff Directory
 * org.civicrm.hrvisa: Immigration

Finally, these two extensions build on top of the others:

 * org.civicrm.hrsampledata: Generate random example data
 * org.civicrm.hrui: Trim/revise CiviCRM UI for CiviHR users

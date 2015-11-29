#!/bin/bash

## About: Install the CiviHR extensions using drush
## Usage: install.sh [--with-sample-data] [drush-options]
## Example: ./drush-install.sh --with-sample-data
## Example: ./drush-install.sh --root=/var/www/drupal -l newdomain.ex
## Example: ./drush-install.sh --with-sample-data --root=/var/www/drupal -l newdomain.ex

##################################
## List of extensions defining basic entity types
ENTITY_EXTS=\
org.civicrm.hrbank,\
org.civicrm.hrdemog,\
org.civicrm.hrident,\
org.civicrm.hrjob,\
org.civicrm.hrmed,\
org.civicrm.hrqual,\
org.civicrm.hrvisa,\
org.civicrm.hremerg,\
org.civicrm.hrcareer

## List of extensions defining applications/UIs on top of the basic entity types
APP_EXTS=\
org.civicrm.hrreport,\
org.civicrm.hrui,\
org.civicrm.hrcase,\
org.civicrm.hrstaffdir,\
org.civicrm.hrim,\
org.civicrm.hrprofile

##################################
## Main

if [ "$1" == "--with-sample-data" ]; then
  WITHSAMPLE=1
  shift
else
  WITHSAMPLE=
fi

set -ex
drush "$@" cvapi extension.install keys=$ENTITY_EXTS,$APP_EXTS
set +ex

if [ -n "$WITHSAMPLE" ]; then
  set -ex
  drush "$@" cvapi extension.install keys=org.civicrm.hrsampledata
  set +ex
fi

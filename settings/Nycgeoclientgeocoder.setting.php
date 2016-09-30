<?php

/**
 *
 * package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 * $Id$
 *
 */
/*
 * Settings metadata file.
 */

return array(
  'nycapiAppId' => array(
    'group_name' => 'NYC API',
    'group' => 'nycapi',
    'name' => 'nycapiAppId',
    'type' => 'String',
    'default' => NULL,
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'NYC API App ID',
    'help_text' => 'NYC API App ID',
  ),
  'nycapiKey' => array(
    'group_name' => 'NYC API',
    'group' => 'nycapi',
    'name' => 'nycapiKey',
    'type' => 'String',
    'default' => NULL,
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'NYC API Key',
    'help_text' => 'NYC API Key',
  ),
);

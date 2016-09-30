<?php
// This file declares a managed database record of type "Job".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'Cron:BblLookup.Batchupdate',
    'entity' => 'Job',
    'params' => 
    array (
      'version' => 3,
      'name' => 'Call BblLookup.Batchupdate API',
      'description' => 'Call BblLookup.Batchupdate API',
      'run_frequency' => 'Daily',
      'api_entity' => 'BblLookup',
      'api_action' => 'Batchupdate',
      'parameters' => 'limit=500',
    ),
  ),
);

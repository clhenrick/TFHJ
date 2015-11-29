<?php

/* 
 * CiviCRM Offline Recurring Payment Extension for CiviCRM - Circle Interactive 2013
 * Original author: rajesh
 * http://sourceforge.net/projects/civicrmoffline/
 * Converted to Civi extension by andyw@circle, 07/01/2013 as original code hadn't been updated for a while
 * and was only for Drupal 6.
 *
 * Distributed under the GNU Affero General Public License, version 3
 * http://www.gnu.org/licenses/agpl-3.0.html
 *
 */

function offlinerecurring_civicrm_config(&$config) {

    $template = &CRM_Core_Smarty::singleton();
    $ddRoot   = dirname(__FILE__);
    $ddDir    = $ddRoot . DIRECTORY_SEPARATOR . 'templates';
    
    if (is_array($template->template_dir)) {
        array_unshift($template->template_dir, $ddDir);
    } else {
        $template->template_dir = array($ddDir, $template->template_dir);
    }
    
    // also fix php include path
    $include_path = $ddRoot . PATH_SEPARATOR . get_include_path();
    set_include_path($include_path);
    
}

/*
function civicrm_offline_recurring_payment_perm() {
    return array('access site-wide', 'administer site-wide');
}
*/

function offlinerecurring_civicrm_disable() {
    CRM_Core_DAO::executeQuery("
        DELETE FROM civicrm_job WHERE api_action = 'process_offline_recurring_payments'
    ");

}

function offlinerecurring_civicrm_enable() {

	// Create entry in civicrm_job table for cron call
    $version = _offlinerecurring_getCRMVersion();

    if ($version >= 4.3) {
        // looks like someone finally wrote an api ..
        civicrm_api('job', 'create', array(
            'version'       => 3,
            'name'          => ts('Process Offline Recurring Payments'),
            'description'   => ts('Processes any offline recurring payments that are due'),
            'run_frequency' => 'Daily',
            'api_entity'    => 'job',
            'api_action'    => 'process_offline_recurring_payments',
            'is_active'     => 0
        ));
    } else {
        // otherwise, this ..
        CRM_Core_DAO::executeQuery("
            INSERT INTO civicrm_job (
               id, domain_id, run_frequency, last_run, name, description, 
               api_prefix, api_entity, api_action, parameters, is_active
            ) VALUES (
               NULL, %1, 'Daily', NULL, 'Process Offline Recurring Payments', 
               'Processes any offline recurring payments that are due',
               'civicrm_api3', 'job', 'process_offline_recurring_payments', '', 0
            )
            ", array(
                1 => array(CIVICRM_DOMAIN_ID, 'Integer')
            )
        );
    }

    // We need some way of keeping track of which contribution_recurs were created by us.
    // I'm creating a second table for that for now, maybe not the best way, but we
    // can revisit this later perhaps
    CRM_Core_DAO::executeQuery("
        CREATE TABLE IF NOT EXISTS `civicrm_contribution_recur_offline` (
          `recur_id` int(10) unsigned NOT NULL,
          PRIMARY KEY (`recur_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;       
    ");

}

function offlinerecurring_civicrm_uninstall() {
    CRM_Core_DAO::executeQuery("DROP TABLE civicrm_contribution_recur_offline");   
}

function offlinerecurring_civicrm_xmlMenu(&$files) {
    $files[] = dirname(__FILE__) . "/Recurring/xml/Menu/RecurringPayment.xml";
}

/**
 * Implementation of hook_civicrm_pageRun
 */
function offlinerecurring_civicrm_pageRun(&$page) {

    if ($page->getVar('_name') == 'CRM_Contribute_Page_Tab') {
        
        $contact_id = CRM_Utils_Array::value('cid', $_GET, '');
        
        // modified - andyw@circle, 19/07/2013
        // show only recurring payments generated by the extension
        $query = "
            SELECT * FROM civicrm_contribution_recur ccr 
            INNER JOIN civicrm_contribution_recur_offline ccro ON ccro.recur_id = ccr.id
            WHERE contact_id = %1
        ";

        $dao        = CRM_Core_DAO::executeQuery($query, array(1 => array($contact_id, 'String')));
        $recurArray = array();
        
        while ($dao->fetch()) 
            $recurArray[$dao->id] = array(
                'id'                      => $dao->id,
                'amount'                  => CRM_Utils_Money::format($dao->amount),
                'frequency_unit'          => $dao->frequency_unit,
                'frequency_interval'      => $dao->frequency_interval,
                'start_date'              => $dao->start_date,
                'next_sched_contribution' => $dao->next_sched_contribution
            );
        
        //for contribution tabular View
        $buildTabularView = CRM_Utils_Array::value('showtable', $_GET, false);
        $page->assign('buildTabularView', $buildTabularView);

        if ($buildTabularView)
            return;
        
        //$isAdmin was never defined anywhere in original code, andyw@circle
        //$page->assign('isAdmin', $isAdmin);
        $page->assign('recurArray', $recurArray);
        $page->assign('recurArrayCount', count($recurArray));
    
    }

}

function _offlinerecurring_getCRMVersion() {
    $crmversion = explode('.', ereg_replace('[^0-9\.]','', CRM_Utils_System::version()));
    return floatval($crmversion[0] . '.' . $crmversion[1]);
}

// cron job converted from standalone cron script to job api call, andyw@circle
function civicrm_api3_job_process_offline_recurring_payments($params) {
    
    $config = &CRM_Core_Config::singleton();
    $debug  = false;
                
    $dtCurrentDay      = date("Ymd", mktime(0, 0, 0, date("m") , date("d") , date("Y")));
    $dtCurrentDayStart = $dtCurrentDay."000000"; 
    $dtCurrentDayEnd   = $dtCurrentDay."235959"; 
    
    // Select the recurring payment, where current date is equal to next scheduled date
    $dao = CRM_Core_DAO::executeQuery("
        SELECT * FROM civicrm_contribution_recur ccr
    INNER JOIN civicrm_contribution_recur_offline ccro ON ccro.recur_id = ccr.id
         WHERE (ccr.end_date IS NULL OR ccr.end_date > NOW())
           AND ccr.next_sched_contribution >= %1 
           AND ccr.next_sched_contribution <= %2
    ", array(
          1 => array($dtCurrentDayStart, 'String'),
          2 => array($dtCurrentDayEnd, 'String')
       )
    );
    
    $counter = 0;
    $errors  = 0;
    $output  = array();
    
    while($dao->fetch()) {
                
        $contact_id                 = $dao->contact_id;
        $hash                       = md5(uniqid(rand(), true)); 
        $total_amount               = $dao->amount;
        $contribution_recur_id      = $dao->id;
        $contribution_type_id       = 1;
        $source                     = "Offline Recurring Contribution";
        $receive_date               = date("YmdHis");
        $contribution_status_id     = 2;    // Set to pending, must complete manually
        $payment_instrument_id      = 3;
        
        require_once 'api/api.php';
        $result = civicrm_api('contribution', 'create',
            array(
                'version'                => 3,
                'contact_id'             => $contact_id,
                'receive_date'           => $receive_date,
                'total_amount'           => $total_amount,
                'payment_instrument_id'  => $payment_instrument_id,
                'trxn_id'                => $hash,
                'invoice_id'             => $hash,
                'source'                 => $source,
                'contribution_status_id' => $contribution_status_id,
                'contribution_type_id'   => $contribution_type_id,
                'contribution_recur_id'  => $contribution_recur_id,
                //'contribution_page_id'   => $entity_id
            )
        );
        if ($result['is_error']) {
            $output[] = $result['error_message'];
            ++$errors;
            ++$counter;
            continue;
        } else {
            $contribution = reset($result['values']);
            $contribution_id = $contribution['id'];
            $output[] = ts('Created contribution record for contact id %1', array(1 => $contact_id)); 
        }
    
        //$mem_end_date = $member_dao->end_date;
        $temp_date = strtotime($dao->next_sched_contribution);
        
        $next_collectionDate = strtotime ("+$dao->frequency_interval $dao->frequency_unit", $temp_date);
        $next_collectionDate = date('YmdHis', $next_collectionDate);
        
        CRM_Core_DAO::executeQuery("
            UPDATE civicrm_contribution_recur 
               SET next_sched_contribution = %1 
             WHERE id = %2
        ", array(
               1 => array($next_collectionDate, 'String'),
               2 => array($dao->id, 'Integer')
           )
        );


        $result = civicrm_api('activity', 'create',
            array(
                'version'             => 3,
                'activity_type_id'    => 6,
                'source_contact_id'   => $contact_id,
                'assignee_contact_id' => $contact_id,
                'subject'             => "Offline Recurring Contribution - " . $total_amount,
                'status_id'           => 2,
                'activity_date_time'  => date("YmdHis"),            
            )
        );
        if ($result['is_error']) {
            $output[] = ts(
                'An error occurred while creating activity record for contact id %1: %2',
                array(
                    1 => $contact_id,
                    2 => $result['error_message']
                )
            );
            ++$errors;
        } else {
            $output[] = ts('Created activity record for contact id %1', array(1 => $contact_id)); 

        }
        ++$counter;
    }
    
    // If errors ..
    if ($errors)
        return civicrm_api3_create_error(
            ts("Completed, but with %1 errors. %2 records processed.", 
                array(
                    1 => $errors,
                    2 => $counter
                )
            ) . "<br />" . implode("<br />", $output)
        );
    
    // If no errors and records processed ..
    if ($counter)
        return civicrm_api3_create_success(
            ts(
                '%1 contribution record(s) were processed.', 
                array(
                    1 => $counter
                )
            ) . "<br />" . implode("<br />", $output)
        );
   
    // No records processed
    return civicrm_api3_create_success(ts('No contribution records were processed.'));
    
}   

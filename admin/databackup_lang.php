<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){
	
	die('Hacking Attempt');
	
}

$l['wrong_file'] = 'The file you specified is not safe. The issue will be reported to the Admin.';
$l['<title>'] = 'Database Backup';

$l['cron_backup'] = 'Regular Backup';
$l['immediate_backup'] = 'Immediate Backup';
$l['testbackup'] = 'Start Database Backup';
$l['db_table_col1'] = 'File Name';
$l['db_table_col2'] = 'Source';
$l['sel_type']= 'Backup Type';
$l['page_dbbackup_head'] = ' Database Backup ';
$l['done'] = 'The Database Backup settings has been sucessfully saved';
$l['db_no_avi'] = 'Database backup file was not found ';
$l['title_download'] = 'Download';
$l['note'] = 'Note';
$l['restore_note'] = 'Please do not restore the Database if its for an older version. It will cause Virtualizor to malfunction.';
$l['cron_master_note'] = 'The <b>Regular Database Backup</b> utility is only available for the Master Server database.';
$l['mysql_dump_fail_title'] = 'Database backup error';
$l['mysql_dump_fail'] = 'Database backup failed';
$l['submit'] = 'Submit';
$l['delete_dbbackup_submit'] = 'Disable Database Backup';
$l['no_databasebackups_cron'] = 'The cron value was not specified';
$l['saving_error'] = 'There was some error while saving the configuration';
$l['dbbackup_cron'] = 'Enter Cron value eg: 18 16 * * 3 ';
$l['err_saving'] = 'There was an error saving the backup settings';
$l['backup_email'] = 'Email To';
$l['email_backup'] = 'Email the backup';

?>
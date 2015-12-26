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

$l['err_backup'] = 'There was an error while creating the backup';
$l['err_restore'] = 'There was an error while restoring the VPS';
$l['err_deletevpsbackup'] = 'There was an error while deleting the backup of the VPS';

$l['<title>'] = 'Backup';
$l['page_head'] = 'Backup';
$l['done'] = 'The VPS backup process has been started. Please allow a few minutes for it to complete. You will recieve a notification email when its is completed';
$l['done_restore'] = 'The VPS restore process has been started. Please allow a few minutes for it to complete. You will recieve a notification email when its is completed';
$l['done_deletevpsbackup'] = 'The VPS backup deletion process has been completed. You will have received a notification email';
$l['cbackup'] = 'Create Backup';
$l['restore'] = 'Restore VPS';
$l['conf_cbackup'] = 'Are you sure you want to create backup ?';
$l['conf_restore'] = 'Are you sure you want to restore from the last backup ?';
$l['conf_del_backup'] = 'Are you sure you want to delete the backup ?';
$l['backup_exp'] = 'Here you can create backups of your VPS and also restore from old backups.';
$l['backupnotify'] = 'Backing up the VPS ...';
$l['restorenotify'] = 'Restoring the VPS...';
$l['del_backupnotify'] = "Deleting the VPS...";
$l['del_backup'] = 'Delete Backup';

$l['backup_email_subject'] = 'VPS Backup Completed Successfully';
$l['restore_email_subject'] = 'VPS Restore Completed Successfully';
$l['deletevpsbackup_email_subject'] = 'Deletion of VPS Backup Completed Successfully';

$l['deletevpsbackup_email_body_start'] = 'The deletion process of VPS backup : [';
$l['backup_email_body_start'] = 'The Backup process on your VPS : [ ';
$l['restore_email_body_start'] = 'The Restore process on your VPS : [';

$l['backup_email_body_end'] = ' ] has completed successfully.
You can also view this notification from the Logs Dialog in the VPS Client Panel.

Regards,
{{sn}}';


?>
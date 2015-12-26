<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vpsbackups_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 2.1.9
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Julien
// Date:       26th July 2012
// Time:       15:33 hrs
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

$l['<title>'] = 'VPS Backups';

//Error strings
$l['err_ftp_connect'] = 'ERROR: There was an error connecting to the remote backup server';
$l['err_restore_vps'] = 'There was an error while starting the restore process';
$l['err_del_backup'] = 'There was an error while deleting the backup';
$l['no_vid'] = 'Invalid vpsid specified';
$l['no_date'] = 'Invalid backup date specified';
$l['no_backups'] = 'There are no backups created yet in the current backup directory';
$l['no_backups_date'] = 'There are no backups for this date';
$l['err_process_running'] = 'There is already a restore process in progress';

//Theme strings
$l['vpsbackups'] = 'VPS Backups';
$l['name'] = 'Name';
$l['size'] = 'Size'; 
$l['restore'] = 'Restore';
$l['delete'] = 'Delete';
$l['select'] = 'Select....';
$l['submit'] = 'Sumit';
$l['sel_data'] = 'Select Backup date';
$l['restore_bg'] = 'The restore process has been started and is running in the background.';
$l['delete_bg'] = 'The backup has been deleted successfully';
$l['conf_res'] = 'Are you sure you want to restore this ?';
$l['conf_del'] = 'Are you sure you want to delete this ?';

//Admin email VPS Restore END
$l['admin_vpsrestore_end_sub'] = 'VPS Restore Completed';
$l['admin_vpsrestore_end_body'] = 'Hi,

The VPS restore process has completed.
The following VPS has been successfully restored:-
{{vpsid}}
	  
Regards,
{{sn}}';

//Admin email VPS Restore ERROR
$l['admin_vpsrestore_err_sub'] = 'VPS Restore unsuccessful';
$l['admin_vpsrestore_err_body'] = 'Hi,

The following errors occured during the VPS Restore process. 
{{error_log}}
		
Please refer to the '.V_LOG_DIR.'/virtualizor-restore.log for further info.
	  
Regards,
{{sn}}';


//Restore bg language strings
//Bg script string
$l['log_start'] = 'Starting restore process';
$l['log_createtemp_loc'] = 'Preparing temporary backup locations';
$l['log_connect'] = 'Connecting to the backup server';
$l['log_restore'] = 'Restoring VPS';
$l['log_cleaning'] = 'Cleaning up a bit';
$l['log_endemail'] = 'Send completion notification email';
$l['log_end'] = 'Restore Process completed';
$l['log_download'] = 'Downloading backup archive';
$l['log_abortclean'] = 'Cleaning after aborted restore process';
$l['log_vps_restore_done'] = 'Completed in';	
$l['log_vps_restore_script_done'] = 'Restore process completed in';
$l['log_restore_type'] = 'VPS restore type is ';

$l['log_err_createtemp_loc'] = 'ERROR: Unable to create the temporary backup locations';
$l['log_err_create_backup_folder'] = 'ERROR: Unable to create the backup folders';
$l['log_err_ssh_conn'] = 'ERROR: Unable to connect the server via SSH';
$l['log_err_ssh_send'] = 'ERROR: Unable to transfer backup to the Remote Server';
$l['log_err_ftp_connect'] = 'ERROR: Unable to connect the FTP server';
$l['log_err_create_restore'] = 'ERROR: Unable to restore the VPS';
$l['log_err_download'] = 'ERROR: Unable to download backup archive: Verify vpsid and backup date';
$l['log_err_local_move_backup'] = 'ERROR: Unable to move backup archive from /vz/dump to backup folder';
$l['log_err_cant_proceed'] = 'Restore process cannot proceed due to previous errors';
$l['log_err_end'] = 'Restore Process completed UNSUCCESSFULLY';
$l['log_err_filenotfound'] = 'File could not be found on the backup server';

?>
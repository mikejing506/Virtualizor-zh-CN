<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vpsbackup_settings_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 2.1.9
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Julien
// Date:       25th July 2012
// Time:       15:26 hrs
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

$l['slave_cant'] = 'VPS Backup settings Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to configure VPS Backup settings!';
$l['err_saving'] = 'There was an error saving the backup settings';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['no_backupserver'] = 'No backup server was selected';
$l['no_freq'] = 'The backup frequency was not specified';
$l['no_time'] = 'The backup time was not specified';
$l['no_hourly_freq'] = 'The hourly frequency value was not specified';
$l['no_rotation'] = 'The rotation value was not specified';
$l['no_vps_sel'] = 'No VPS was selected. Atleast one VPS should be selected for backup';
$l['no_nice'] = 'The process priority was not specified';
$l['no_ionice_prio'] = 'The I/O priorty was not specified';
$l['no_ionice_class'] = 'The I/O class was not specified';
$l['err_process_running'] = 'An existing backup process is still running. Quiting';
$l['inv_backup_type'] = 'An invalid backup type was specified';
$l['no_type'] = 'The backup type was not specified';
$l['no_dir'] = 'The backup directory was not specified';
$l['no_logs'] = 'No logs available';
$l['ssh_server_error'] = 'The backup server you have selected is of type <b>&soft-1;</b> while the backup type is <b>&soft-2;</b>';


$l['<title>'] = 'VPS Backups Settings';
$l['vpsbackups'] = 'VPS Backups';
$l['add_backupserver'] = 'Add Backup Server';
$l['sel_backupserver'] = 'Backup Server';
$l['exp_sel_backupserver'] = 'The server on which backups will be saved';
$l['backup_freq'] = 'Backup Frequency';
$l['exp_backup_freq'] = 'How often to run the backup process';
$l['backup_time'] = 'Time';
$l['exp_backup_time'] = 'The time at which the backup process will begin';
$l['backup_day'] = 'Backup Day';
$l['exp_backup_day'] = 'Designated day on which the backup will run';
$l['backup_date'] = 'Backup Date';
$l['exp_backup_date'] = 'Designated day of the month on which the backup will run';
$l['freq_daily'] = 'Daily';
$l['freq_weekly'] = 'Weekly';
$l['freq_monthly'] = 'Monthly';
$l['freq_hourly'] = 'Hourly';
$l['backup_hourly'] = 'Run the backup process every';
$l['exp_backup_hourly'] = 'The hourly backup frequency';
$l['hrs'] = 'Hours';
$l['min'] = 'Minutes';
$l['backup_rotation'] = 'Backup Rotation';
$l['exp_backup_rotation'] = 'The number of backups of per VPS allowed';
$l['backup_enabled'] = 'Enabled';
$l['exp_backup_enabled'] = 'Turn Backups On/Off';
$l['backup_newvps'] = 'Backup New VPS';
$l['exp_backup_newvps'] = 'If checked, newly created VPS will be added to the list of VPS to backup. This is recommended.';
$l['select'] = 'Select....';
$l['done'] = 'The VPS Backup settings has been sucessfully saved';
$l['submit'] = 'Submit';
$l['vpses'] = 'VPS Backup List';
$l['vpses_exp'] = 'Select which VPS are to be backed up.';
$l['nice'] = 'Process Priority';
$l['nice_exp'] = 'CPU time the backup process will get. 19 (least favourable) to -20 (most favourable)';
$l['ionice_class'] = 'Process I/O Class';
$l['ionice_class_exp'] = 'IO class for the backup process';
$l['ionice_prio'] = 'Process I/O Priority';
$l['ionice_prio_exp'] = 'IO priority for the backup process';
$l['backup_compression'] = 'Disable Compression';
$l['exp_backup_compression'] = 'Disable compression for the backups. This will take effect only for KVM and Xen-HVM';
$l['sel_type']= 'Backup Type';
$l['local_dir'] = 'Directory';
$l['exp_local_dir'] = 'The directory where backups will be stored. Incase of local backups, this path has to be <b>mounted</b> previously on the server. <b>For example</b>: "/Your-Dir"';
$l['backup_logs'] = 'VPS Backup Logs';
$l['clear_logs'] = 'Clear logs';
$l['show_log_lines_1'] = 'Show last';
$l['show_log_lines_2'] = 'lines';
$l['log_len_go'] = 'Go';
$l['backup_now_done'] = 'Backup process has been started';
$l['backupnow'] = 'Start Immediate Backup';

//Admin email VPS Backups START
$l['admin_vpsbackups_start_sub'] = 'VPS Backups Started'; 
$l['admin_vpsbackups_start_body'] = 'Hi,

A VPS Backups process has been started. The following VPSs are scheduled for backup:
VPSID : {{vpsids}}
	  
Regards,
{{sn}}';

//Admin email VPS Backups END
$l['admin_vpsbackups_end_sub'] = 'VPS Backups Completed';
$l['admin_vpsbackups_end_body'] = 'Hi,

The VPS Backups process has completed sucessfully.
	  
Regards,
{{sn}}';

//Admin email VPS Backups ERROR
$l['admin_vpsbackups_err_sub'] = 'VPS Backups unsuccessful';
$l['admin_vpsbackups_err_body'] = 'Hi,

There following errors occured during the VPS Backups process.	
{{error_log}}		
		
Please refer to the VPS Backups log or '.V_LOG_DIR.'/virtualizor-backups.log for further information.
		
	
	  
Regards,
{{sn}}';

//Bg script string
$l['log_scanning'] = 'Scanning for an existing backup process';
$l['log_abort'] = 'An earlier backup process is running - aborting it !';
$l['log_abortclean'] = 'Cleaning up after previous process';
$l['log_start'] = 'Starting Backup Process';
$l['log_startemail'] = 'Sending notification email';
$l['log_createtemp_loc'] = 'Preparing temporary backup locations';
$l['log_connect'] = 'Connecting to the backup server';
$l['log_create_backup_folder'] = 'Creating the backup folders';
$l['log_create_backup'] = 'Creating backup of VPS';
$l['log_cleaning'] = 'Cleaning up';
$l['log_endemail'] = 'Send completion notification email';
$l['log_upload'] = 'Uploading to backup server';
$l['log_vps_backup_done'] = 'VPS Backup Completed in';
$l['log_vps_backup_script_done'] = 'Backup process successfully completed in';
$l['log_backup_type'] = 'VPS Backups type is ';

$l['log_err_createtemp_loc'] = 'ERROR: Unable to create the temporary backup locations';
$l['log_err_create_backup_folder'] = 'ERROR: Unable to create the backup folders on FTP server';
$l['log_err_ssh_conn'] = 'ERROR: Unable to connect the server via SSH';
$l['log_err_ssh_send'] = 'ERROR: Unable to transfer backup to the Remote Server';
$l['log_err_ftp_connect'] = 'ERROR: Unable to connect the FTP server';
$l['log_err_create_backup'] = 'ERROR: Unable to backup the VPS';
$l['log_err_upload'] = 'ERROR: Unable to upload to the backup server';
$l['log_err_inf_upload'] = 'ERROR: Unable to upload INF to backup server';
$l['log_err_end'] = 'Backup Process completed UNSUCCESSFULLY';
$l['log_err_cant_proceed'] = 'Backup process cannot proceed due to previous errors';
$l['unsupported_arch'] = 'Only Local bakcups are supported for 32 bit OS architecture';

?>

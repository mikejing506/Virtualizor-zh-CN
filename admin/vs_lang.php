<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vs_lang.php
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

$l['err_destroyvps'] = 'There was some error while destroying the VPS';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['err_slave_delete'] = 'Slave Node cannot delete any VPS. Please delete the VPS from the Master only.';
$l['err_suspendvps'] = 'There was some error while Suspending the VPS';
$l['err_unsuspendvps'] = 'There was some error while trying to Unsuspend the VPS';
$l['err_unsuspendvps_status'] = 'After unsuspension the VPS status check failed';
$l['err_not_allowed'] = 'You do not have permission to access this page';
$l['rescue_del_no_allowed'] = 'You can not delete the VPS in Recsue Mode';

$l['<title>'] = 'Virtual Servers';
$l['page_head'] = 'Virtual Servers';
$l['done'] = 'The VPS has been deleted successfully';
$l['done_sus'] = 'The VPS has been suspended';
$l['done_unsus'] = 'The VPS has been Unsuspended';
$l['no_res'] = 'No results were found for your search query';
$l['no_vs'] =  'There are no Virtual Servers. <a href="'.$globals['index'].'act=addvs">Add a VPS now</a>';
$l['vpsname'] = 'VID';
$l['vpsip'] = 'IP';
$l['vpshostname'] = 'Hostname';
$l['submit'] = 'Search';
$l['lv_cid'] = 'VID';
$l['lv_id'] = 'ID';
$l['lv_type'] = 'Type';
$l['lv_os'] = 'OS';
$l['lv_hostname'] = 'Hostname';
$l['lv_ram'] = 'Ram';
$l['lv_server'] = 'Server';
$l['lv_burst'] = 'Burst';
$l['lv_swap'] = 'Swap';
$l['lv_bandwidth'] = 'Bandwidth';
$l['lv_cpu'] = 'CPU';
$l['lv_ip'] = 'IP';
$l['lv_mb'] = 'MB';
$l['lv_gb'] = 'GB';
$l['unlimited'] = 'Unlimited';
$l['lv_space'] = 'Space';
$l['lv_core'] = 'Core';
$l['lv_cpup'] = 'CPU %';
$l['lv_vnc'] = 'VNC';
$l['lv_nic'] = 'NIC Type';
$l['lv_vif'] = 'VIF Type';
$l['lv_enabled'] = 'Enabled';
$l['lv_disabled'] = 'Disabled';
$l['lv_user'] = 'User';
$l['no_info'] = 'No info';
$l['band_reset'] = 'Reset';
$l['conf_bwreset'] = 'Are you sure you want to reset the bandwidth ?';
$l['done_bwreset'] = 'The Bandwidth was reset successfully';

$l['conf_del0'] = 'This action will delete this VPS having ID : ';
$l['conf_del'] = 'Are you sure you want to delete this VPS ? No further confirmations will be asked';

$l['conf_sus'] = 'Are you sure you want to suspend this VPS ?';
$l['conf_unsus'] = 'Are you sure you want to unsuspend this VPS ?';
$l['conf_susnetwork'] = 'Are you sure you want to Suspend Network of this VPS ?';
$l['conf_unsusnetwork'] = 'Are you sure you want to Unsuspend Network of this VPS ?';
$l['suspend_vs'] = 'Suspend VPS';
$l['unsuspend_vs'] = 'Unsuspend VPS';
$l['suspend_ntw'] = 'Suspend VPS Network';
$l['unsuspend_ntw'] = 'Unsuspend VPS Network';
$l['add_vs'] = 'Add Virtual Server';
$l['add_vs_xenhvm'] = 'Add Xen HVM Virtual Server';
$l['total_ip'] = 'Total';
$l['svs_adm_login_title'] = 'Enter VPS Panel';
$l['vps_id_stat_off'] = 'Offline';
$l['vps_id_stat_on'] = 'Online';
$l['vps_id_stat_suspend'] = 'Suspended VPS';
$l['manage_vps'] = 'Manage VPS';

$l['vpmenu_start'] = 'Start VPS';
$l['vpmenu_stop'] = 'Stop VPS';
$l['vpmenu_poweroff'] = 'PowerOFF VPS';
$l['vpmenu_restart'] = 'Restart VPS';
$l['vpmenu_destroy'] = 'Destroy VPS';

$l['startvps'] = 'Start VPS';
$l['stopvps'] = 'Stop VPS';
$l['started'] = 'VPS has been started successfully';
$l['stopped'] = 'VPS has been stopped successfully';
$l['poweroff'] = 'VPS has been powered off successfully';
$l['start_failed'] = 'The VPS failed to start';
$l['stop_sent'] = 'Shutdown signal has been sent to the VPS';
$l['restart'] = 'Restart signal has been sent to the VPS';
$l['vpsloading'] = 'Loading';

$l['vsstatus'] = 'Status';
$l['status_suspended'] = 'Suspended';
$l['status_unsuspended'] = 'Unsuspended';
$l['status_ntwsuspended'] = 'Network Suspended';
$l['status_ntwunsuspended'] = 'Network Unsuspended';
$l['status_none'] = 'All';
$l['vstype'] = 'Type';
$l['vsxen'] = 'Xen';
$l['vsxenhvm'] = 'Xen HVM';
$l['vsxcp'] = 'XCP';
$l['vsxcphvm'] = 'XCP HVM';
$l['vsopenvz'] = 'OpenVZ';
$l['vskvm'] = 'KVM';
$l['vserid'] = 'Server';
$l['vpsid'] = 'ID';

//Progress Updates
$l['prog_begin'] = 'Beginning VPS destroy...';
$l['prog_destroy'] = 'Destroying the VPS...';
$l['pbar_notice'] = 'Note: This process may take a while.';
$l['pbar_tip'] = 'Navigating away from this page, will not affect this process.';

// Rescue Tooltip
$l['rescue_tip'] = 'The VPS is in <b>Rescue Mode</b>. Please disable Rescue Mode from <b>Enduser panel</b> before performing any operation.';

// Creation Date
$l['last_edited'] = 'Last Edited';
$l['creation_date'] = 'Creation Date';

// Cloud
$l['is_cloud_user'] = 'Cloud User';

// VNC in listvs
$l['vpmenu_novnc'] = 'Launch noVNC viewer';
$l['vpmenu_javavnc'] = 'Launch Java VNC viewer';

$l['multi_delete'] = 'Removing VPS having ID - ';
$l['multi_suspend'] = 'Suspending VPS having ID - ';
$l['multi_unsuspend'] = 'Unsuspending VPS having ID - ';
$l['multi_suspend_net'] = 'Suspending Network VPS having ID - ';
$l['multi_unsuspend_net'] = 'Unsuspending Network VPS having ID - ';
$l['no_sel_vps'] = 'No VPS(s) selected for action ';
$l['cnf_action'] = 'Are you sure you wish to ';// Trailing space is required
$l['cnf_action_1'] = ' the selected VPS(s) ? ';

$l['multi_start'] = 'Starting VPS having ID - ';
$l['multi_stop'] = 'Sending Shutdown signal to VPS having ID - ';
$l['multi_poweroff'] = 'Powering Off VPS having ID - ';
$l['multi_restart'] = 'Restaring VPS having ID - ';
$l['ms_start'] = 'Start';
$l['ms_stop'] = 'Stop';
$l['ms_restart'] = 'Restart';
$l['ms_suspend'] = 'Suspend';
$l['ms_unsuspend'] = 'Unsuspend';
$l['ms_suspend_net'] = 'Suspend Network';
$l['ms_unsuspend_net'] = 'Unsuspend Network';
$l['ms_poweroff'] = 'Power Off';
$l['alert_suspend'] = 'VPS Suspended';
$l['alert_unsuspend'] = 'VPS Unsuspended';
$l['alert_suspend_net'] = 'Network Suspended';
$l['alert_unsuspend_net'] = 'Network Unsuspended';
?>
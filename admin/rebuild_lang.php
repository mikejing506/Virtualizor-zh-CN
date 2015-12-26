<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addvs_lang.php
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

$l['slave_cant'] = 'Add Virtual Server Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to rebuild Virtual Server !';
$l['no_os'] = 'Please choose a OS for the VPS';
$l['no_id'] = 'Please choose a VPS';
$l['no_match'] = 'The password you entered does not match';
$l['no_new'] = 'You did not specify the new password.';
$l['no_conf'] = 'The confirmation password is missing.';
$l['error_reins'] = 'There was an error while reinstalling the OS';
$l['invalid_os'] = 'The OS you submitted is invalid';
$l['invalid_vpsid'] = 'The VPS ID you submitted is invalid';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['err_start'] = 'There was an error while starting the new VPS';
$l['err_changing'] = 'There was an error in setting the Root Password of the VPS';

// Theme strings
$l['<title>'] = 'Rebuild Virtual Server';
$l['add_vs'] = 'Rebuild Virtual Server';
$l['done'] = 'The Virtual Server has been created. Return to <a href="'.$globals['index'].'act=vs">Virtual Server Overview</a>';
$l['newvs_vpsid'] = 'VPS ID';
$l['newvs_vps_name'] = 'VPS Name';
$l['vs_server'] = 'Server';
$l['exp_server'] = 'Change the current server to change the server';
$l['vs_ser_id'] = 'ID';
$l['user_pass'] = 'Password';
$l['vps'] = 'VPS ID';
$l['vps_id'] = 'Select VPS';
$l['select_os'] = 'Select OS';
$l['new_pass'] = 'New Password';
$l['retype_pass'] = 'Retype Password';
$l['randpass'] = 'Make another Random Password';
$l['none'] = 'None';
$l['reinstall'] = 'Reinstall';
$l['vs_user_exp'] = 'Select an existing VPS ID';
$l['vsos'] = 'Operating System';
$l['vsos_exp'] = 'Select the Operating System for the VPS';
$l['notification'] = 'Rebuilding the VPS will result in loss of all data on that VPS. Are you sure you wish to continue ?';
$l['newvs_rootpass'] = 'Root Password';
$l['vnc_details'] = 'VNC Details';
$l['vnc_pass'] = 'VNC Password';
$l['newvs_ips'] = 'VPS IPs';
$l['newvs_ips6'] = 'VPS IPV6';
$l['newvs_ips6_subnet'] = 'VPS IPv6 Subnet(s)';
$l['rescue_edit_no_allowed'] = 'Rebuild operation is not allowed while the VPS is in Rescue Mode';
$l['in_queue'] = 'Waiting for other processes to finish';

//Progress Updates
$l['prog_update1'] = 'Beginning VPS rebuild...';
$l['prog_update2'] = 'Updating the database...';
$l['prog_update3'] = 'Reinstalling the OS...';
$l['prog_update4'] = 'Setting the root password...';
$l['prog_update5'] = 'Starting the VPS...';
$l['prog_update6'] = 'Performing final steps...';
$l['pbar_notice'] = 'Note: This process may take a while.';
$l['pbar_tip'] = 'Navigating away from this page, will not affect this process.';

$l['mac_temp_vncdetails'] = 'MAC Address :';
$l['mail_temp_vnctitle'] = 'The VNC details are :';
$l['mail_temp_vncdetails'] = 'VNC Details :';
$l['mail_temp_vncpasswd'] = 'VNC Password :';
$l['mail_temp_vncusername'] = 'VNC Username :';
$l['strength_indicator'] = 'Strength Indicator';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';
$l['pass_match'] = 'Passwords do not match';
$l['copy_pass'] = 'Please copy the password to a safe place';

?>
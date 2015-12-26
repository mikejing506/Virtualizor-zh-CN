<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addserver_lang.php
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

$l['cant_migrate'] = 'Migration Error';
$l['cant_migrate_exp'] = 'Slave servers are not allowed to Migrate VPS. Please do it from the Master';
$l['cant_migrate_openvz'] = 'Migration is not available for OpenVZ';
$l['no_ip'] = 'The IP Address was not specified!';
$l['no_pass'] = 'The Password Key Address was not specified!';
$l['details_err'] = 'Could not connect to the server. Please make sure the IP and Server Password are correct';
$l['no_vps'] = 'NO VPS were found on the server from where you want to migrate a VPS !';
$l['same_server'] = 'The From and To servers cannot be the same !';
$l['no_vpsid'] = 'The submitted VPS is invalid';
$l['err_saving_users'] = 'There was an error while saving the Users Details of the slave';
$l['err_saving_vps'] = 'There was an error while saving the VPS details of the slave';
$l['err_saving_ippool'] = 'There was an error while saving the IP Pools of the slave';
$l['err_saving_ips'] = 'There was an error while saving the IPs of the slave';
$l['err_save_slave'] = 'There was an error in saving the Data on the Slave';
$l['wrong_virt'] = 'The servers must run the same Virtualization technology. e.g. a KVM VPS can be migrated to another KVM node only';
$l['wrong_vpsid'] = 'Can not fetch the progress data. Wrong VPSID posted.';
$l['inv_from_server'] = 'The <b>From Server</b> is invalid.';
$l['inv_to_server'] = 'The <b>To Server</b> is invalid.';
$l['valid_mip'] = 'Please select the valid IP Address';
$l['migrate_ram_error'] = 'Destination Server does not have enough RAM';
$l['not_supported'] = 'This feature is not supported in XenServer';
$l['ip_cant_preserver'] = 'The IP {{ip}} is not shared between the destination server and so the IP can not be preserved';
$l['less_space'] = 'The storage on the destination server does not have enough space.';
$l['type_missmatch'] = 'The Storage type chosen does not match with the destination storage';
$l['no_storage_on_dest'] = 'The Storage chosen does not exist on the destination server';
$l['no_storage'] = 'Please chose the storage for migration';
$l['storage_missmatch'] = 'The Storage type of the Primary storage on the destination server does not match with the VPS Storage type';



// Theme strings
$l['<title>'] = 'Migrate Virtual Server';
$l['from_server'] = 'From Server';
$l['from_server_exp'] = 'The server <b>FROM</b> which the VPS is to be migrated';
$l['enter_keys'] = 'Enter Server Details';
$l['from_ip'] = 'IP Address';
$l['from_ip_exp'] = 'The primary address of the server';
$l['from_pass'] = 'Server Password';
$l['from_pass_exp'] = 'The password for controlling the server';
$l['getvpslist'] = 'Get VPS List';
$l['to_server'] = 'To Server';
$l['to_server_exp'] = 'The server <b>TO</b> which the VPS is to be migrated';
$l['vps_to_migrate'] = 'VPS to Migrate';
$l['vps_to_migrate_exp'] = 'Select the VPS you wish to migrate to the new server.';
$l['select_vps'] = 'Select VPS';
$l['sub_but'] = 'Migrate VPS';
$l['mnote1'] = 'It is recommended that you save the VPS data before starting the migration process as Virtualizor will <b>power off</b> the VPS to do the transfer.';
$l['mnote2'] = 'Migration process may take some time depending on the VPS size and transfer rate.';
$l['mnote3'] = 'You can navigate away from this page and check the status on the <b><a href="'.$globals['index'].'act=tasks">Tasks page</a></b>.';
$l['m_complete'] = 'Migration completed.';
$l['m_percent'] = 'Percent';
$l['m_speed'] = 'Avg. Speed';
$l['m_ip'] = 'IP Address';
$l['m_ip_opt'] = 'Select the IPs';
$l['m_ip_exp'] = 'You can choose from the IP List';
$l['m_del_orig'] = 'Delete the Source VPS';
$l['m_del_orig_exp'] = 'Set this option to delete the source VM after sucessfull Migration';
$l['preserve_ip'] = 'Preserve the same IP Address(s)';
$l['preserve_ip_exp'] = 'Set this option to use same IP Address(s) on the migrated VPS. The IP must belong to a common IP Pool between the source and destination servers';
$l['select_server'] = 'Select Server';
$l['select_storage'] = 'Select Storage';
$l['type_missmatch'] = 'The Storage Types do not match';
$l['select_storage_exp'] = 'Select the Storage for the respective disk on the destination server.';


?>
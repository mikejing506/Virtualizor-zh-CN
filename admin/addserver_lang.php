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

$l['cant_add'] = 'Add Server Error';
$l['cant_add_exp'] = 'Slave servers are not allowed to add servers !';
$l['cant_add_head'] = 'Error';
$l['no_name'] = 'The Server Name was not specified!';
$l['no_ip'] = 'The IP Address was not specified!';
$l['no_pass'] = 'The Password Key Address was not specified!';
$l['ips_exist'] = 'The following IP(s) already exist on the Master';
$l['details_err'] = 'Could not connect to the server. Please make sure the IP and Server Password are correct';
$l['err_saving'] = 'There was an error while saving the details';
$l['err_slaving'] = 'There was an error while saving the details on the slave server';
$l['err_saving_users'] = 'There was an error while saving the Users Details of the slave';
$l['err_saving_vps'] = 'There was an error while saving the VPS details of the slave';
$l['err_saving_ippool'] = 'There was an error while saving the IP Pools of the slave';
$l['err_saving_ips'] = 'There was an error while saving the IPs of the slave';
$l['err_save_slave'] = 'There was an error in saving the Data on the Slave';
$l['self_slave'] = 'The server you are trying to add is a Master Server and hence cannot be added';
$l['wrong_internal_ip'] = 'The Internal IP you submitted is invalid';
$l['wrong_ip'] = 'The IP you submitted is invalid';

// Theme strings
$l['<title>'] = 'Add Server';
$l['add_server'] = 'Add Server';
$l['added'] = 'The slave has been added. Return to <a href="'.$globals['index'].'act=servers">Servers Overview</a>';
$l['server_name'] = 'Server Name';
$l['server_name_exp'] = 'The name of the server';
$l['server_ip'] = 'IP Address';
$l['server_ip_exp'] = 'The primary address of the server';
$l['server_pass'] = 'Server API Password';
$l['server_pass_exp'] = 'The API password for controlling the server. See guide on <a href="http://virtualizor.com/wiki/Add_Server" target="_blank">Adding a server</a>';
$l['sub_but'] = 'Add Server';
$l['server_group'] = 'Server Group';
$l['server_group_exp'] = 'The Server group that this server belongs to';
$l['server_lock'] = 'Lock Server';
$l['server_lock_exp'] = 'If Locked, no new VPS will be created on this server';
$l['internal_ip'] = 'Internal IP';
$l['internal_ip_exp'] = 'Set internal IP for cloud server(s). (Optional)';
$l['ver_missmatch'] = 'Virtualizor version on both the server do not match';


?>
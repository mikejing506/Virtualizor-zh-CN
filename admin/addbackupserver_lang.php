<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackupserver_lang.php
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

$l['slave_cant'] = 'Add Backup Server Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to add backup servers!';
$l['no_name'] = 'Please specify a unique name for the FTP server';
$l['no_hostname'] = 'Please specify the hostname';
$l['no_type'] = 'Please specify the Type';
$l['no_username'] = 'Please specify the username';
$l['no_password'] = 'Please specify the password';
$l['no_port'] = 'Please specify the port';
$l['no_dir'] = 'Please specify the upload directory';
$l['nameexist'] = 'This name already exists';
$l['err_add_backupserver'] = 'There was an error while adding the backup server';
$l['nameexist'] = 'A backup server of this name already exists';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['extension_not_found'] = 'SSH extension not loaded properly. Please restart the Virtualizor service with the following command : <b>service virtualizor restart</b>';
$l['not_available'] = 'This feature is currently not available in XenServer';

//Theme Settings
$l['<title>'] = 'Add Backup Server';
$l['add_backupserver'] = 'Add Backup Server';
$l['done'] = 'The Backup Server has been saved. Return to <a href="'.$globals['index'].'act=backupservers">Backup Servers Overview</a>';
$l['name'] = 'Name';
$l['exp_name'] = 'Unique name for the Backup Server';
$l['hostname'] = 'Hostname';
$l['exp_hostname'] = 'Valid TLD or IP Address of the server';
$l['type'] = 'Type';
$l['username'] = 'Username';
$l['password'] = 'Password';
$l['port'] = 'Port';
$l['dir'] = 'Directory';
$l['exp_dir']= 'The directory on the server to upload';
$l['submit'] = 'Submit';


?>

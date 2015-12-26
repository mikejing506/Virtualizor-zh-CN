<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backupservers_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Julien
// Date:       19th July 2012
// Time:       13:40 hrs
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

$l['<title>'] = 'Backup Servers';
$l['plans_tit'] = 'Backup Servers';
$l['saved'] = 'The Backup Server was deleted successfully';
$l['no_backupservers'] = 'There are no Backup Servers. <a href="'.$globals['index'].'act=addbackupserver">Add a Backup Server now</a>';
$l['no_res'] = 'No results were found for your search query';
$l['del_conf'] = 'Are you sure want to delete the Backup ';
$l['id'] = 'ID';
$l['name'] = 'Name';
$l['type'] = 'Type';
$l['hostname'] = 'Hostname';
$l['username'] = 'Username';
$l['port'] = 'Port';
$l['dir'] = 'Directory';
$l['test'] = 'Test';
$l['edit']= 'Edit';
$l['delete'] = 'Delete';
$l['test_con'] = 'Test Connection to Backup Server';

$l['err_del_backupserver'] = 'There was an error deleting the backup server';
$l['err_backupserver_in_use'] = 'The following backup server(s) are currently selected as the active backup server. Please unselected and then try deleting.';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['err_inv_bid'] = 'The Backup server id is invalid';
$l['unable_connect'] = 'Unable to connect to the server';
$l['success_connect'] = 'Connection successful !';

//Theme Language
$l['sbyname'] = 'Name';
$l['sbyhostname'] = 'Hostname';
$l['sbytype'] = 'Type';
$l['submit'] = 'Search';
$l['add_backupserver'] = 'Add Backup Server';
$l['noresult'] = 'No Search Result Found';


?>
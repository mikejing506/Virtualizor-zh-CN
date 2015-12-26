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

$l['<title>'] = 'Storage Overview';
$l['plans_tit'] = 'Storage Overview';
$l['saved'] = 'The Storage was deleted successfully';
$l['no_backupservers'] = 'There are no Storage added. <a href="'.$globals['index'].'act=addstorage">Add a Storage.</a>';
$l['no_res'] = 'No results were found for your search query';
$l['del_conf'] = 'Are you sure want to delete the Storage';
$l['err_del_storage'] = 'Unable to delete the Storage';
$l['id'] = 'ID';
$l['name'] = 'Storage Name';
$l['vg'] = 'Volume Group name';
$l['edit']= 'Edit';
$l['delete'] = 'Delete';

$l['err_del_backupserver'] = 'There was an error deleting the backup server';
$l['err_storage_in_use'] = 'The following storage is currently in use and cannot be deleted:';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['err_inv_bid'] = 'The Backup server id is invalid';
$l['unable_connect'] = 'Unable to connect to the server';
$l['success_connect'] = 'Connection successful !';

// Theme Language
$l['st_type'] = 'Type';
$l['st_path'] = 'Path';
$l['st_servers'] = 'Servers';
$l['st_uuid'] = 'UUID';
$l['st_primary'] = 'Primary';
$l['st_size'] = 'Size';
$l['st_free'] = 'Free';
$l['st_oversell'] = 'Oversell';
$l['st_alert_threshold'] = 'Alert Threshold';
$l['no'] = 'No';
$l['yes'] = 'Yes';
$l['sbypath'] = 'Path';
$l['sbyname'] = 'Name';
$l['submit'] = 'Search';
$l['add_storage'] = 'Add Storage';


?>
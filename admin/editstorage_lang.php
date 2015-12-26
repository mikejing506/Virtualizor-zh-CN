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

$l['no_name'] = 'The Storage Name was not specified';
$l['no_path'] = 'The Storage Path was not specified';
$l['no_type'] = 'The Storage Type was not specified';
$l['invalid_st_type'] = 'The Storage Type is invalid';

// Theme strings
$l['<title>'] = 'Edit Storage';
$l['edit_storage'] = 'Edit Storage';
$l['sub_but'] = 'Edit Storage';
$l['st_name'] = 'Name';
$l['st_name_exp'] = 'Name of the storage which will be shown while creating VPS';
$l['st_path'] = 'Storage Path';
$l['st_path_exp'] = 'In case of LVM / Thin LVM please specify the Volume Group path <b>/dev/VG_NAME</b>';
$l['st_type'] = 'Storage Type';
$l['st_type_exp'] = 'LVM is for regular block device storage. Thin LVM is for thin provisioning and allows overselling of disk space';
$l['edited'] = 'Storage details have been edited. Return to <a href="'.$globals['index'].'act=storage">Storage Overview</a>';
$l['st_server'] = 'Server';
$l['st_exp_server'] = 'The Servers which will be able to use this Storage';
$l['st_oversell'] = 'Overcommit';
$l['st_oversell_exp'] = 'The max disk space you want to Overcommit for this storage. In <b>GB\'s</b>';
$l['st_format'] = 'File Format';
$l['st_format_exp'] = 'Format of the VPS Disks that will be created in this storage';
$l['st_alert_threshold'] = 'Alert Threshold';
$l['st_alert_threshold_exp'] = 'If the used size crosses this percentage, an email will be sent to the Admin';
$l['st_primary_storage'] = 'Primary Storage';
$l['st_primary_storage_exp'] = 'Will this be the primary storage for the selected nodes. One Node can have only one primary storage'; 
$l['st_cant_edit'] = 'Edit Slave Storage Error';
$l['st_cant_edit_exp'] = 'Slave servers are not allowed to edit storage !';

?>
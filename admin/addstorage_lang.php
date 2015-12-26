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

$l['cant_add'] = 'Add Storage Error';
$l['cant_add_exp'] = 'Slave servers are not allowed to add any Storage !';
$l['no_name'] = 'The Storage Name was not specified';
$l['no_path'] = 'The Storage Path was not specified';
$l['no_type'] = 'The Storage Type was not specified';
$l['invalid_st_type'] = 'The Storage Type is invalid';
$l['inv_group'] = 'The Group you submitted is invalid';
$l['inv_server'] = 'The Server you submitted is invalid';
$l['lvm_raw_only'] = 'LVM Storage supports only RAW Format';
$l['vz_path_wrong'] = 'OpenVZ storage type needs to have the path as /vz';
$l['lvm_full_path'] = 'Please enter the full path of the LVM with the /dev/';

// Theme strings
$l['<title>'] = 'Add Storage';
$l['add_storage'] = 'Add Storage';
$l['sub_but'] = 'Add Storage';
$l['st_name'] = 'Name';
$l['st_name_exp'] = 'Name of the storage which will be shown while creating VPS';
$l['st_server'] = 'Server';
$l['st_exp_server'] = 'The Servers which will be able to use this Storage';
$l['st_path'] = 'Storage Path';
$l['st_path_exp'] = 'In case of LVM / Thin LVM please specify the Volume Group path <b>/dev/VG_NAME</b>';
$l['st_type'] = 'Storage Type';
$l['st_type_exp'] = 'LVM is for regular block device storage. Thin LVM is for thin provisioning and allows overselling of disk space';
$l['added'] = 'Storage details has been added. Return to <a href="'.$globals['index'].'act=storage">Storage Overview</a>';
$l['st_oversell'] = 'Overcommit';
$l['st_oversell_exp'] = 'The max disk space you want to Overcommit for this storage. In <b>GB\'s</b>';
$l['st_format'] = 'File Format';
$l['st_format_exp'] = 'Format of the VPS Disks that will be created in this storage';
$l['st_alert_threshold'] = 'Alert Threshold';
$l['st_alert_threshold_exp'] = 'If the used size crosses this percentage, an email will be sent to the Admin';
$l['st_primary_storage'] = 'Primary Storage';
$l['st_primary_storage_exp'] = 'Will this be the primary storage for the selected nodes. One Node can have only one primary storage';
$l['thin_warning'] = 'Thin LVM is unstable and is in beta ! By choosing Thin LVM as a storage if your VPS(s) cease to function/work then Virtualizor is not responsible for it. Do you agree ?'; 
$l['zfs_warning'] = '<b>ZFS</b> - If you are adding a ZFS storage, please ensure that you know how to handle and manage a ZFS storage. Otherwise you might end up losing all your data and Virtualizor will not be responsible for it !';
?>
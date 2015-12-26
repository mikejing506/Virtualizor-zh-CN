<?php

//////////////////////////////////////////////////////////////
//===========================================================
// createtemplate_lang.php
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

$l['no_vpsid'] = 'No VPS was selected';
$l['invalid_vpsid'] = 'The VPS you selected is invalid';
$l['no_name'] = 'The OS Template name was not specified';
$l['error_create'] = 'There was an error creating the VPS Template';
$l['filename_exists'] = 'This filename exists, please choose a different filename';
$l['error_get'] = 'There was an error getting the template from the slave';

//Theme Setting
$l['<title>'] = 'Create Template';
$l['page_title'] = 'Create Template';
$l['type'] = 'Virtualization Type';
$l['selectvps'] = 'Select a VPS';
$l['selectvps_exp'] = 'Please select a VPS';
$l['please_choose'] = 'Please select';
$l['tmpname'] = 'OS-Version-Architecture';
$l['tmpname_exp'] = 'Please specify a Template Name';
$l['submit_button'] = 'Create Template'; 
$l['done'] = 'The OS Template was created successfully';
$l['vps_os_type'] = 'VPS OS Type';
$l['vps_os_type_exp'] = 'The selected VPS\'s OS Type';
$l['pygrub'] = 'Pygrub';
$l['extra'] = 'Extra';
$l['drive'] = 'Disk Name';
$l['drive_exp'] = 'By default the Drive is <b>sda</b>. But if the template requires e.g. <b>xvda</b> mounted then please specify <b>xvda</b>.';
$l['noresizefs'] = 'Dont Resize Filesystem';
$l['perf_ops'] = 'Perform Operations';
$l['perf_ops_exp'] = 'If checked operations like changing network settings, root password will be performed.';
$l['fstype'] = 'Check to create Ext4 file system.';
$l['fstype_exp'] = ' By default the File System type is <b>ext3</b>.';

//Progress Updates
$l['prog_update1'] = 'Beginning template creation...';
$l['prog_update2'] = 'Creating the template...';
$l['prog_update3'] = 'Retrieving the OS...';
$l['prog_update4'] = 'Querying the database...';
$l['prog_update5'] = 'Syncing with database...';
$l['pbar_notice'] = 'Note: This process may take a while.';
$l['pbar_tip'] = 'Navigating away from this page, will not affect this process.';

?>
<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edittemplate_lang.php
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

$l['no_virt'] = 'The Virtualization type was not selected';
$l['no_ostype'] = 'The OS Type was not selected';
$l['no_url'] = 'The URL was not specified';
$l['no_file'] = 'The file name was not specified';
$l['invalid_virt'] = 'The virtualization type is not proper';
$l['file_exists'] = 'The file already exists. Please give another name';
$l['err_size'] = 'Could not determine the size of the file';

$l['<title>'] = 'Edit OS Template';
$l['tit_ostmp'] = 'Edit OS Template';
$l['submit'] = 'Edit OS template';
$l['type'] = 'Virtualization Type';
$l['url'] = 'URL';
$l['url_exp'] = 'If you want this template to be downloaded from the Internet, please give the URL. <b>Otherwise</b> it will be assumed that the Template exists on the system.';
$l['bname'] = 'Filename';
$l['done'] = 'The OS has been saved. Return to <a href="'.$globals['index'].'act=ostemplates">OS Templates Overview</a>';
$l['pygrub'] = 'Pygrub';
$l['extra'] = 'Extra';
$l['drive'] = 'Disk Name';
$l['drive_exp'] = 'By default the Drive is <b>sda</b>. But if the template requires e.g. <b>xvda</b> mounted then please specify <b>xvda</b>.';
$l['noresizefs'] = 'Dont Resize Filesystem';
$l['perf_ops'] = 'Perform Operations';
$l['perf_ops_exp'] = 'If checked operations like changing network settings, root password will be performed.';
$l['media_groups'] = 'Media Groups';
$l['fstype'] = 'Check to create Ext4 file system.';
$l['fstype_exp'] = ' By default the File System type is <b>ext3</b>.';
$l['hvm_pass'] = 'Set password';

?>
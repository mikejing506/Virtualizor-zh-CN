<?php

//////////////////////////////////////////////////////////////
//===========================================================
// OS_Templates_lang.php
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

$l['no_template'] = 'You must select atleast one OS Template';
$l['no_url'] = 'The URL of the file is missing';
$l['err_down'] = 'There were errors while downloading the file';
$l['file_exists'] = 'File already exists - skipping..';
$l['file_done'] = 'Download successful';

$l['<title>'] = 'OS Templates Browser';
$l['tit_ostmp'] = 'OS Templates Browser';
$l['done'] = 'The OS List has been saved. Please wait as the files are downloaded';
$l['down_done'] = 'All files have been downloaded. Return to <a href="'.$globals['index'].'act=ostemplates">Installed OS Overview</a>';
$l['head_os'] = 'OS';
$l['head_type'] = 'Type';
$l['head_name'] = 'Filename';
$l['head_size'] = 'Size';
$l['submit'] = 'Save Settings';
$l['pending'] = 'Pending';


$l['status_none'] = 'All';
$l['vstype']      = 'Type:';
$l['distrotype']  = 'Distro:';
$l['osxen']       = 'Xen';
$l['osxenhvm']    = 'Xen HVM';
$l['osxcp']       = 'XCP';
$l['osxcphvm']    = 'XCP HVM';
$l['osopenvz']    = 'OpenVZ';
$l['oskvm']       = 'KVM';

$l['oscentos']    = 'CentOS';
$l['osubuntu']    = 'Ubuntu';
$l['osdebian']    = 'Debian';
$l['osfedora']    = 'Fedora';
$l['osopensuse']  = 'OpenSuse';
$l['osscientific']= 'Scientific';

//Admin email os download 
$l['admin_dlos_sub'] = 'OS Templates Download Report';
$l['admin_dlos_body'] = '
The following is the result of the OS Templates download:

{{os_name}}

Regards,
{{sn}}
';

?>
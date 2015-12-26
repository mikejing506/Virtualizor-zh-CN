<?php

//////////////////////////////////////////////////////////////
//===========================================================
// changepassword_lang.php
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

$l['err_rescue_enable'] = 'There were some errors while enabling rescue mode';
$l['err_rescue_disable'] = 'There were some errors while disabling the rescue mode';
$l['err_downloading'] = 'There was an error downloading the rescue template';
$l['err_delete_disk'] = 'There was an error while deleting the rescue disk';
$l['cant_rescue'] = 'Rescue operation is not allowed when an ISO is in use. Please remove the ISO first';

// Theme strings
$l['<title>'] = 'Rescue Mode';
$l['rescue_exp'] = 'Rescue mode provides the ability to boot a small Linux environment from another disk so that you can rescue your primary linux VPS or backup files that are present on it';
$l['enable_rescue'] = 'Enable Rescue Mode';
$l['rescue_enabled'] = 'Rescue Mode is currently enabled.';
$l['disable_rescue'] = 'Disable Rescue Mode';
$l['rescue_disabled'] = 'Rescue Mode is currently disabled.';
$l['resuce_enable_success'] = 'Rescue mode has been enabled successfully';
$l['resuce_disable_success'] = 'Rescue mode has been disabled successfully';
$l['rescue_enable_notify'] = 'Enabling rescue mode...';
$l['rescue_disable_notify'] = 'Disabling rescue mode...';
$l['root_pass'] = 'Root Password';
$l['root_pass_conf'] = 'Confirm Password';



?>
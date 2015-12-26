<?php

//////////////////////////////////////////////////////////////
//===========================================================
// multivirt_lang.php
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

$l['multi_already'] = 'The Server is already converted to a multi virtualization server';
$l['kvm_openvz_only'] = 'The server must be only a KVM or OpenVZ server. Your active server\'s virtualization is';

//Theme Strings
$l['<title>'] = 'Enable Multi Virtualization';
$l['heading'] = 'Multi Virtualization';
$l['started'] = 'The process is running in the background';
$l['multivirt_exp'] = 'The wizard will run a script which will enable KVM and OpenVZ on your node.<br /> You will then be able create VMs of different Virtualization type.<br /> At the moment only KVM and OpenVZ are supported.<br /> Your node must have Virtualization enabled in the BIOS for KVM to work.<br /><br />Please go through our
<a href="http://www.virtualizor.com/wiki/Multi_Virtualization" target="_blank">Multi Virtualization Guide</a> for more information.';
$l['warning'] = 'Multi Virtualization may not work with certain Hardware and Software.<br/><em>Please Enable At Your Own Risk.</em>';
$l['enable_multi'] = 'Enable';

?>
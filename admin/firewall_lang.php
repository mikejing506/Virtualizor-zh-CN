<?php

//////////////////////////////////////////////////////////////
//===========================================================
// firewall_lang.php
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

$l['<title>'] = 'Firewall Services ';
$l['onfirewall'] = 'Firewall  Enable ';
$l['stopfirewall'] = 'Firewall  Disable ';
$l['statusfirewall'] = 'Firewall  Status ';
$l['restartfirewall'] = 'Firewall  Restart ';
$l['blockfirewall'] = 'Block Port ';
$l['ip_blockfirewall'] = 'Block IP Address ';
$l['ip_allowfirewall'] = 'Allow IP Address ';
$l['allowfirewall'] = 'Allow Port ';
$l['policyfirewall'] = ' Factory Reset ';
$l['versionfirewall'] = ' Firewall version ';
$l['viewfirewall'] = ' View IPtables Rules ';
$l['searchip'] = ' Search IP ';

$l['stopfirewall_detail'] = 'Stops the Firewall';
$l['restartfirewall_detail'] = 'Restarts the IPtables Service';
$l['onfirewall_detail'] = 'Starts the IPtables Service';
$l['statusfirewall_detail'] = 'Shows the IPtables status';

$l['blockfirewall_detail_1'] = 'Block Port Number ';
$l['ip_blockfirewall_detail'] = 'Block IP Address ';
$l['blockfirewall_detail'] = ' through the firewall';

$l['allowfirewall_detail_1'] = 'Allow Port Number ';
$l['ip_allowfirewall_detail'] = 'Allow IP Address ';
$l['allowfirewall_detail'] = ' through the firewall';

$l['policyfirewall_detail'] = 'Will reset the Firewall to the Factory settings';
$l['versionfirewall_detail'] = 'Shows the IPtables Version';
$l['viewfirewall_detail'] = 'Lists the IPtable rules of all chains';
$l['searchip_detail'] = 'Search IPtables for IP Address';
$l['searchip_successfully'] = 'Search IP Address successfully';

$l['port_default'] = 'Virtualizor service may get affected if you block this port, hence this is denied';

$l['port'] = 'Please enter port number.';
$l['port_error'] = 'Please enter valid port number.';
$l['port_already_exist'] = 'This port number already exists.';

$l['ip_drop_success'] = 'IP Address blocked successfully.';
$l['ip'] = 'Please enter IP Address.';
$l['ip_error'] = 'Please enter valid IP Address.';
$l['ip_already_exist'] = 'This IP Address already exists.';
$l['ip_not_found'] = 'IP Address not found.';

?>

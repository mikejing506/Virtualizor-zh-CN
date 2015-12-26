<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editiprange_lang.php
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

$l['slave_cant'] = 'Edit IPs Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to edit IPs !';
$l['no_ip'] = 'No IP Address was specified';
$l['inv_netmask'] = 'The netmask is invalid';
$l['ips_inv'] = 'The Subnet is invalid';
$l['ip_inv_6'] = 'The IPv6 Address is invalid';
$l['mac_inv'] = 'The MAC Address is invalid';
$l['ippresent'] = 'The Subnet is already present in the database';
$l['ippresent_ips'] = 'An IP Address or Subnet is already present in the database';
$l['err_slave'] = 'There was an error while saving the IP on the slave';

$l['<title>'] = 'Edit IPs';
$l['editip'] = 'Edit IP';
$l['done'] = 'The subnet have been saved. Return to <a href="'.$globals['index'].'act=ippool">IP Pool Overview</a>';
$l['enterip'] = 'Enter IP';
$l['netmask'] = 'Netmask (Routing Prefix)';
$l['netmask_exp'] = 'A valid routing prefix';
$l['ippool'] = 'IP Pool';
$l['sel_server'] = 'Server';
$l['editbtn'] = 'Submit';
$l['none'] = 'None';
$l['enterip_exp'] = 'If the IP Address is assigned, it cannot be edited.';

?>
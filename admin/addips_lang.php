<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addips_lang.php
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

$l['slave_cant'] = 'Add IP Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to add IPs !';
$l['inv_ippool'] = 'The IP Pool you submitted is invalid';
$l['inv_server'] = 'The Server you submitted is invalid';
$l['inv_startip'] = 'The first IP of the range you submitted is invalid';
$l['inv_endip'] = 'The last IP of the range you submitted is invalid';
$l['invalid_range'] = 'The IP Range you submitted is invalid';
$l['ips_inv'] = 'The following IP(s) are invalid';
$l['macs_inv'] = 'The following MAC(s) are invalid';
$l['no_ip'] = 'No IPs were specified';
$l['ips_exist'] = 'The following IP(s) already exist';
$l['inv_ipv6'] = 'The IPv6 you submitted for generating IPs is invalid';
$l['no_ipv6_num'] = 'The number of IPv6 to generate was not given';
$l['ipv6_too_much'] = 'The number of IPv6 to generate should not exceed 500';
$l['err_save_slave'] = 'There was an error while saving the IPs on the slave';
$l['err_ip'] = 'There was an error while saving the IP';
$l['entermac_exp'] = 'Leave the MAC field blank to auto-generate the MAC.';
$l['no_addips_nat'] = 'No additional IPs can be added as NAT has been enabled on this pool';
$l['no_ips'] = 'No IPs were submitted';
$l['no_ip_pool'] = 'No IP Pool was assigned';
$l['ipv6_subnet_there'] = 'There is a subnet with the range you are trying to create';
$l['error_primary_ip'] = ' exists as primary IP. Please enter a different IP.';

$l['<title>'] = 'Add IP';
$l['addip'] = 'Add IP';
$l['done'] = 'The IP(s) have been saved. Return to <a href="'.$globals['index'].'act=ippool">IP Pool Overview</a>';
$l['iptype'] = 'IP Type';
$l['enterip'] = 'Enter IP';
$l['enterip_exp'] = 'Enter single IPs or create a IP Range';
$l['enterip_exp_6'] = 'Enter single IPs or generate random IPs';
$l['add_more_ips'] = 'Add more IPs';
$l['ip_range'] = 'IP Range';
$l['gen_ipv6'] = 'Generate IP';
$l['iprange'] = 'Add IP Range';
$l['first_IP'] = 'First IP';
$l['last_IP'] = 'Last IP';
$l['ipv6_range'] = 'Generate IPv6';
$l['ipv6_num'] = 'Number of IPv6';
$l['ipv6_num_exp'] = 'The Number of IPv6 addresses to generate.';
$l['sel_ippool'] = 'Select IP Pool';
$l['ipp_none'] = 'None';
$l['sel_server'] = 'Select Server';
$l['submitip'] = 'Add IP Address(s)';
$l['ip'] = 'IP';
$l['mac_addr'] = 'MAC';

?>
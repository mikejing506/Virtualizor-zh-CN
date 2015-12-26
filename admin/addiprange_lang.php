<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addiprange_lang.php
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
$l['inv_netmask'] = 'The netmask is invalid';
$l['ip_gen_inv'] = 'Please give a valid IPv6 /{{from}} subnet to generate /{{to}} subnets';
$l['invalid_range'] = 'The IP Range you submitted is invalid';
$l['ips_inv'] = 'The following IP(s) are invalid';
$l['ips_exist'] = 'The following IP Subnets(s) already exist';
$l['ips_exist_in_ip'] = 'The following IP(s) or Subnet(s) already exist';
$l['inv_ipv6'] = 'The IPv6 you submitted for generating IPs is invalid';
$l['no_ipv6_num'] = 'The number of IPv6 to generate was not given';
$l['ipv6_too_much'] = 'The number of IPv6 to generate should not exceed 5000';
$l['err_ip'] = 'There was an error while saving the IP';
$l['no_ips'] = 'No IPs were submitted';
$l['no_ip_pool'] = 'No IP Pool was assigned';

$l['<title>'] = 'Add IPv6 Subnet';
$l['addip'] = 'Add IPv6 Subnet';
$l['done'] = 'The IP(s) have been saved. Return to <a href="'.$globals['index'].'act=ippool">IP Pool Overview</a>';
$l['netmask'] = 'Netmask (Routing Prefix)';
$l['enterip'] = 'Enter IP';
$l['enterip_exp_6'] = 'Enter single IPs or generate random IPs';
$l['add_more_ips'] = 'Add More Subnets';
$l['gen_ipv6'] = 'Generate Subnets';
$l['subnet'] = 'Subnet';
$l['ipv6_num'] = 'Number of IPv6 Subnets';
$l['ipv6_num_exp'] = 'The Number of IPv6 Subnets to generate';
$l['sel_ippool'] = 'Select IP Pool';
$l['ipp_none'] = 'None';
$l['sel_server'] = 'Select Server';
$l['submitip'] = 'Add Subnets(s)';
$l['ip'] = 'IP';
$l['mac_addr'] = 'MAC';

?>
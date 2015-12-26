<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editippool_lang.php
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

$l['slave_cant_add'] = 'Edit IP Pool Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to edit IP Pools !';
$l['slave_cant_head'] = 'Error';
$l['no_name'] = 'The IP Pool name was not specified';
$l['no_gateway'] = 'The Gateway was not specified';
$l['no_netmask'] = 'The Netmask was not specified';
$l['no_ns1'] = 'The Nameserver 1 was not specified';
$l['no_ns2'] = 'The Nameserver 2 was not specified';
$l['no_servers'] = 'You did not select the Server(s) for the IP Pool';
$l['invalid_server'] = 'Invalid server submitted';
$l['inv_gateway'] = 'The Gateway is invalid';
$l['inv_netmask'] = 'The Netmask is invalid';
$l['inv_netmask_6'] = 'The Netmask is invalid. It has to be an integer between 1-127';
$l['inv_ns1'] = 'The Nameserver 1 is invalid';
$l['inv_ns2'] = 'The Nameserver 2 is invalid';
$l['inv_startip'] = 'The first IP of the range you submitted is invalid';
$l['inv_endip'] = 'The last IP of the range you submitted is invalid';
$l['invalid_range'] = 'The IP Range you submitted is invalid';
$l['ips_exist'] = 'The following IP(s) already exist';
$l['err_ippool'] = 'There was an error while saving the IP Pool';
$l['err_ip'] = 'There was an error while saving the IP';
$l['err_slave'] = 'There was an error while saving the IP Pool on the slave';
$l['err_edit_nat'] = 'There was error while editing the NAT network';
$l['nat_not_allowed'] = 'IP Pool Servers can not be changed if NAT is enabled';
$l['inv_server'] = 'The Server you submitted is invalid';
$l['inv_group'] = 'The Group you submitted is invalid';

// The Strings
$l['<title>'] = 'Edit IP Pool';
$l['editippool'] = 'Edit IP Pool';
$l['ippool_name'] = 'Name';
$l['nameofip'] = 'The name of this IP Pool';
$l['gateway'] = 'Gateway';
$l['netmask'] = 'Netmask';
$l['routing_prefix'] = '(Routing Prefix)';
$l['netmask_6'] = 'Integer between 0-128';
$l['nameserver'] = 'Nameserver';
$l['unsure_1'] = 'If not aware then use 4.2.2.1';
$l['unsure_2'] = 'If not aware then use 4.2.2.2';
$l['unsure_1_6'] = 'If not aware then use 2001:4860:4860::8888';
$l['unsure_2_6'] = 'If not aware then use 2001:4860:4860::8844';
$l['first_IP'] = 'First IP';
$l['last_IP'] = 'Last IP';
$l['pool_servers'] = 'Server';
$l['ser_id'] = 'ID';
$l['pool_servers_exp'] = 'The server this IP Pool belongs to';
$l['sub_but'] = 'Edit IP Pool';
$l['done'] = 'The IP Pool has been saved. Return to <a href="'.$globals['index'].'act=ippool">IP Pool Overview</a>';
$l['add_route'] = 'Use Routed network';
$l['exp_add_route'] = 'If checked, routed networking will be used';
$l['is_internal'] = 'Is Internal IP Range ?';
$l['yes'] = 'Yes';
$l['bridge'] = 'Bridge';
$l['mtu'] = 'MTU';
$l['exp_mtu'] = 'Specify the Maximum Transmission Unit in Bytes.If empty the deafult value will be used.';

?>
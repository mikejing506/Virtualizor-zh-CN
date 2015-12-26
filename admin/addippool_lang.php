<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addippool_lang.php
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

$l['slave_cant_add'] = 'Add IP Pool Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to add IP Pools !';
$l['slave_cant_head'] = 'Error';
$l['no_iptype'] = 'The type of IP Pool was not posted';
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
$l['inv_ipv6'] = 'The IPv6 you submitted is invalid';
$l['no_ipv6_num'] = 'The number of IPv6 to generate was not given';
$l['ipv6_too_much'] = 'The number of IPv6 to generate should not exceed 500';
$l['invalid_range'] = 'The IP Range you submitted is invalid';
$l['ips_exist'] = 'The following IP(s) already exist';
$l['err_save_slave'] = 'There was an error while saving the IP Pool on the slave';
$l['err_ippool'] = 'There was an error while saving the IP Pool';
$l['err_ip'] = 'There was an error while saving the IP';
$l['no_macs'] = 'Please specify the MAC Address';
$l['entermac_exp'] = 'Leave the MAC field blank to auto-generate the MAC.';
$l['inv_ip'] = 'The IP Address submitted is invalid';
$l['inv_mac'] = 'The MAC Address submitted is invalid';
$l['pool_exists'] = 'A pool with the specified name already exists';
$l['err_create_nat'] = 'There was an error in creating the NAT network on the slave';
$l['no_ip_nat'] = 'The First IP and Last IP for NAT was not specified';
$l['error_nat_create'] = 'There was an error in creating the NAT network.';
$l['internal_ipv4'] = 'Internal IP Ranges can be IPv4 only at the moment';
$l['internal_no_bridge'] = 'The bridge is missing for the Internal IP Pool';
$l['internal_range_exists'] = 'An Internal IP Pool already exists. You can have only one Internal IPv4 Pool and another Internal IPv6 Pool on one Host Node.';
$l['error_internal_network_create'] = 'There was an error in creating the internal network.';
$l['inv_server'] = 'The Server you submitted is invalid';
$l['nat_route_oneserver'] = 'NAT and Routing is not allowed if multiple server is selected';
$l['inv_group'] = 'The Group you submitted is invalid';
$l['nat_ipv6_err'] = 'NAT and Routing is not allowed for an IPv6 Pool';
$l['ipv6_subnet_there'] = 'There is a subnet with the range you are trying to create';
$l['error_primary_ip'] = ' exists as primary IP. Please enter a different IP.';

// The Strings
$l['<title>'] = 'Add IP Pool';
$l['addippool'] = 'Add IP Pool';
$l['iptype'] = 'Type';
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
$l['ipv6_range'] = 'Generate IPv6';
$l['ipv6_num'] = 'Number of IPv6';
$l['ipv6_num_exp'] = 'The Number of IPv6 addresses to generate.';
$l['pool_server'] = 'Server';
$l['exp_server'] = 'NOTE : NAT and Routing is allowed for only one server';
$l['sub_but'] = 'Add IP Pool';
$l['ser_id'] = 'ID';
$l['ip'] = 'IP';
$l['mac_addr'] = 'MAC';
$l['done'] = 'The IP Pool has been saved. Return to <a href="'.$globals['index'].'act=ippool">IP Pool Overview</a>';
$l['done_ipv6_subnet'] = 'To generate IPv6 Subnets click <a href="'.$globals['index'].'act=addiprange&ippid={{ippid}}">here</a>';
$l['add_more_ips'] = '+';
$l['or'] = 'OR';
$l['optional_firstip'] = 'Please specify the First IP <b>if</b> you want to add a range to the IP Pool.';
$l['optional_lastip'] = 'Please specify the Last IP <b>if</b> you want to add a range to the IP Pool.';
$l['subnet'] = 'Enable NAT';
$l['exp_subnet'] = 'Enable this only if your data center does not allow bridged networking and you are adding subnet IPs. <br />Please refer to <a target="_blank" href="'.$globals['docs'].'NAT">this</a> for more info.<br />
<b>Only add the first and last usable IPs above. <br />If enabled no more IPs can be added to this pool.</b>';
$l['add_route'] = 'Use Routed network';
$l['exp_add_route'] = 'If checked, routed networking will be used';
$l['internal'] = 'Is Internal IP Range ?';
$l['internal_exp'] = 'You can assign Internal IPs to VMs for communication within them. Do not check this, if this IP Pool is for Public IPs';
$l['internal_bridge'] = 'Internal IP Bridge';
$l['internal_bridge_exp'] = 'The bridge that will be used for the internal IP range on the nodes. Please refer to our guide to create a <a target="_blank" href="'.$globals['docs'].'Internal_Network">Internal Bridge</a>';
$l['server_choose'] = 'Choose Server';
$l['ipv6_subnet'] = 'Generate Subnets';
$l['ipv6_subnet_exp'] = 'If you want to make subnets, you will be redirected after creating the IP Pool';
$l['mtu'] = 'MTU';
$l['exp_mtu'] = 'Specify the Maximum Transmission Unit in bytes';

?>
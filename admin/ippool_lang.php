<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ippool_lang.php
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

$l['error_deleting'] = 'There was an error while deleting the IP Pool';
$l['err_destroy_nat'] = 'There was error while destroying the NAT network';
$l['err_destroy_internal_network'] = 'There was error while destroying the internal IP network';

//Theme Language
$l['<title>'] = 'IP Pool';
$l['done'] = 'The IP Pool was deleted successfully';
$l['conf_del'] = 'Are you sure you want to delete the IP Pool ?';
$l['ip_pool'] = 'IP Pool';
$l['total_ip'] = 'Total';
$l['free_ip'] = 'Free';
$l['subnets'] = 'Subnets';
$l['free_subnet'] = 'Free';
$l['add_ip'] = 'Add IP';
$l['del_pool'] = 'Delete';
$l['no_pools'] = 'There are no IP Pools. <a href="'.$globals['index'].'act=addippool">Add an IP Pool now</a>';
$l['no_res'] = 'No results were found for your search query';
$l['view_ips'] = 'View IPs';
$l['view_subnets'] = 'View Subnets';
$l['ips_in_use'] = 'An IP Address from this IP Pool is in use';
$l['type'] = 'IP Type';
$l['pool_name'] = 'Name';
$l['subnet-nat'] = 'NAT';
$l['edit_pool'] = 'Edit IP Pool';
$l['delete'] = 'Delete';
$l['pool_id'] = 'ID';
$l['poolname'] = 'IP Pool';
$l['poolgateway'] = 'Gateway';
$l['netmask'] = 'Netmask';
$l['nameserver'] = 'Nameserver';
$l['submit'] = 'Search';
$l['add_ippool'] = 'Create IP Pool';
$l['ipp_server'] = 'Server';

?>
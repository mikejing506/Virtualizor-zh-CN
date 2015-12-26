<?php

//////////////////////////////////////////////////////////////
//===========================================================
// dnsplans_lang.php
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

$l['dns_use_error'] = 'This plan is assigned to a User. Please assign the User another DNS plan and then delete this plan.';

$l['<title>'] = 'DNS Plans';
$l['dnsplans_tit'] = 'DNS Plans';
$l['saved'] = 'The DNS Plan was deleted successfully';
$l['no_plans'] = 'There are no DNS Plans. <a href="'.$globals['index'].'act=adddnsplan">Add a DNS Plan now</a>';
$l['no_res'] = 'No results were found for your search query';
$l['del_conf'] = 'Are you sure want to delete the Plan';

//Theme Language

$l['sbyplan'] = 'Plan Name';
$l['sbyplantype'] = 'Plan Type';
$l['submit'] = 'Search';
$l['noresult'] = 'No Search Result Found';
$l['plan_list'] = 'Plans List';
$l['dnspl_id'] = 'ID';
$l['dnspl_name'] = 'DNS Plan Name';
$l['dnspl_server'] = 'DNS Server';
$l['dnspl_maxdomains'] = 'Max Domains';
$l['dnspl_maxrecords'] = 'Max Records';
$l['dnspl_ttl'] = 'Default TTL';
$l['dnspl_edit'] = 'Edit';
$l['dnspl_delete'] = 'Delete';
$l['add_dns_plan'] = 'Add DNS Plan';


?>
<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pdns_lang.php
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

$l['<title>'] = 'Power DNS';
$l['page_head'] = 'Power DNS';
$l['add_pdns'] = 'Add DNS Server';
$l['pdns'] = 'Power DNS';
$l['done'] = 'The PowerDNS server has been deleted successfully';

$l['id'] = 'ID';
$l['name'] = 'Name';
$l['descr'] = 'Description';
$l['ip'] = 'IP Address';
$l['manage'] = 'Manage';
$l['rdns'] = 'Add Reverse DNS Zone';
$l['pdns_zones'] = 'Zones';
$l['edit_pdns'] = 'Edit this server';
$l['del_pdns'] = 'Delete this server';
$l['test_pdns'] = 'Check Database connection';

$l['pdns_name'] = 'Server Name';
$l['pdns_ipaddress'] = 'IP Address';
$l['submit'] = 'Search';

$l['no_pdns'] = 'There are no PDNS Server. <a href="'.$globals['index'].'act=addpdns">Add a PDNS Server now</a>';
$l['no_res'] = 'No results were found for your search query';
$l['pdns_inuse'] = 'This server is included in a DNS plan. Please unassign it from the plan and then try deleting it again';
$l['unable_connect'] = 'Unable to connect to the server';
$l['success_connect'] = 'Connection successful !';

$l['test_pdns'] = 'Test';
$l['edit_pdns'] = 'Edit';
$l['delete_pdns'] = 'Delete';

$l['powerdns_note'] = 'Please go through the following guides :<br />
1) <a href="http://www.virtualizor.com/wiki/PowerDNS" target="_blank">PowerDNS Setup Guide</a><br />
2) <a href="http://www.virtualizor.com/wiki/Configure_PowerDNS" target="_blank">Adding PowerDNS to Virtualizor</a><br />
3) <a href="http://www.virtualizor.com/wiki/Configure_Reverse_DNS" target="_blank">Configure Reverse DNS</a>';
$l['view'] = 'View';
$l['pdns_records'] = 'Records';

?>
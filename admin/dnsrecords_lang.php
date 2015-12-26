<?php

//////////////////////////////////////////////////////////////
//===========================================================
// dnsrecords_lang.php
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

$l['<title>'] = 'DNS Records';
$l['conf_del'] = 'Are you sure you want to delete this DNS Record ?';
$l['page_head'] = 'DNS Records';
$l['dnsrecords'] = 'DNS Records';
$l['done'] = 'The Record has been deleted successfully';

$l['id'] = 'ID';
$l['ip'] = 'IP';
$l['name'] = 'Name';
$l['domain'] = 'Domain';
$l['manage'] = 'Manage';
$l['type'] = 'Type';
$l['priority'] = 'Priority';
$l['ttl'] = 'TTL';
$l['rdns'] = 'Add Reverse DNS Zone';
$l['pdns_zones'] = 'View Zones';
$l['edit_dnsrecords'] = 'Edit';
$l['del_dnsrecords'] = 'Delete';
$l['del_record'] = 'Delete Record';
$l['add_dnsrecord'] = 'Add record';
$l['dns_domain'] = 'Domain';
$l['dns_name'] = 'Name';
$l['domain_id'] = 'Zone ID';

$l['pdns_name'] = 'Server Name';
$l['rdns_ipaddress'] = 'IP Address';
$l['submit'] = 'Search';
$l['record_type'] = 'Record Type';

$l['no_rdns'] = 'There are no DNS Records.<a href="'.$globals['index'].'act=add_dnsrecord&pdnsid='.optGET('pdnsid').'">Add a DNS Record now</a>';
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

$l['err_delete'] = 'There was an error while deleting following records:';
$l['err_connect'] = 'Could not Connect to the remote database';

?>
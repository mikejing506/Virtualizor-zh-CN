<?php

//////////////////////////////////////////////////////////////
//===========================================================
// rdns_lang.php
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

$l['no_zone_name'] = 'The zone name was not specified';
$l['no_ns'] = 'The nameserver must be specified. Atleast two are required';
$l['no_hostmasteremail'] = 'The hostmaster email was not specified';
$l['inv_revzone'] = 'The Reverse DNS zone specified is invalid';
$l['inv_ns'] = 'The nameserver TLDs specified are invalid';
$l['inv_hostemail'] = 'The Hostmaster Email specified is invalid';
$l['err_connect'] = 'Could not connect to the server. Please check if it is online';
$l['err_save'] = 'There was an error in saving the data';
$l['done'] = 'The reverse DNS zone has been successfully added';
$l['zone_exists'] = 'This zone already exists';
$l['no_pdnsid'] = 'No server was selected';

// Theme strings
$l['<title>'] = 'Add Reverse DNS Zone';
$l['page_head'] = 'Add Reverse DNS Zone';
$l['add_rdns'] = 'Add Reverse DNS Zone';;
$l['zone_name'] = 'Zone Name';
$l['exp_zone_name'] = 'The Zone Name. For example, <br />IPv4 IP : 1.2.3.xxx, Zone Name : <b>3.2.1.in-addr.arpa</b><br />IPv6 IP : 2001:41d0:0008:53ff:0000:0000:xxxx:xxxx, Zone Name : <b>0.0.0.0.0.0.0.0.f.f.3.5.8.0.0.0.0.d.1.4.1.0.0.2.ip6.arpa</b>';
$l['ns'] = 'Nameserver';
$l['hostmasteremail'] = 'Hostmaster Email';
$l['exp_hostmasteremail'] = 'Hostmaster Email';
$l['pdns_server'] = 'Select server';
$l['exp_pdns_server'] = 'The DNS server to add the record to';
$l['sub_but'] = 'Submit';

?>
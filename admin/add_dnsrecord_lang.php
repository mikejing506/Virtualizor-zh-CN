<?php

//////////////////////////////////////////////////////////////
//===========================================================
// add_dnsrecord_lang.php
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

$l['no_dns_ip'] = 'The IP must be specified';
$l['no_zone_name'] = 'The Zone name must be specified.';
$l['no_rdns_domain'] = 'The domain was not specified.';
$l['no_zone_name'] = 'The zone name must be specified.';
$l['no_host'] = 'The host must be specified.';
$l['no_record_type'] = 'The record type must be specified.';
$l['no_content'] = 'The content must be specified.';
$l['no_ttl'] = 'The ttl must be specified.';
$l['inv_revzone'] = 'The Reverse DNS zone specified is invalid';
$l['inv_name'] = 'The host name is invalid';
$l['inv_int'] = 'Invalid integer specified';
$l['inv_ip'] = 'Invalid IP Address specified';
$l['inv_tld'] = 'Invalid top level domain specified';
$l['inv_ipv6'] = 'Invalid IPv6 specified';
$l['err_save'] = 'There was an error in saving the data';
$l['done'] = 'The record has been save successfully added';
$l['domain_exists'] = 'This domain already exists';
$l['no_pdnsid'] = 'No server was selected';
$l['is_rdns'] = 'Record already present';
$l['err_zone'] = 'RDNS Zone entry not found for the ip address.';
$l['err_add'] = 'There was error while saving the data';
$l['err_soa'] = 'There was an error while updating the SOA serial';
$l['err_connect'] = 'Could not Connect to the remote database';
$l['no_soa_content'] = 'The SOA record content cannot be empty'; 

// Theme strings
$l['<edit_title>'] = 'Edit DNS Record';
$l['<add_title>'] = 'Add DNS Record';
$l['page_head'] = 'Add DNS Record';
$l['add_dnsrecord'] = 'Add DNS Record';
$l['edit_dnsrecord'] = 'Edit DNS Record';
$l['zone_name'] = 'Zone name';
$l['sub_but'] = 'Save';
$l['domain'] = 'Domain Name';
$l['domain_exp'] = 'Fully Qualified domain name';
$l['dns_ip'] = 'IP';
$l['type_rdns'] = 'RDNS';
$l['type_dns'] = 'DNS';
$l['record_type'] = 'Record Type';
$l['host'] = 'Host';
$l['content'] = 'Content';
$l['priority'] = 'Priority';
$l['dns_type'] = 'Record Type';

?>
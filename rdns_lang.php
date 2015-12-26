<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userspassword_lang.php
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


// Theme strings
$l['<title>'] = 'Add Reverse DNS';
$l['page_head'] = 'Add Reverse DNS';
$l['add_rdns'] = 'Add Reverse DNS';
$l['zone_name'] = 'Zone Name';
$l['exp_zone_name'] = 'The Zone Name';
$l['ns'] = 'Nameserver';
$l['hostmasteremail'] = 'Hostmaster Email';
$l['exp_hostmasteremail'] = 'Hostmaster Email';
$l['pdns_server'] = 'Select server';
$l['exp_pdns_server'] = 'The DNS server to add the record to';
$l['sub_but'] = 'Submit';
$l['rdns_ip'] = 'IP Address';
$l['exp_rdns_ip'] = 'Enter your VM IP address';
$l['rdns_domain'] = 'Domain name';
$l['exp_rdns_domain'] = 'Enter the Fully qualified domain name';
$l['no_rnds_ip'] = 'Please enter the IP address';
$l['no_rdns_domain'] = 'Please enter the Domain name';
$l['no_pdnsid'] = 'PowerDNS ID is invalid';
$l['err_zone'] = 'RDNS Zone entry not found. Please contact the Administrator';
$l['is_rdns'] = 'Reverse DNS entry already present';
$l['no_dns'] = 'The DNS server has not been setup by the Admin. Please contact the Admin for this.';


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
$l['inv_ipaddress'] = 'IP address entered is invalid';
$l['rdns_existing'] = 'rDNS Records';
$l['deleted'] = 'The rDNS record has been deleted';

?>
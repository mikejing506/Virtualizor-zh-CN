<?php

//////////////////////////////////////////////////////////////
//===========================================================
// managezone_lang.php
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

$l['<title>'] = 'DNS - Manage Zone';
$l['conf_del'] = 'Are you sure you want to delete the PDNS Server ?';
$l['page_head'] = 'Manage Zone';
$l['add_pdns'] = 'Add PDNS Server';
$l['dns_mgmt'] = 'DNS Management';
$l['add_done'] = 'The Zone has been added successfully';

$l['id'] = 'ID';
$l['name'] = 'Name';
$l['descr'] = 'Description';
$l['ip'] = 'IP Address';
$l['manage'] = 'Manage';
$l['add_zone'] = 'Add Zone';
$l['zone_name'] = 'Zone Name';
$l['pdns_zones'] = 'View Zones';
$l['manage_zone'] = 'Manage';
$l['del_zone'] = 'Delete';
$l['conf_del'] = 'Are you sure you want to delete this record ?';

$l['add_done'] = 'The record has been added sucessfully';
$l['edit_done'] = 'The record has been edited sucessfully';
$l['del_done'] = 'The record has been deleted sucessfully';

$l['pdns_name'] = 'Server Name';
$l['pdns_ipaddress'] = 'IP Address';
$l['submit_button'] = 'Add Record';
$l['edit_button'] = 'Edit Record';
$l['cancel_button'] = 'Cancel';
$l['no_domains'] = 'There are no zones on record';
$l['err_addzone'] = 'There was an error adding the zone';

$l['inv_name'] = 'Invalid hostname specified';
$l['inv_ip'] = 'Invalid IP Address specified';
$l['inv_tld'] = 'Invalid top level domain specified';
$l['inv_ipv6'] = 'Invalid IPv6 specified';
$l['inv_int'] = 'Invalid integer specified';

$l['err_add'] = 'There was an error while adding the record';
$l['err_del'] = 'There was an error while deleting the record';
$l['err_edit'] = 'There was an error while editing the record';
$l['err_soa'] = 'There was an error while updating the SOA serial';
$l['rec_exists'] = 'The record already exists';
$l['records_limit'] = 'The limit for adding records has been reached';
$l['err_connect'] = 'There was an error while connecting to the nameserver';
$l['zone_restricted'] = 'The Zone you are trying to edit is restricted';


?>
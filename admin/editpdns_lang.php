<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editpdns_lang.php
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

$l['<title>'] = 'Edit PDNS Server';
$l['page_head'] = 'Power DNS';
$l['edit_pdns'] = 'Edit PDNS Server';

$l['id'] = 'ID';
$l['name'] = 'Name';
$l['exp_name'] = 'Name of the PDNS Server';
$l['descr'] = 'Description';
$l['exp_descr'] = 'Brief description about the PDNS Server';
$l['ipaddress'] = 'IP Address';
$l['exp_ipaddress'] = 'IP Address of the PDNS Server';
$l['sql_port'] = 'SQL Port';
$l['exp_sql_port'] = 'SQL Port (Default is 3306)';
$l['sql_username'] = 'SQL Username';
$l['exp_sql_username'] = 'SQL Username to connect as';
$l['sql_password'] = 'SQL Password';
$l['sql_db'] = 'SQL Database';
$l['exp_sql_db'] = 'SQL Database for PDNS';

$l['sub_but'] = 'Submit';
$l['done'] = 'The PDNS server has been edited successfully';

$l['pdns_name'] = 'Server Name';
$l['pdns_ipaddress'] = 'IP Address';
$l['submit'] = 'Search';

$l['no_name'] = 'The name was not specified';
$l['no_descr'] = 'The Description was not specified';
$l['no_ipaddress'] = 'The IP Address was not specified';
$l['no_sqlport'] = 'The Port was not specified';
$l['no_sqlusername'] = 'The username was not specified';
$l['no_sqlpassword'] = 'The password was not specified';
$l['no_sqldb'] = 'The database was not specified';
$l['inv_ipaddress'] = 'The specified IP Address was invalid';
$l['err_editpdns'] = 'There was an error editing the DNS Server';
$l['inv_port'] = 'The port specified was invalid';
$l['use_ssl'] = 'Use SSL';
$l['exp_use_ssl'] = 'If checked SSL will be used for connecting to the PDNS server';


?>
<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editserver_lang.php
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

$l['slave_cant_add'] = 'Edit Server Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to add servers !';
$l['slave_cant_head'] = 'Error';
$l['no_name'] = 'The Server Name was not specified!';
$l['no_ip'] = 'The IP Address was not specified!';
$l['no_pass'] = 'The Password Key Address was not specified!';
$l['details_err'] = 'Could not load the server details';
$l['virt_changed'] = 'The slaves Virtualization Kernel has changed. Please delete the server and add it again';
$l['is_master'] = 'The server you are trying to edit is a Master Server and hence cannot be added';
$l['is_slave'] = 'The server is a slave of another Master and cannot be added';
$l['err_saving'] = 'There was an error while saving the details';
$l['err_slaving'] = 'There was an error while saving the details on the slave server';
$l['wrong_internal_ip'] = 'The Internal IP you submitted is invalid';
$l['wrong_ip'] = 'The IP you submitted is invalid';

// Theme strings
$l['<title>'] = 'Edit Server';
$l['page_head'] = 'Edit Server';
$l['saved'] = 'The slave has been edited. Return to <a href="'.$globals['index'].'act=servers">Servers Overview</a>';
$l['server_name'] = 'Server Name';
$l['server_name_exp'] = 'The name of the server';
$l['server_ip'] = 'IP Address';
$l['server_ip_exp'] = 'The primary address of the server';
$l['server_pass'] = 'Server Password';
$l['server_pass_exp'] = 'API KEY Password of the server';
$l['server_lock'] = 'Lock Server';
$l['server_lock_exp'] = 'If Locked, no new VPS will be created on this server';
$l['sub_but'] = 'Edit Server';
$l['server_group'] = 'Server Group';
$l['internal_ip'] = 'Internal IP';
$l['internal_ip_exp'] = 'Set internal IP for cloud server(s). (Optional)';

?>
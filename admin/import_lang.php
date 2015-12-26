<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['novps'] = 'The VPS Container ID was not specified';
$l['no_vpsbandwidth'] = 'The Bandwidth for the VPS was not specified';
$l['novpsfound'] = 'The VPS configuration was not found';
$l['vpsavailable'] = 'VPS is already available';
$l['used_ip'] = 'The following IP Addresses are already in use by another VPS :';
$l['err_insert'] = 'There was an error while inserting the VPS Data into the database';
$l['err_openvz_usedip'] = ' could not be imported because the following IP Addresses are already in use by another VPS :';
$l['err_kvm_usedip'] = ' could not be imported because the following IP Addresses are already in use by another VPS :';
$l['err_xen_usedip'] = ' could not be imported because the following IP Addresses are already in use by another VPS :';
$l['err_openvz_import'] = 'There was an error while trying to import the OpenVZ VPS(s)';
$l['err_kvm_import'] = 'There was an error while trying to import the KVM VPS(s)';
$l['err_xen_import'] = 'There was an error while trying to import the Xen VPS(s)';

$l['<title>'] = 'Import';
$l['importvps']= 'Import VPS';
$l['importusers'] = 'Import Users';
$l['done'] = 'VPS Successfully Imported. For Editing the VPS <a href="'.$globals['index'].'act=editvs&vpsid=&soft-1;">click here</a>';

$l['email_temp'] = "Hi, \n\nWelcome to Virtualizor. \nThe following are your login details. \nUsername: &soft-1;. \nPassword: &soft-2;. \n\nThanks and Regards, \nVirtualizor Team.";

$l['done_openvz'] = 'The VPS(s) was imported successfully';
$l['vpsname'] = 'VPS Container ID';
$l['exp_vpsname'] = 'Please specify the VPS Container ID to be imported';
$l['submit'] = 'Import';
$l['ippresent'] = 'IP is already in use by another VPS';
$l['vpsbandwidth'] = 'Bandwidth';
$l['exp_vpsbandwidth'] = 'Please specify the Bandwidth for the VPS';
$l['vpsuser'] = 'Users';
$l['none'] = 'None';
$l['no_orphan'] = 'There is no VPS to import';
$l['email'] = 'Email';
$l['reason'] = 'Reason';
$l['empty_email'] = 'No Email';
$l['no'] = 'No';
$l['yes'] = 'Yes';
$l['import_no'] = 'To be Imported ?';
$l['type_user'] = 'Type of User';
$l['no_users'] = 'No users to import';
$l['users_exists'] = 'User exists in Virtualizor DB';
$l['send_email'] = 'Send Email to all the users to be imported ?';
$l['hy_conn_err'] = 'Could not connect to HyperVM MySQL server';
$l['ve_conn_err'] = 'Could not connect to VePortal MySQL server';
$l['so_conn_err'] = 'Could not connect to SolusVM MySQL server';
$l['fe_conn_err'] = 'Could not connect to Feathur MySQL server';
$l['hy_seldb_err'] = 'Could not select HyperVM Database.';
$l['ve_seldb_err'] = 'Could not select VePortal Database.';
$l['so_seldb_err'] = 'Could not select SolusVM Database.';
$l['fe_seldb_err'] = 'Could not select Feathur Database.';


$l['db1'] = 'Database Name: ';
$l['no_query'] = 'Could not make query';
$l['no_file'] = 'Could not find the Config file.';

$l['import_ut'] = '. Please proceed to the VPS import utility';

$l['u_imp'] = 'Users Imported,';
$l['e_sent'] = 'Emails sent,';
$l['nt_fetch_dbname'] = 'Could not fetch DB name from file: ';
$l['nt_fetch_mysqlpass'] = 'Could not fetch mysql password from file: ';

$l['virt_user_pass'] = 'Virtualizor User and Pass';
$l['here'] = 'here';

// SolusVM Wizard
$l['solusvm_import'] = 'SolusVM Import Wizard';
$l['solus_import_note'] = 'Please go through the <a href="http://www.virtualizor.com/wiki/SolusVM_Import_Guide" target="_blank">SolusVM Import Guide</a> before starting to import data';
$l['solus_nodes_link'] = 'View Nodes';
$l['solus_ng_link'] = 'Import Node Groups';
$l['solus_plans_link'] = 'Import Plans';
$l['solus_users_link'] = 'Import Users';
$l['solus_ips_link'] = 'Import IP Pools';
$l['solus_os_link'] = 'Import OS Templates';
$l['solus_vps_link'] = 'Import Virtual Servers';

// SolusVM Nodes
$l['solus_nodes'] = 'SolusVM and Virtualizor Nodes';
$l['solus_nodes_id'] = 'Node ID';
$l['solus_nodes_name'] = 'Node Name';
$l['solus_nodes_ip'] = 'Node IP';
$l['solus_nodes_virt'] = 'Virtualizor Equivalent';
$l['solus_back_to_wizard'] = 'Back to Wizard';
$l['solus_green_nodes'] = 'Green rows indicate matching nodes i.e. Virtualizor has been installed on top of SolusVM on those nodes.';

// SolusVM Node Groups
$l['err_importing_nodegroups'] = 'There was an error importing Node Group :';
$l['done_solusvm_nodegroups'] = 'The Node Groups were imported successfully. <a href="'.$globals['index'].'act=import&sa=solusvm">Click here to go back to the wizard.</a>';

$l['solus_nodegroups'] = 'SolusVM Node Groups Importer';
$l['solus_ng_id'] = 'ID';
$l['solus_ng_name'] = 'Group Name';
$l['solus_ng_nodes'] = 'Nodes';
$l['solus_ng_virt'] = 'Virtualizor Equivalent';
$l['solus_green_ng'] = 'Green background indicates Node Groups to be imported';

// SolusVM users
$l['err_importing_user'] = 'There was an error importing user :';
$l['done_solusvm_users'] = 'The users were imported successfully. <a href="'.$globals['index'].'act=import&sa=solusvm">Click here to go back to the wizard.</a>';

$l['solus_users'] = 'Import Users';
$l['solus_user_type_0'] = 'User';
$l['solus_user_type_1'] = 'Reseller';
$l['solus_user_type_2'] = 'Sub User';

// SolusVM Plans
$l['err_importing_plan'] = 'There was an error importing plan :';
$l['done_solusvm_plans'] = 'The plan(s) were imported successfully. <a href="'.$globals['index'].'act=import&sa=solusvm">Click here to go back to the wizard.</a>';

$l['solus_plans'] = 'Import Plans';
$l['solus_plan_id'] = 'ID';
$l['solus_plan_name'] = 'Plan Name';
$l['solus_plan_type'] = 'Type';
$l['solus_plan_ram'] = 'Ram';
$l['solus_plan_disk'] = 'Disk';
$l['solus_plan_bandwidth'] = 'Bandwidth';
$l['solus_plan_virt'] = 'Virtualizor Equivalent';
$l['solus_green_plans'] = 'The Green Background means that Virtualizor will import these plans.';

// SolusVM Import IPs
$l['err_importing_ipblock'] = 'There was an error importing the IP Block :';
$l['err_importing_ip'] = 'There was an error importing the IP of Block Node :';
$l['done_solusvm_ips'] = 'The IP Addresses were imported successfully. <a href="'.$globals['index'].'act=import&sa=solusvm">Click here to go back to the wizard.</a>';

$l['solus_no_ips'] = 'Nothing to import';
$l['solus_ipaddress'] = 'IP Addresses';
$l['solus_import_ips'] = 'Import IP Addresses';
$l['solus_ips_name'] = 'IP Block';
$l['solus_ips_type'] = 'Type';
$l['solus_ips_gw'] = 'Gateway';
$l['solus_ips_netmask'] = 'Netmask';
$l['solus_ips_ns'] = 'Nameserver(s)';
$l['solus_ips_servers'] = 'Server Relationship';
$l['solus_green_ips'] = 'The Green Background means that Virtualizor will import these objects.';

// SolusVM OS
$l['err_importing_os'] = 'There was an error importing OS :';
$l['done_solusvm_os'] = 'The OS were imported successfully. <a href="'.$globals['index'].'act=import&sa=solusvm">Click here to go back to the wizard.</a>';
$l['no_os_selected'] = 'Please select a Virtualizor OS for the SolusVM OS Template : ';

$l['solus_os'] = 'SolusVM Template Importer';
$l['solus_os_id'] = 'ID';
$l['solus_os_name'] = 'Template Name';
$l['solus_os_type'] = 'Type';
$l['solus_os_virt'] = 'Virtualizor Equivalent';
$l['solus_no_os'] = 'No OS Templates were found in SolusVM';
$l['solus_green_os'] = 'The Green Background means that Virtualizor will import these OS Templates. Those not marked in green are already there in Virtualizor.';
$l['solus_os_used_only'] = 'Only the templates used for creation of a VM will be listed here. Unused templates will not be listed here.';


// SolusVM VPS
$l['solus_ip_not_free'] = 'The IP address is not free for the VPS. IP :';
$l['solus_no_vps_left'] = 'No VPS to Import';
$l['err_importing_vps'] = 'There was an error importing VPS :';
$l['done_solusvm_vps'] = 'The VM(s) were imported successfully. <a href="'.$globals['index'].'act=import&sa=solusvm">Click here to go back to the wizard.</a>';

$l['solus_vps'] = 'SolusVM VPS Importer';
$l['solus_vps_id'] = 'ID';
$l['solus_vps_name'] = 'CTID';
$l['solus_vps_hostname'] = 'Hostname';
$l['solus_vps_type'] = 'Type';
$l['solus_vps_user'] = 'User';
$l['solus_vps_virt'] = 'Virtualizor Equivalent';

$l['solus_green_vps'] = 'The Green Background means that Virtualizor will import these VPS. Those not marked in green are already there in Virtualizor.';
$l['solus_no_vps'] = 'No VPS were found in this node of SolusVM';
$l['solus_vps_server'] = 'Choose the active server in the Top Bar to import VMs of that server';


// Featur Wizard
$l['feathur_import'] = 'Feathur Import Wizard';
$l['feathur_import_note'] = 'Please go through the <a href="http://www.virtualizor.com/wiki/Feathur_Import_Guide" target="_blank">Feathur Import Guide</a> before starting to import data';

// Feathur Nodes
$l['feathur_nodes'] = 'Feathur and Virtualizor Nodes';
$l['feathur_nodes_id'] = 'Node ID';
$l['feathur_nodes_name'] = 'Node Name';
$l['feathur_nodes_ip'] = 'Node IP';
$l['feathur_nodes_virt'] = 'Virtualizor Equivalent';
$l['feathur_back_to_wizard'] = 'Back to Wizard';
$l['feathur_green_nodes'] = 'Green rows indicate matching nodes i.e. Virtualizor has been installed on top of Feathur on those nodes.';

// Feathur Node Groups
$l['done_feathur_nodegroups'] = 'The Node Groups were imported successfully. <a href="'.$globals['index'].'act=import&sa=feathur">Click here to go back to the wizard.</a>';
$l['feathur_nodegroups'] = 'Feathur Node Groups Importer';
$l['feathur_ng_id'] = 'ID';
$l['feathur_ng_name'] = 'Group Name';
$l['feathur_ng_nodes'] = 'Nodes';
$l['feathur_ng_virt'] = 'Virtualizor Equivalent';
$l['feathur_green_ng'] = 'Green background indicates Node Groups to be imported';

$l['feathur_ips_name'] = 'IP Block'; 

// Feathur users
$l['done_feathur_users'] = 'The users were imported successfully. <a href="'.$globals['index'].'act=import&sa=feathur">Click here to go back to the wizard.</a>';

//Feathur ips

$l['done_feathur_ips'] = 'The IP Addresses were imported successfully. <a href="'.$globals['index'].'act=import&sa=feathur">Click here to go back to the wizard.</a>';

// Feathur OS
$l['done_feathur_os'] = 'The OS were imported successfully. <a href="'.$globals['index'].'act=import&sa=feathur">Click here to go back to the wizard.</a>';
$l['no_os_selected_feathur'] = 'Please select a Virtualizor OS for the Feathur OS Template : ';
$l['feathur_os'] = 'Feathur Template Importer';
$l['feathur_no_os'] = 'No OS Templates were found in Feathur';

// Feathur VPS

$l['done_feathur_vps'] = 'The VM(s) were imported successfully. <a href="'.$globals['index'].'act=import&sa=feathur">Click here to go back to the wizard.</a>';
$l['feathur_vps'] = 'Feathur VPS Importer';
$l['feathur_no_vps'] = 'No VPS were found in this node of Feathur';

// HyperVM Wizard
$l['hypervm_import'] = 'HyperVM Import Wizard';
$l['hypervm_import_note'] = 'Please go through the <a href="http://www.virtualizor.com/wiki/HyperVM_Import_Guide" target="_blank">HyperVM Import Guide</a> before starting to import data';
$l['hypervm_nodes_link'] = 'View Nodes';
$l['hypervm_ng_link'] = 'Import Node Groups';
$l['hypervm_plans_link'] = 'Import Plans';
$l['hypervm_users_link'] = 'Import Users';
$l['hypervm_ips_link'] = 'Import IP Pools';
$l['hypervm_os_link'] = 'Import OS Templates';
$l['hypervm_vps_link'] = 'Import Virtual Servers';

// HyperVM Nodes
$l['hypervm_nodes'] = 'HyperVM and Virtualizor Nodes';
$l['hypervm_nodes_id'] = 'Node ID';
$l['hypervm_nodes_name'] = 'Node Name';
$l['hypervm_nodes_ip'] = 'Node IP';
$l['hypervm_nodes_virt'] = 'Virtualizor Equivalent';
$l['hypervm_back_to_wizard'] = 'Back to Wizard';
$l['hypervm_green_nodes'] = 'Green rows indicate matching nodes i.e. Virtualizor has been installed on top of HyperVM on those nodes.';

// HyperVM Plans
$l['err_importing_plan'] = 'There was an error importing plan :';
$l['done_hypervm_plans'] = 'The plan(s) were imported successfully. <a href="'.$globals['index'].'act=import&sa=hypervm">Click here to go back to the wizard.</a>';

$l['hypervm_plans'] = 'Import Plans';
$l['hypervm_plan_id'] = 'ID';
$l['hypervm_plan_name'] = 'Plan Name';
$l['hypervm_plan_type'] = 'Type';
$l['hypervm_plan_ram'] = 'Ram';
$l['hypervm_plan_disk'] = 'Disk';
$l['hypervm_plan_bandwidth'] = 'Bandwidth';
$l['hypervm_plan_virt'] = 'Virtualizor Equivalent';
$l['hypervm_green_plans'] = 'The Green Background means that Virtualizor will import these plans.';

// HyperVM users
$l['err_importing_user'] = 'There was an error importing user :';
$l['done_hypervm_users'] = 'The users were imported successfully. <a href="'.$globals['index'].'act=import&sa=hypervm">Click here to go back to the wizard.</a>';

$l['hypervm_users'] = 'Import Users';
$l['hypervm_user_type_0'] = 'User';
$l['hypervm_user_type_1'] = 'Reseller';
$l['hypervm_user_type_2'] = 'Sub User';

// HyperVM Import IPs
$l['err_importing_ipblock'] = 'There was an error importing the IP Block :';
$l['err_importing_ip'] = 'There was an error importing the IP of Block Node :';
$l['done_hypervm_ips'] = 'The IP Addresses were imported successfully. <a href="'.$globals['index'].'act=import&sa=hypervm">Click here to go back to the wizard.</a>';

$l['hypervm_ipaddress'] = 'IP Addresses';
$l['hypervm_import_ips'] = 'Import IP Addresses';
$l['hypervm_ips_name'] = 'IP Block';
$l['hypervm_ips_type'] = 'Type';
$l['hypervm_ips_gw'] = 'Gateway';
$l['hypervm_ips_netmask'] = 'Netmask';
$l['hypervm_ips_ns'] = 'Nameserver(s)';
$l['hypervm_ips_servers'] = 'Server Relationship';
$l['hypervm_green_ips'] = 'The Green Background means that Virtualizor will import these objects.';

// HyperVM OS
$l['err_importing_os'] = 'There was an error importing OS :';
$l['done_hypervm_os'] = 'The OS were imported successfully. <a href="'.$globals['index'].'act=import&sa=hypervm">Click here to go back to the wizard.</a>';
$l['no_os_selected'] = 'Please select a Virtualizor OS for the HyperVM OS Template : ';

$l['hypervm_os'] = 'HyperVM Template Importer';
$l['hypervm_os_name'] = 'OS Name';
$l['hypervm_os_filename'] = 'Template File Name';
$l['hypervm_os_type'] = 'Type';
$l['hypervm_os_virt'] = 'Virtualizor Equivalent';
$l['hypervm_no_os'] = 'No OS Templates were found in HyperVM';
$l['hypervm_green_os'] = 'The Green Background means that Virtualizor will import these OS Templates. Those not marked in green are already there in Virtualizor.';
$l['hypervm_os_used_only'] = 'Only the templates used for creation of a VM will be listed here. Unused templates will not be listed here.';

// HyperVM VPS
$l['hypervm_ip_not_free'] = 'The IP address is not free for the VPS. IP :';
$l['hypervm_no_vps_left'] = 'No VPS to Import';
$l['err_importing_vps'] = 'There was an error importing VPS :';
$l['done_hypervm_vps'] = 'The VM(s) were imported successfully. <a href="'.$globals['index'].'act=import&sa=hypervm">Click here to go back to the wizard.</a>';

$l['hypervm_vps'] = 'HyperVM VPS Importer';
$l['hypervm_vps_id'] = 'ID';
$l['hypervm_vps_name'] = 'CTID';
$l['hypervm_vps_hostname'] = 'Hostname';
$l['hypervm_vps_type'] = 'Type';
$l['hypervm_vps_user'] = 'User';
$l['hypervm_vps_virt'] = 'Virtualizor Equivalent';

$l['hypervm_green_vps'] = 'The Green Background means that Virtualizor will import these VPS. Those not marked in green are already there in Virtualizor.';
$l['hypervm_no_vps'] = 'No VPS were found in this node of HyperVM';
$l['hypervm_vps_server'] = 'Choose the active server in the Top Bar to import VMs of that server';

?>
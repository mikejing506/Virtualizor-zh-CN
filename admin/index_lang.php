<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php (Admin)
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

$l['no_license'] = 'The LICENSE file could not be found! Please report this to Softaculous.';

//Tab Icons Images
$l['lm_vs'] = 'Virtual Servers';
$l['lms_vs'] = 'List All';
$l['lms_addvs'] = 'Create VPS';
$l['lms_rebuild'] = 'Rebuild VPS';
$l['lms_addvs_xenhvm'] = 'Create HVM VPS';
$l['lms_vnc'] = 'Launch VPS VNC';
$l['lms_migrate'] = 'Migrate VPS';

$l['lm_ippool'] = 'IP Pool';
$l['lms_ippool'] = 'List IP Pools';
$l['lms_addippool'] = 'Create IP Pool';
$l['lms_ips'] = 'List IPs';
$l['lms_addips'] = 'Add IP';
$l['lms_ipranges'] = 'List IPv6 Subnets';
$l['lms_addiprange'] = 'Add IPv6 Subnet';
$l['lms_managesubnets'] = 'Manage IPv6 Subnets';

$l['lm_servers'] = 'Servers';
$l['lms_servers'] = 'List Servers';
$l['lms_addserver'] = 'Add Server';
$l['lms_servergroups'] = 'Server Groups';
$l['lms_addsg'] = 'Add Server Group';
$l['lms_backupservers'] = 'List Backup Servers';
$l['lms_addbackupserver'] = 'Add Backup Server';

$l['lm_plans'] = 'Plans';
$l['lms_plans'] = 'List Plans';
$l['lms_addplan'] = 'Add Plan';
$l['lms_dnsplans'] = 'List DNS Plans';
$l['lms_adddnsplan'] = 'Add DNS Plan';

$l['lm_users'] = 'Users';
$l['lms_users'] = 'List Users';
$l['lms_adduser'] = 'Add User';
$l['lms_mail'] = 'Mail to User';
$l['lms_addcloud'] = 'Add Cloud User';

$l['lm_storage'] = 'Storage';
$l['lms_storage'] = 'List Storage';
$l['lms_addstorage'] = 'Add Storage';

$l['lm_ostemplates'] = 'Media';
$l['lms_iso'] = 'List ISO';
$l['lms_addiso'] = 'Add ISO';
$l['lms_ostemplates'] = 'OS Templates';
$l['lms_os'] = 'Template Browser';
$l['lms_addtemplate'] = 'Add Template';
$l['lms_createtemplate'] = 'Create Template';
$l['lms_mediagroups'] = 'Media Groups';
$l['lms_addmg'] = 'Add Media Group';
$l['lms_list_distros'] = 'List Distros';
$l['lms_add_distro'] = 'Add Distro';

$l['lm_recipes'] = 'Recipes';
$l['lms_recipes'] = 'List Recipes';
$l['lms_addrecipe'] = 'Add Recipe';

$l['lm_tasks'] = 'Tasks';

$l['lm_config'] = 'Configuration';
$l['lms_config'] = 'Master Settings';
$l['lms_config_slave'] = 'Slave Settings';
$l['lms_webuzo'] = 'Webuzo Settings';
$l['lms_emailconfig'] = 'Email Settings';
$l['lms_admin_acl'] = 'Administrator ACL';
$l['lms_serverinfo'] = 'Server Info';
$l['lms_multivirt'] = 'Multi Virtualization';
$l['lms_license'] = 'License Info';
$l['lms_hostname'] = 'Change Hostname';
$l['lms_maintenance'] = 'Maintenance';
$l['lms_kernelconf'] = 'Kernel Config';
$l['lms_defaultvsconf'] = 'Default VPS Config';
$l['lms_updates'] = 'Updates';
$l['lms_pma'] = 'phpMyAdmin';
$l['lms_emailtemp'] = 'Email Templates';

$l['lm_ssl'] = 'SSL Settings';
$l['lms_ssl'] = 'SSL Files';
$l['lms_sslcert'] = 'SSL Certificate';
$l['lms_createssl'] = 'Create Certificate';

$l['lm_cpu'] = 'CPU';
$l['lms_cpu'] = 'CPU Usage';
$l['lms_vscpu'] = 'VPS Utilization';

$l['lm_serverloads'] = 'VPS Server Loads';

$l['lm_ram'] = 'RAM';
$l['lms_ram'] = 'Ram Usage';
$l['lms_vsram'] = 'VPS Utilization';

$l['lm_disk'] = 'Disk';

$l['lm_bandwidth'] = 'Bandwidth';
$l['lms_bandwidth'] = 'Bandwidth Usage';
$l['lms_vsbandwidth'] = 'VPS Utilization';

$l['lm_tools'] = 'Tools';
$l['lm_logs'] = 'Logs';
$l['lm_filemanager'] = 'File Manager';

$l['lm_services'] = 'Services';
$l['lms_services'] = 'List Services';
$l['lms_res_httpd'] = 'Restart Web Server';
$l['lms_res_network'] = 'Restart Network';
$l['lms_res_sendmail'] = 'Restart Mail Server';
$l['lms_res_mysqld'] = 'Restart MySQL';
$l['lms_res_iptables'] = 'Restart IPTables';

$l['lm_processes'] = 'Processes';
$l['lm_performance'] ='Performance';
$l['lm_ssh'] ='SSH';

$l['lm_logs'] = 'Logs';
$l['lms_logs'] = 'Admin Logs';
$l['lms_userlogs'] = 'VPS and Users';
$l['lms_loginlogs'] = 'Login Logs';
$l['lms_iplogs'] = 'IP Logs';

$l['lm_databackup'] = ' Backup';
$l['lms_vpsbackupsettings'] = 'VPS Backup Settings'; 
$l['lms_vpsbackups'] = 'Restore VPS Backups'; 
$l['lms_databackup'] = 'Database Backup';
$l['lms_vpsbackup'] = 'VPS Backup';

$l['lm_firewall'] = 'Firewall';

$l['lm_import'] = 'Import';
$l['lms_import'] = 'Import VPS';
$l['lms_hypervm'] = 'From HyperVM';
$l['lms_veportal'] = 'From vePortal';
$l['lms_solusvm'] = 'From SolusVM';
$l['lms_feathur'] = 'From Feathur';

$l['lm_pdns'] = 'Power DNS';
$l['lms_pdns'] = 'List DNS Servers';
$l['lms_addpdns'] = 'Add DNS Server';
$l['lms_rdns'] = 'Add Reverse DNS Zone';

//$l['lm_migrate'] = 'Migrate VPS';

// Sub Menus
$l['sub_outdated'] = 'Outdated Installations';
$l['sub_byuser'] = 'By Users';
$l['sub_byscript'] = 'By Scripts';
$l['sub_gen_set'] = 'General';
$l['tab_import'] = 'Import';

$l['sl_ip'] = 'IP';
$l['sl_id'] = 'ID';

// alt texts
$l['alt_feedback'] = 'Feedback';
$l['alt_tasks'] = 'Migration Tasks';

$l['server_offline'] = 'The Server - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') is offline';
$l['server_status_0'] = 'The Server - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') is offline';
$l['server_status_2'] = 'The Server - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') has an expired license';

$l['not_allowed_title'] = 'Access Denied';
$l['err_acl_no_allowed'] = 'You do not have enough access privileges for this page.';
$l['err_acl_no_op_allowed'] = 'You do not have enough access privileges for this operation.';

// cluster.php
$l['cvd_off'] = 'Could not connect to the Remote Server';
$l['err_restore_process_running'] = 'A restore process is already running';
$l['err_nonexistant_vps'] = 'This VPS does not exist. Unable to restore to a non-existant VPS';

//Error Debug info
$l['show_debug_info'] = 'Show detailed information about this error';
$l['hide_debug_info'] = 'Hide detailed information about this error';

$l['all_servers'] = 'All Servers';

//Admin email template
$l['admin_mail_addvs_sub'] = 'VPS created';
$l['admin_mail_addvs'] = 'Hi,

The VPS has been created. The following are its details:
VPSID : {{vpsid}}
Username : root
Root Password : {{root_pass}}
IP(s) : {{ips}}
{{macdetails}}

{{vncdetails}}
	  
Regards,
{{sn}}';

//Admin email error template
$l['admin_mail_addvs_err_sub'] = 'Error in creating the VPS';
$l['admin_mail_addvs_err'] = 'Hi,

An error occurred while creating the VPS ( VPSID:{{vpsid}} ). The following are its details:

ERROR: {{err_msg}}

Node Details:
IP : {{node_ip}}
	  
Regards,
{{sn}}';

//Client email template
$l['mail_addvs_sub'] = 'VPS created';
$l['mail_addvs'] = 'Hi,

Your VPS has been created.
The Login details are as follows :
Username : {{username}}
Password : {{password}}
URL : https://{{host}}:4083
	  http://{{host}}:4082

Your VPS details are :
VPSID : {{vpsid}}
Username : root
Root Password : {{root_pass}}
IP(s) : {{ips}}
{{macdetails}}

{{vncdetails}}
	  
Regards,
{{sn}}';

//Admin email delete template
$l['admin_mail_del_vs_sub'] = 'VPS Deleted';
$l['admin_mail_del_vs'] = 'Hi,

The VPS has been deleted. The following are its details:
VPSID : {{vpsid}}
HOSTNAME : {{hostname}}

Node Details:
IP : {{node_ip}}
	  
Regards,
{{sn}}';

//Admin email delete error template
$l['admin_mail_del_vs_err_sub'] = 'Error in destroying the VPS';
$l['admin_mail_del_vs_err'] = 'Hi,

An error occurred while destryoing the VPS ( VPSID:{{vpsid}} ). The following are its details:

ERROR: {{err_msg}}

Node Details:
IP : {{node_ip}}
	  
Regards,
{{sn}}';

//Admin email rebuildc template
$l['admin_mail_rebuild_vs_sub'] = 'VPS rebuilt';
$l['admin_mail_rebuild_vs'] = 'Hi,

The VPS has been rebuilt. The following are its details:
VPSID : {{vpsid}}
Username : root
Root Password : {{root_pass}}
IP(s) : {{ips}}
{{macdetails}}

{{vncdetails}}
	  
Regards,
{{sn}}';

//Admin email rebuild error template
$l['admin_mail_rebuild_vs_err_sub'] = 'Error in rebuilding the VPS';
$l['admin_mail_rebuild_vs_err'] = 'Hi,

An error occurred while rebuilding the VPS ( VPSID:{{vpsid}} ). The following are its details:

ERROR: {{err_msg}}

Node Details:
IP : {{node_ip}}
	  
Regards,
{{sn}}';

//createtemplate email template
$l['createtemplate_sub'] = 'Template Created';
$l['createtemplate_vs'] = 'Hi,

The Template has been created from the VPS ( VPSID:{{vpsid}} ). The following are its details:
Filename : {{filename}}

Node Details:
IP : {{node_ip}}
	  
Regards,
{{sn}}';

//createtemplate Error email template
$l['createtemplate_err_sub'] = 'Error in creating template';
$l['createtemplate_vs_err'] = 'Hi,

An error occured while creating the template from the VPS ( VPSID:{{vpsid}} ). The following are its details:
ERROR: {{err_msg}}

Node Details:
IP : {{node_ip}}
	  
Regards,
{{sn}}';

//Admin email os download 
$l['admin_dlos_sub'] = 'OS Templates Download Report';
$l['admin_dlos_body'] = '
The following is the result of the OS Templates download:

{{os_name}}

Regards,
{{sn}}
';

// Migration Complete Email Template
$l['mig_done_sub'] = 'Migration Status of VPS {{vpsid}} : Completed';
$l['mig_done_body'] = 'Hi,

The Migration process for VPS {{vpsid}} has been completed. Following are the details :

From Server : {{from_ip}}
To Server : {{to_ip}}

VPS ID : {{vpsid}}
New VPS ID : {{new_vpsid}}

VPS name : {{vps_name}}
New VPS name : {{new_vpsname}}

Regards,
{{sn}} ({{primary_ip}})
';

// Migration Failed Email Template
$l['mig_fail_sub'] = 'Migration Status of VPS {{vpsid}} : Failed';
$l['mig_fail_body'] = 'Hi,

The Migration process for VPS {{vpsid}} has failed. Following are the details : 

From Server : {{from_ip}}
To Server : {{to_ip}}

VPS ID : {{vpsid}}

VPS name : {{vps_name}}

Regards,
{{sn}} ({{primary_ip}})
';

// Reset Enduser password 

$l['mail_sub'] = 'Reset Password';
$l['mail_body'] = 'Hi,

A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
https://{{node_ip}}:4083/index.php?act=login&sa=resetpass&key=&soft-1;

Please Note : Above link is valid for 24 hours only.

Regards,
{{sn}}';

$l['wiki_help'] = 'Click here to go to Wiki';
$l['search'] = 'Search';
$l['vpsid'] = 'VPS ID';
$l['no_res'] = 'No results were found for your search query';

/* Common Language to be used on pages */
$l['manage'] = 'Manage';
$l['ms_delete'] = 'Delete';
$l['del_conf'] = 'Are you sure, you want to delete the selected item(s) ?';
$l['with_selected'] = 'With Selected :';
$l['nothing_selected'] = 'Nothing selected !';
$l['no_action'] = 'No Action Selected !';
$l['action_msg'] = 'Please wait, Action in Progress.';
$l['notify_msg'] = 'You will be notified once the Action is Completed.';
$l['action_completed'] = 'The action was completed successfully. Reloading the Page !';
$l['go'] = 'Go';
$l['all'] = 'All';
$l['entries_per_page'] = 'Rows';
$l['os_size_mismatch'] = 'The OS could not be downloaded';
$l['go_back'] = 'Go Back';
$l['fname'] = 'First Name';
$l['lname'] = 'Last Name';
$l['edit'] = 'Edit';
$l['delete'] = 'Delete';
$l['suspend_mail_sub'] = 'Your VPS has been suspended.';
$l['suspend_mail_message'] = 'Hi,

Your VPS `{{hostname}}` has been suspended by Admin.

Regards,
{{sn}}';

?>
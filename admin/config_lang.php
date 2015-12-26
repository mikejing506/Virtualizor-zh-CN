<?php

//////////////////////////////////////////////////////////////
//===========================================================
// config_lang.php
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

$l['no_sn'] = 'No site name was specified.';
$l['no_cookie_name'] = 'No cookie name was specified';
$l['invalid_cookie_name'] = 'You specified an invalid cookie name';
$l['no_soft_email'] = 'No email address was provided';
$l['wrong_soft_email'] = 'The email address you submitted is invalid';
$l['no_lang'] = 'No language was selected';
$l['wrong_lang'] = 'The selected language is invalid';
$l['no_theme_folder'] = 'No theme was selected';
$l['wrong_theme_folder'] = 'The selected theme is invalid';
$l['no_timezone'] = 'No timezone was selected';
$l['wrong_timezone'] = 'The selected timezone is invalid';
$l['no_cron_time'] = 'No cron job time was specified';
$l['no_emps_cron_time'] = 'No cron job time for EMPS was specified. EMPS is the Virtualizor stack of NGinx, PHP and MySQL';
$l['no_off_message'] = 'No switch off subject was specified';
$l['no_off_subject'] = 'No switch off message was specified';
$l['saving_error'] = 'There were some errors while saving the settings';
$l['no_dbhost'] = 'No Host is Posted';
$l['no_db'] = 'No Database is Posted';
$l['no_dbuser'] = 'No Database user is Posted';
$l['no_dbpass'] = 'No Database Password is Posted';
$l['no_theme'] = 'No Theme was Posted';
$l['no_admin_logs'] = 'The Admin logs duration was not specified';
$l['no_vps_logs'] = 'The VPS and User logs duration was not specified';
$l['no_login_logs'] = 'The Login logs duration was not specified';
$l['no_system_logs'] = 'The VPS System logs duration was not specified';
$l['no_status_logs'] = 'The VPS Status logs duration was not specified';
$l['no_bandwidth_logs'] = 'The Bandwidth logs duration was not specified';
$l['no_sess_len'] = 'The Session Length was not given';
$l['invalid_update'] = 'An invalid update preference was submitted';
$l['no_xen_dom0mem'] = 'Please specify the Domain-0 memory';
$l['invalid_xen_dom0mem'] = 'The Domain-0 memory should not be less than 512 MB';
$l['no_vg'] = 'Please specify the Volume Group (VG)';
$l['inv_vg'] = 'The specified volume group doesnt not exist.';
$l['login_attempts_invalid'] = 'The <b>Max Login Attempts</b> cannot be less than 2';
$l['login_ban_time_invalid'] = 'The <b>Failed Login Ban Time</b> cannot be less than 2';
$l['invalid_disk_limit'] = 'An invalid DISK Limit was submitted';
$l['vnc_ip'] = 'Set VNC IP';
$l['vnc_ip_exp'] = 'Use this option only when Virtualizor is installed on an Internal Network';
$l['wrong_vnc_ip'] = 'Please enter a valid IP for VNC';
$l['ping_ip'] = 'Set Ping IP';
$l['ping_ip_exp'] = 'When the Virtualizor Bridge Network is started it will try to ping to this IP to check if the server has connectivity. If empty, then Virtualizor will ping 4.2.2.1';
$l['wrong_ping_ip'] = 'Please enter valid Ping IP';
$l['inv_overcommit_val'] = 'You cannot have the Memory Overcommit value less than the actual Memory';
$l['overcommit'] = 'RAM Overcommit';
$l['overcommit_exp'] = 'If specified the total allocated RAM for all VPS on the physical server cannot exceed this value.';
$l['slave_cant'] = 'Master Settings Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to edit the Master Settings !';


//THEME Settings
$l['<title>'] = 'Configuration';
$l['heading'] = 'Configuration';
$l['done'] = 'The Configuration has been changed.';
$l['dbhost'] = 'Database Host';
$l['database'] = 'Database Name';
$l['dbuser'] = 'Database User';
$l['dbpass'] = 'Database Password';
$l['sitename'] = 'Site Name';
$l['cookie_name'] = 'Cookie Name';
$l['sitename_exp'] = 'The name of the server or company using Virtualizor. It will appear in many pages of the Virtualizor Panel';
$l['copy_right'] = 'Copyright';
$l['copy_right_exp'] = 'The Copyright that appears in the footer';
$l['cook_name_exp'] = 'The name of the cookie that will be stored on browsers.';
$l['comp_output'] = 'Compress Output';
$l['comp_output_exp'] = 'This will compress output and it saves a lot of bandwidth.';
$l['cpu_nm'] = 'Show CPU Model name';
$l['cpu_nm_exp'] = 'Show the CPU Model name in all VPS.';
$l['choose_lang'] = 'Choose Language';
$l['choose_lang_exp'] = 'Choose your preferred language';
$l['choose_theme'] = 'Choose Theme';
$l['choose_theme_exp'] = 'The selected theme will be the default theme throughout Virtualizor';
$l['soft_email'] = 'Email Address';
$l['soft_email_exp'] = 'The email address for the FROM headers.';
$l['timezone'] = 'Timezone';
$l['saveconfig'] = 'Save Configuration';
$l['cron_time'] = 'Cron Job Frequency';
$l['cron_time_exp'] = 'The cron job that will collect all information of VPS(s) and also check for updates.';
$l['emps_cron_time'] = 'EMPS Cron Job Frequency';
$l['emps_cron_time_exp'] = 'The EMPS cron job that will update the EMPS stack of PHP, NGinx and MySQL. We recommend to have this set for twice a month';
$l['logo_url'] = 'Logo URL';
$l['logo_url_exp'] = 'If empty the Virtualizor logo will be shown';
$l['gen_set'] = 'General Settings';
$l['data_set'] = 'Database Settings';
$l['updatesettings'] = 'Update Settings';
$l['email_upd_soft'] = 'Notify Updates'; 
$l['email_upd_soft_exp'] = 'Will send emails when Virtualizor upgrades are available or Auto Upgrade is performed';
$l['email_upd_soft_client'] = 'Disable Client Emails'; 
$l['email_upd_soft_client_exp'] = 'When a new VPS is created, no email will be sent to the client';
$l['auto_upd_virtualizor'] = 'Auto Update Virtualizor';
$l['auto_upd_virtualizor_exp'] = 'If enabled Virtualizor will automatically update itself to the latest version.<br />The <b>Stable</b> branch is launched after the Release Candidate has been thorughly tested. <br />The <b>Release Candidate</b> branch contains the latest version and features.';
$l['never_update'] = 'Never Update';
$l['stable'] = 'Stable (Recommended)';
$l['release_cand'] = 'Release Candidate (Experimental!)';
$l['logs_settings'] = 'Logs Settings';
$l['admin_logs'] = 'Admin Logs Duration';
$l['admin_logs_exp'] = 'Admin logs older than the specified days will be deleted. (Enter 0 for no limit)';
$l['vps_logs'] = 'VPS Logs Duration';
$l['vps_logs_exp'] = 'VPS logs older than the specified days will be deleted. (Enter 0 for no limit)';
$l['login_logs'] = 'Login Logs Duration';
$l['login_logs_exp'] = 'Login logs older than the specified days will be deleted. (Enter 0 for no limit)';
$l['system_logs'] = 'VPS System Logs Duration';
$l['system_logs_exp'] = 'Logs older than the specified days will be deleted. (Enter 0 for no limit)';
$l['status_logs'] = 'VPS Status Logs Duration';
$l['status_logs_exp'] = 'Logs older than the specified days will be deleted. (Enter 0 for no limit)';
$l['bandwidth_logs'] = 'Bandwidth Logs Duration';
$l['bandwidth_logs_exp'] = 'Logs older than the specified days will be deleted. (Enter 0 for no limit)';
$l['sess_len'] = 'Session Timeout';
$l['sess_len_exp'] = 'Seconds before an unused session timesout';
$l['update_settings'] = 'Update Settings';
$l['interface'] = 'Network Interface';
$l['interface_exp'] = 'The public network interface of the server. If left empty, <strong>eth0</strong> will be assumed as the default interface.';
$l['xen_settings'] = 'Xen Settings';
$l['xen_pvbridge'] = 'Paravirtualization Bridge';
$l['xen_pvbridge_exp'] = 'This setting allows you to define the default BRIDGE used by the Xen PV Virtual Servers.';
$l['xen_hvmbridge'] = 'HVM Bridge';
$l['xen_hvmbridge_exp'] = 'This setting allows you to define the default BRIDGE used by the Xen HVM Virtual Servers.';
$l['xen_dom0mem'] = 'Domain-0 / Host Memory';
$l['xen_dom0mem_exp'] = 'In Xen, the Domain-0 is the physical node. This will set the memory available to the Domain-0. The remaining memory of the physical node will be available for the VPS.';
$l['vg'] = 'Volume Group';
$l['vg_exp'] = 'The current default Volume Group on which VPSs are created. This option is disabled if a VPS already exists on the Volume Group.';
$l['security_settings'] = 'Security Settings';
$l['login_attempts'] = 'Max Login Attempts';
$l['login_attempts_exp'] = 'The number of attempts allowed before banning the IP for a period of time specified in the <b>Failed Login Ban Time</b>';
$l['login_ban_time'] = 'Failed Login Ban Time';
$l['login_ban_time_exp'] = 'The time in minutes to ban the IP of the user who has crossed the <b>Max Login Attempts</b>';
$l['notify_settings'] = 'Notify Settings';
$l['alert_load_limit'] = 'Alert on High Load';
$l['alert_load_limit_exp'] = 'If the <b>15 minute</b> load of the hardware node exceeds the limit set here, an email will be sent to the Administrator.';
$l['alert_disk_limit'] = 'Disk Alert Limit';
$l['alert_disk_limit_exp'] = 'If the Disk Usage of the Node exceeds the set limit (in %), an email will be sent to the Administrator.';
$l['openvz_settings'] = 'OpenVZ Settings';
$l['vswap'] = 'Enable VSwap';
$l['vswap_exp'] = 'Enable VSwap for this server. This will be effective only if RHEL/SL/CentOS 6 is the Operating System of the NODE.<br />Please refer to <a href="http://www.virtualizor.com/wiki/VSwap_Openvz" target="_blank">this</a> article for further information.';
$l['enduser_settings'] = 'Enduser Settings';
$l['disable_icons_monitor'] = 'Disable Monitoring';
$l['disable_icons_monitor_exp'] = 'Disable the Monitor icon for the endusers';
$l['disable_icons_cp'] = 'Disable Control Panel';
$l['disable_icons_cp_exp'] = 'Disable the Control Panel installation icon for the endusers';
$l['disable_recipes'] = 'Disable Recipes';
$l['disable_recipes_exp'] = 'Disable Recipes for the endusers';
$l['node_bandwidth'] = 'Node Bandwidth';
$l['node_bandwidth_exp'] = 'The total bandwidth of the Node in GB. If set to Zero, the bandwidth calculation will assume unlimited bandwidth';
$l['change_ssh_port'] = 'Change SSH port';
$l['change_ssh_port_exp'] = 'Set the SSH port for your Server. Its recommeded to change this for better security.';
$l['ssh_port_invalid'] = 'Please enter a valid SSH port';
$l['max_ssh_login'] = 'Maximum SSH Login';
$l['max_ssh_login_exp'] = 'Set the maximum SSH login attempts';
$l['ssh_login_invalid'] = 'Please enter a valid number for the maximum login attempts via SSH';
$l['overcommit_check'] = 'Allow Memory Overcommit';
$l['overcommit_check_exp'] = '<b>NOTE</b> : This may compromise your VPS performance.';
$l['support'] = 'Support URL';
$l['support_exp'] = 'Specify the support URL which will be displayed in the Enduser Panel.';
$l['enable_tuntap_cp'] = 'Enable Tun/Tap settings in Client panel';
$l['enable_tuntap_cp_exp'] = 'By default Tun/Tap icon will be disabled.';
$l['enable_ppp_cp'] = 'Enable PPP settings in Client panel';
$l['enable_ppp_cp_exp'] = 'By default PPP icon will be disabled.';
$l['enable_enduser_vnc'] = 'Allow VNC Management';
$l['enable_enduser_vnc_exp'] = 'If enabled, the user can turn on/off the VNC of his VPS';
$l['show_server'] = 'Show Server Name/Location';
$l['show_server_exp'] = 'If enabled, Endusers can see the Server name or Location of the VPS';
$l['band_suspend'] = 'Disable Bandwidth Suspension';
$l['band_suspend_exp'] = 'Global setting to disable the Bandwidth Suspension from all the VPS';
$l['novnc_settings'] = 'noVNC Settings';
$l['novnc'] = 'Enable noVNC';
$l['novnc_exp'] = 'This option will enable the HTML5 VNC viewer along with the JAVA VNC Viewer';
$l['novnc_master_only'] = 'Master Proxy Only';
$l['novnc_master_only_exp'] = 'If enabled, only the Master will have the noVNC Websocket service';
$l['novnc_server_name'] = 'Use Server Hostname';
$l['novnc_server_name_exp'] = 'If enabled, then the server name (instead of its IP) will be used as the host to access the noVNC service. Please ensure the name of the server in the master is correct.';
$l['disable_login_logo'] = 'Disable Login Logo';
$l['exp_disable_login_logo'] = 'If checked the Logo will be hidden at Login for the endusers. This is useful for helping reseller or cloud users to rebrand their panels.';
$l['disable_backup_cp'] = 'Disable Backup in Client panel';
$l['disable_backup_cp_exp'] = 'By default Backup icon will be Displayed.';

// Addvs IO/CPU priority settings
$l['addvs_io_cpu_settings'] = 'Create VPS IO/CPU priority';
$l['nice'] = 'Process Priority';
$l['nice_exp'] = 'The amount of CPU time the VPS creation process will get. Values from 19 (least favourable) to -20 (most favourable)';
$l['ionice_class'] = 'Process I/O Class';
$l['ionice_class_exp'] = 'I/O class for the VPS creation process';
$l['ionice_prio'] = 'Process I/O Priority';
$l['ionice_prio_exp'] = 'I/O priority for the VPS creation process. Values from 0 (most favourable) to 7 (least favourable)';
$l['addvs_io_cpu_note'] = 'You need to set all the three values for this to come into effect during VPS creation';

// Queue Creation Notification
$l['queue_creation'] = 'Enable Queue Creation';
$l['queue_creation_exp'] = 'e.g. If you set the value to 2, only 2 VPS will be created at a time. Other creation processes will be queued';

$l['vps_limit'] = 'VPS Creation Limit';
$l['vps_limit_exp'] = 'This config is to restrict the number of VPS that will be created on this server. Set 0 for no restriction.';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = 'Ploop will be enabled for all newly created VPS.';

$l['pv_on_hvm'] = 'PV-on-HVM';
$l['pv_on_hvm_exp'] = 'Global setting to enable PV-on-HVM for all the new VMs';

$l['band_calc_creation'] = 'Service period bandwidth calculation';
$l['band_calc_creation_exp'] = 'This option will calculate the bandwidth as per the VPS service period. For example, if the VPS is created on 15th Jan, the bandwidth calculation will be from 15 Jan to 14th Feb.';

$l['enable_rdns'] = 'Enable RDNS';
$l['enable_rdns_exp'] = 'If checked then the Reverse DNS will be ON for VPS. However you will need to setup the DNS servers.';

$l['master_setting_note'] = '<b>NOTE</b> : These settings are global settings, which will be synced across all the slave servers. You can also change settings on a per node basis from the <a href="'.$globals['index'].'act=config_slave">Slave Settings</a> wizard.';
$l['slave_setting_note'] = '<b>NOTE</b> : These settings are individual settings for the Active Node. These settings will override the Master Settings on the Active Slave Node.';

$l['use_xl'] = 'Use XL';
$l['use_xl_exp'] = 'Use the <b>xl</b> tool instead of the deprecated <b>xm</b> tool. NOTE : xend service must be shutdown and prevented to start';
$l['auto_add_zone'] = 'Auto Add rDNS Zone';
$l['auto_add_zone_exp'] = 'If checked, rDNS zones will be auto created for records whose zones are not present';
$l['disable_apicredential'] = 'Disable API Credential Access in Client panel';
$l['exp_disable_apicredential'] = 'If checked than users will not be able to generate API credentials.';
$l['enable_console'] = 'Enable Serial Console';
$l['enable_console_exp'] = 'Enable Serial console for OpenVZ containers. Warning, SSH users will be created on the OpenVZ Nodes for users to use this feature.';
$l['curl_timeout'] = 'CURL Timeout';
$l['curl_timeout_exp'] = 'If set than Virtualizor will use this value as CURL time out. Default is 3. Please set greater than 3 if you want to change the timeout.';
$l['del_novps_user'] = 'Delete User with no VPS';
$l['del_novps_user_exp'] = 'If checked, then users with no VPS will be deleted on a daily basis.';
$l['del_slave_ostemplate'] = 'Delete OS Template on Slave Server';
$l['del_slave_ostemplate_exp'] = 'If checked then OS template from all Slave servers will be deleted. This is useful to save space on the slaves. But it will require much more bandwidth as the template will be redownloaded every time a VPS is created.';
$l['disable_master_vpsname'] = 'Disable Master VPS Name';
$l['disable_master_vpsname_exp'] = 'By default the Master decides the VPS name and uses the highest VPS name available in the Cluster. If this is checked, the VPS name will be decided by each individual slave server.';
$l['showsearch'] = 'Display Search Box (By Default)';
$l['showsearch_exp'] = 'If checked, Search Box will be displayed on pages where applicable in the admin panel.';
$l['site_domain'] = 'Site domain';
$l['site_domain_exp'] = 'If empty server\'s IP will be used instead of the domain.';
$l['turnoff_virtdf'] = 'Turn Off Virt-df';
$l['turnoff_virtdf_exp'] = 'If checked, virt-df will be not be used to get the disk usage in hourly cron, and the disk uasgae will be detected on startup of individual VPS(s).';
$l['disable_newtheme'] = 'Disable New Theme';
$l['disable_newtheme_exp'] = 'If checked, Enduser will not be able to use the new UI.';
$l['enable_idsort'] = 'Sort VPS by ID in descending order';
$l['enable_idsort_exp'] = 'If checked newly created VPS will be shown first';
$l['allow_virtio'] = 'Allow Virtio';
$l['allow_virtio_exp'] = 'If checked Cloud users can enable virtio for their users';
$l['disable_rescue'] = 'Disable Rescue mode';
$l['disable_rescue_exp'] = 'Disable Rescue mode for the endusers';
$l['disable_change_hostname'] = 'Disable change of Hostname';
$l['disable_change_hostname_exp'] = 'Endusers will not be able to change the hostname';
$l['disable_change_password'] = 'Disable change of VPS Password';
$l['disable_change_password_exp'] = 'Endusers will not be able to change the password of their VPS';
$l['disable_vps_config'] = 'Disable VPS Configuration';
$l['disable_vps_config_exp'] = 'Endusers will not be able to change VPS configuration';
$l['disable_os_reinstall'] = 'Disable OS reinstall';
$l['disable_os_reinstall_exp'] = 'Endusers will not be able to reinstall the OS';
$l['disable_ssh'] = 'Disable SSH';
$l['disable_ssh_exp'] = 'Endusers will not be able to access SSH from panel';
$l['vcores_limit'] = 'Virtual Cores';
$l['vcores_limit_exp'] = 'Number of virtual cores available for VPS creation. Once the limit is reached VPSs can not be created on this node.';
$l['disable_suspend_email'] = 'Disable Email on VPS Suspension';
$l['disable_suspend_email_exp'] = 'Enduser will not receive any email on VPS suspension';

?>
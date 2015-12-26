<?php

//////////////////////////////////////////////////////////////
//===========================================================
// enduser_lang.php
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

// Header
$l['loading'] = 'Loading...';
$l['disconnected'] = 'Not connected. Please try again.';
$l['save'] = 'Save';
$l['delete'] = 'Delete';
$l['edit'] = 'Edit';
$l['id'] = 'ID';
$l['ip'] = 'IP Address';
$l['name'] = 'Name';
$l['domain'] = 'Domain';
$l['manage'] = 'Manage';
$l['desc'] = 'Description';
$l['cancel'] = 'Cancel';
$l['ram'] = 'Ram';
$l['burst'] = 'Burst';
$l['user'] = 'User';
$l['state'] = 'Status';
$l['hostname'] = 'Hostname';
$l['close'] = 'Close';
$l['disk'] = 'Disk';
$l['time'] = 'Time';
$l['cpu'] = 'CPU';
$l['strength_indicator'] = 'Strength Indicator';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';
$l['pass_match'] = 'Passwords do not match';
$l['refresh_page'] = 'Reload this page';
$l['logo'] = 'Logo';
$l['execute'] = 'Execute';
$l['go'] = 'Go';
$l['info'] = 'Information';
$l['total_speed'] = 'Total speed';
$l['upload'] = 'Upload';
$l['download'] = 'Download';
$l['free'] = 'Free';
$l['used'] = 'Used';
$l['in'] = 'In';
$l['out'] = 'Out';
$l['usage'] = 'Usage';
$l['with_selected'] = 'With selected';
$l['jan'] = 'Jan';
$l['feb'] = 'Feb';
$l['mar'] = 'Mar';
$l['apr'] = 'Apr';
$l['may'] = 'May';
$l['jun'] = 'Jun';
$l['jul'] = 'Jul';
$l['aug'] = 'Aug';
$l['sep'] = 'Sep';
$l['oct'] = 'Oct';
$l['nov'] = 'Nov';
$l['dec'] = 'Dec';
$l['month'] = 'Month';
$l['bandwidth'] = 'Bandwidth';
$l['january'] = 'January';
$l['february'] = 'February';
$l['march'] = 'March';
$l['april'] = 'April';
$l['may_long'] = 'May';
$l['june'] = 'June';
$l['july'] = 'July';
$l['august'] = 'August';
$l['september'] = 'September';
$l['october'] = 'October';
$l['november'] = 'November';
$l['december'] = 'December';
$l['sunday'] = 'Sunday';
$l['monday'] = 'Monday';
$l['tuesday'] = 'Tuesday';
$l['wednesday'] = 'Wednesday';
$l['thursday'] = 'Thursday';
$l['friday'] = 'Friday';
$l['saturday'] = 'Saturday';
$l['total'] = 'Total';
$l['day'] = 'Day';

// Datatable related langs
$l['to'] = 'to';
$l['of'] = 'of';
$l['search'] = 'Search';
$l['entries'] = 'Entries';
$l['showing'] = 'Showing';
$l['show'] = 'Show';
$l['previous'] = 'Previous';
$l['next'] = 'Next';
$l['first'] = 'First';
$l['last'] = 'Last';
$l['no_data_avail'] = 'No data available in table';
$l['filtered_from'] = 'filtered from';
$l['total_entries'] = 'total entries';
$l['no_match_record'] = 'No matching records found';

$l['is_managed'] = 'This VPS can be managed by Admin only.';

// VPS Manage lang string - prefix : vm_
$l['vm_no_new'] = 'You did not specify the new password.';
$l['vm_no_conf'] = 'The confirmation password is missing.';
$l['vm_no_match'] = 'The passwords you gave do not match';
$l['vm_err_changing'] = 'There were some errors while changing the password';
$l['vm_no_nonalphanumeric'] = 'No Non-Alphanumeric characters are allowed';

// Theme strings
$l['vm_vpsmanagement'] = 'VPS Management';
$l['vm_advoptions'] = 'Advanced Options';
$l['vm_lm_ssh'] = 'SSH';
$l['vm_lm_controlpanel'] = 'Control Panel';
$l['vm_info'] = 'Info';
$l['vm_lv_type'] = 'Type';
$l['vm_lv_os'] = 'OS';
$l['vm_lv_hname'] = 'Hostname';
$l['vm_lv_sname'] = 'Server';
$l['vm_lv_IP'] = 'IP Address';
$l['vm_vps_start'] = 'Start';
$l['vm_vps_stop'] = 'Stop';
$l['vm_vps_restart'] = 'Restart';
$l['vm_vps_poweroff'] = 'Power Off';
$l['vm_vps_suspended'] = 'Suspended!';
$l['vm_monitor'] = 'Monitoring';
$l['vm_lm_changepass'] = 'Change Password';
$l['vm_lm_hvmsettings'] = 'VPS Configuration';
$l['vm_lm_vnc'] = 'VNC';
$l['vm_lm_vncpass'] = 'VNC Password';
$l['vm_lm_ostemp'] = 'OS Reinstall';
$l['vm_lv_backtolist'] = 'Back to VPS List';
$l['vm_bandwidth'] = 'Bandwidth';
$l['vm_lm_rescue_mode'] = 'Rescue Mode';
$l['vm_lm_support'] = 'Support';
$l['vm_lv_status'] = 'Status';
$l['vm_lm_manage_subnet'] = 'Manage IPv6 Subnets';
$l['vm_lm_console'] = 'Serial Console';
$l['vm_tip_startstop'] = 'Start/Stop the VPS';
$l['vm_tip_restart'] = 'Restart the VPS';
$l['vm_tip_poweroff'] = 'Poweroff the VPS';
$l['vm_tip_hname'] = 'Change the hostname of the VPS';
$l['vm_tip_rootpassword'] = 'Change the root password of the VPS';
$l['vm_tip_ips'] = 'Set the Primary IP';
$l['vm_tip_vpsconfig'] = 'Configure Misc settings';
$l['vm_tip_ssh'] = 'Connect to the VPS via SSH.';
$l['vm_tip_vnc'] = 'Connect to the VPS via VNC.';
$l['vm_tip_vncpass'] = 'Change the VNC Password.';
$l['vm_tip_os'] = 'Reinstall the current OS or Install a new one.';
$l['vm_tip_cp'] = 'Install a control panel of your choice.';
$l['vm_tip_backup'] = 'Backup or Restore the VPS.';
$l['vm_tip_monitor'] = 'Monitor resource usage of the VPS.';
$l['vm_tip_proc'] = 'View a list of running processes within the VPS.';
$l['vm_tip_services'] = 'View a list of running services within the VPS.';
$l['vm_tip_slogs'] = 'View status logs of the VPS.';
$l['vm_tip_logs'] = 'View logs of the VPS.';
$l['vm_tip_sysalerts'] = 'View critical system alerts of the VPS.';
$l['vm_tip_bandwidth'] = 'View the Bandwidth usage of this VPS';
$l['vm_tip_rescue'] = 'Rescue Mode';
$l['vm_tip_manage_subnet'] = 'Add/Delete IPv6 Address';
$l['vm_ssh_notice'] = 'SSh will only work if java is installed and enabled';
$l['vm_tip_console'] = 'Console Access';
$l['vm_vps_access_control'] = 'Power Options';
$l['vm_bw_stats'] = 'Bandwidth Statistics';
$l['vm_monthly_chart'] = 'Monthly Chart';
$l['vm_server_stats'] = 'Server Stats';
$l['vm_lm_status_online'] = 'Online';
$l['vm_lm_status_offline'] = 'Offline';
$l['vm_lm_status_suspended'] = 'Suspended';
$l['vm_vps_is_suspended'] = 'This VPS is suspended. You cannot perform any operations for the VPS !';
$l['vm_suspend_reason_bw'] = 'This VPS is suspended due to Bandwidth Over Usage. You cannot perform any operations for the VPS !';
$l['vm_tip_recipe'] = 'Recipe Panel';
$l['vm_lm_recipe'] = 'Recipes';

// listvs lang string - prefix : lst_
$l['lst_virtual_servers'] = 'Virtual Servers';
$l['lst_page_head'] = 'Virtual Servers';
$l['lst_no_vs'] = 'You do not have any VPS in the account';
$l['lst_lv_mb'] = 'MB';
$l['lst_vps_id_stat_off'] = 'Offline';
$l['lst_vps_id_stat_on'] = 'Online';
$l['lst_lv_managevps'] = 'Click to manage this VPS';
$l['lst_lv_type'] = 'Type';
$l['lst_lv_os'] = 'OS';
$l['lst_lv_hname'] = 'Hostname';
$l['lst_lv_IP'] = 'IP Address';
$l['lst_lv_user'] = 'User';
$l['lst_lv_state'] = 'Status';
$l['lst_lv_delvs'] = 'Delete VPS';
$l['lst_vps_state_started'] = 'started';
$l['lst_vps_state_stopped'] = 'stopped';
$l['lst_vps_state_suspended'] = 'suspended';
$l['lst_conf_del'] = 'Are you sure you want to delete this VPS ?';
$l['lst_error_connect'] = 'There was an error connecting to the server';
$l['lst_del_done_msg'] = 'The VPS has been deleted';
$l['lst_sus_done_msg'] = 'The VPS has been suspended';
$l['lst_unsus_done_msg'] = 'The VPS has been unsuspended';
$l['lst_lv_editvs'] = 'Edit VPS';
$l['lst_lv_sname'] = 'Server';
$l['lst_conf_sus'] = 'Are you sure you want to suspend the VPS';
$l['lst_conf_unsus'] = 'Are you sure you want to unsuspend the VPS';
$l['lst_lv_suspendvs'] = 'Suspend VPS';
$l['lst_lv_unsuspendvs'] = 'Unsuspend VPS';

// start lang string - prefix : svm_
$l['svm_some_error'] = 'The operation could not be completed';
$l['svm_page_head'] = 'Start VPS';
$l['svm_done'] = 'The VPS was started successfully';
$l['svm_sub_but'] = 'Start VPS';
$l['svm_cur_stat'] = 'Status';
$l['svm_status_1'] = 'Online';
$l['svm_status_0'] = 'Offline';
$l['svm_vps_stop'] = 'Stop';

// stop lang string - prefix : stvm_
$l['stvm_some_error'] = 'The operation could not be completed';
$l['stvm_page_head'] = 'Stop VPS';
$l['stvm_done'] = 'The VPS was stopped successfully';
$l['stvm_sub_but'] = 'Stop VPS';
$l['stvm_cur_stat'] = 'Status';
$l['stvm_status_1'] = 'Online';
$l['stvm_status_0'] = 'Offline';
$l['stvm_signal_sent'] = 'The Shutdown signal has been sent to the VPS';
$l['stvm_vps_start'] = 'Start';

// restart lang string - prefix : re_
$l['re_some_error'] = 'The operation could not be completed';
$l['re_page_head'] = 'Restart VPS';
$l['re_done'] = 'The VPS was restarted successfully';
$l['re_sub_but'] = 'Restart VPS';
$l['re_cur_stat'] = 'Status';
$l['re_status_1'] = 'Online';
$l['re_status_0'] = 'Offline';
$l['re_signal_sent'] = 'The VPS is rebooting';
$l['re_vps_restart'] = 'Restart';
$l['re_vps_stop'] = 'Stop';

// poweroff lang string - prefix : po_
$l['po_some_error'] = 'The operation could not be completed';
$l['po_page_head'] = 'Poweroff VPS';
$l['po_done'] = 'The VPS has been Powered Off successfully';
$l['po_sub_but'] = 'Poweroff VPS';
$l['po_cur_stat'] = 'Status';
$l['po_status_1'] = 'Online';
$l['po_status_0'] = 'Offline';
$l['po_vps_start'] = 'Start';
$l['po_vps_restart'] = 'Restart';
$l['po_vps_stop'] = 'Stop';
$l['po_vps_poweroff'] = 'Power Off';

// users lang string - prefix : usr_
$l['usr_page_head'] = 'Users';
$l['usr_add_user'] = 'Add User';
$l['usr_del_not_allowed'] = 'You are not allowed to delete this user';
$l['usr_del_conf'] = 'Are you sure you want to delete the User ?';
$l['usr_no_users'] = 'There are no users';
$l['usr_user_del'] = 'The User has been deleted';
$l['usr_del_not_allowed_has_vps'] = 'The user has vps(s), please delete those and then delete the user';

// apikey lang string - prefix : apik_
$l['apik_heading'] = 'API Credentials';
$l['apik_api_credentials'] = 'API Credentials';
$l['apik_no_key'] = 'You do not have any API Credentials. Please add one.';
$l['apik_h_apikey'] = 'API Key';
$l['apik_h_apipass'] = 'API Password';
$l['apik_h_del'] = 'Delete';
$l['apik_create_api_key'] = 'Create API Key Pair';
$l['apik_key_added'] = 'API key pair has been added';
$l['apik_key_deleted'] = 'API key pair has been deleted';

// adduser lang string - prefix : adu_
$l['adu_no_user_email'] = 'You did not enter the Email ID';
$l['adu_no_user_password'] = 'You did not enter the Password';
$l['adu_invalid_email'] = 'The Email ID you have entered is invalid';
$l['adu_userlimit_exceeded'] = 'You are not allowed to create more users. Please contact the Administrator';
$l['adu_useradd_error'] = 'There was an error while adding the user. Please contact the Administrator';
$l['adu_page_head'] = 'Add User';
$l['adu_done'] = 'User has been added';
$l['adu_user_email'] = 'Email';
$l['adu_user_password'] = 'Password';
$l['adu_user_exists'] = 'The user already exists. Please enter a different email';

// changepassword lang string - prefix : cpas_
$l['cpas_no_new'] = 'You did not specify the new password.';
$l['cpas_no_conf'] = 'The confirmation password is missing.';
$l['cpas_no_match'] = 'The passwords you gave do not match';
$l['cpas_err_changing'] = 'There were some errors while changing the password.';
$l['cpas_submit_button'] = 'Change Password';
$l['cpas_new_pass'] = 'New Password';
$l['cpas_old_pass'] = 'Old Password';
$l['cpas_retype_pass'] = 'Retype New Password';
$l['cpas_change_note'] = 'Change Root Password';
$l['cpas_change_final'] = 'Your password has been changed successfully';
$l['cpas_change_onboot'] = 'Your password will be changed when the VPS is booted again';
$l['cpas_change_notify'] = 'Changing the VPS root password...';
$l['cpas_strength_indicator'] = 'Strength Indicator';
$l['cpas_bad'] = 'Bad';
$l['cpas_good'] = 'Good';
$l['cpas_strong'] = 'Strong';
$l['cpas_short'] = 'Short';
$l['cpas_weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';
$l['cpas_pass_match'] = 'Passwords do not match';
$l['cpas_disabled'] = 'Change Password is disabled by Admin';

// cloudres lang string - prefix : cr_
$l['cr_header'] = 'Cloud Resources';
$l['cr_resource_type'] = 'Resource Type';
$l['cr_limit'] = 'Limit';
$l['cr_used'] = 'Used';
$l['cr_left'] = 'Available';
$l['cr_unlimited'] = 'Unlimited';
$l['cr_num_vs'] = 'Number of VMs';
$l['cr_num_users'] = 'Number of Users';
$l['cr_num_space'] = 'Disk Space';
$l['cr_num_ram'] = 'Ram';
$l['cr_num_bandwidth'] = 'Bandwidth';
$l['cr_num_cores'] = 'Total Cores';
$l['cr_max_cores'] = 'Max Cores / VM';
$l['cr_num_ipv4'] = 'IPv4';
$l['cr_num_ipv6_subnet'] = 'IPv6 Subnets';
$l['cr_num_ipv6'] = 'IPv6';
$l['cr_cpuinfo'] = 'CPU Information';

// console lang string - prefix : cs_
$l['cs_disabled'] = 'Serial Console is disabled';
$l['cs_call_failed'] = 'The API call failed. Please contact the Admin';
$l['cs_heading'] = 'Serial Console';
$l['cs_none'] = 'No existing console session found. Please create one !';
$l['cs_create'] = 'Create Session';
$l['cs_creating'] = 'Creating the Session ...';
$l['cs_destroying'] = 'Destroying the Session ...';
$l['cs_details'] = 'The following are the console details';
$l['cs_expires'] = 'Expires';
$l['cs_ip'] = 'IP Address';
$l['cs_port'] = 'Port';
$l['cs_username'] = 'Username';
$l['cs_password'] = 'Password';
$l['cs_destroy'] = 'Destroy Session';
$l['cs_java_console'] = 'Java Console';

// hostname lang string - prefix : hn_
$l['hn_no_new'] = 'Please specify a Hostname to change.';
$l['hn_new_host'] = 'New Host Name';
$l['hn_submit_button'] = 'Change Hostname';
$l['hn_err_changing'] = 'There were some errors while changing the hostname.';
$l['hn_host_final'] = 'Your Hostname has been changed successfully';
$l['hn_invalid_hostname'] = 'The hostname you submitted is not valid';
$l['hn_change_onboot'] = 'Your hostname will be changed when the VPS is booted again';
$l['hn_current_hostname'] = 'Current Hostname';
$l['hn_change_notify'] = 'Changing the hostname...';
$l['hn_disable_change_hostname'] = 'Change Hostname is disabled by Admin';

// ips lang string - prefix : ips_
$l['ips_no_ip_sel'] = 'No IPs selected';
$l['ips_ip_not_exists'] = 'IPs do not exists';
$l['ips_header'] = ' IPs';
$l['ips_ipinfo'] = 'IP Information';
$l['ips_reorderips'] = 'Set Primary IP';
$l['ips_done'] = 'Your IP settings have been saved.';
$l['ips_change_onboot'] = 'Your IP settings will be changed when the VPS is booted again';
$l['ips_primary_ip'] = 'Select Primary IP ';
$l['ips_ipv6_ips_list'] = 'IPV6 IPs';
$l['ips_ipv6_empty'] = 'IPV6 Empty';
$l['ips_change_notify'] = 'Changing the IP settings...';

// monitor lang string - prefix : mon_
$l['mon_header'] = ' CPU ';
$l['mon_cpuinfo'] = 'CPU Information';
$l['mon_totalcpu'] = 'Total CPU :'; 
$l['mon_cpuutilised'] = 'Utilised : ';
$l['mon_poweredby'] = 'Powered by : ';
$l['mon_graphheader'] = 'CPU Utilization';
$l['mon_trademarks'] = 'All respective logo used are trademarks or registered trademarks of their respective companies.';
$l['mon_not_supported'] = 'Current utilization monitoring of this resource is not supported.';
$l['mon_disabled'] = 'Monitor option is disabled by Admin';

// os lang string - prefix : os_
$l['os_not_selected'] = 'You did not select the OS';
$l['os_invalid_os'] = 'The OS submitted is invalid';
$l['os_no_new'] = 'You did not specify the new password.';
$l['os_no_conf'] = 'The confirmation password is missing.';
$l['os_no_match'] = 'The passwords you gave do not match';
$l['os_error_reins'] = 'There was an error while reinstalling the OS';
$l['os_err_changing'] = 'There were some errors while setting the password.';
$l['os_err_log_osreinstall'] = 'You have exceeded your OS reinstall limit. Please contact your administrator';
$l['os_reins_os'] = 'Re-Install OS';
$l['os_os_reinstall'] = 'Reinstall';
$l['os_new_pass'] = 'New Password';
$l['os_retype_pass'] = 'Retype Password';
$l['os_done'] = 'The OS was reinstalled successfully';
$l['os_reins_notify'] = 'Reinstalling the VPS Operating System...';
$l['os_centos_line1'] = 'CentOS is an Enterprise-class Linux Distribution derived from sources freely provided to the public by a prominent North American Enterprise Linux vendor.';
$l['os_centos_line2'] = 'CentOS conforms fully with the upstream vendors redistribution policy and aims to be 100% binary compatible. CentOS mainly changes packages to remove upstream vendor branding and artwork.';
$l['os_centos_line3'] = 'CentOS is developed by a small but growing team of core developers. CentOS is free.';
$l['os_fedora_line1'] = 'Fedora is a Linux-based operating system that showcases the latest in free and open source software. Fedora is always free for anyone to use, modify, and distribute.';
$l['os_fedora_line2'] = 'It is built by people across the globe who work together as a community: the Fedora Project. The Fedora Project is open and anyone is welcome to join.';
$l['os_fedora_line3'] = 'The Fedora Project is out front for you, leading the advancement of free, open software and content.';
$l['os_suse_line1'] = 'The openSUSE project is a worldwide effort that promotes the use of Linux everywhere.';
$l['os_suse_line2'] = 'openSUSE creates one of the world\'s best Linux distributions, working together in an open, transparent and friendly manner as part of the worldwide Free and Open Source Software community.';
$l['os_suse_line3'] = 'The project is controlled by its community and relies on the contributions of individuals, working as testers, writers, translators, usability experts, artists and ambassadors or developers.';
$l['os_suse_line4'] = 'openSUSE is a free and Linux-based operating system for your PC, Laptop or Server.';
$l['os_ubuntu_line1'] = 'Ubuntu is part of the Debian family of Linux operating systems, which has the largest pool of developer talent, with every package built by experts.';
$l['os_ubuntu_line2'] = 'Canonical\'s rigorous release management, quality assurance, stress testing and product design enhances the quality of Ubuntu Server.';
$l['os_ubuntu_line3'] = 'Super-fast and great-looking, Ubuntu is a secure, intuitive operating system that powers desktops, servers, netbooks and laptops. Ubuntu is, and always will be, absolutely free.';
$l['os_debian_line1'] = 'Debian is a free operating system (OS) for your computer. An operating system is the set of basic programs and utilities that make your computer run.';
$l['os_debian_line2'] = 'Debian uses the Linux kernel (the core of an operating system), but most of the basic OS tools come from the GNU project; hence the name GNU/Linux.';
$l['os_debian_line3'] = 'Debian GNU/Linux provides more than a pure OS: it comes with over 25000 packages, precompiled software bundled up in a nice format for easy installation on your machine.';
$l['os_scientific_line1'] = 'Scientific Linux is a Linux distribution produced by Fermi National Accelerator Laboratory.';
$l['os_scientific_line2'] = 'It is a free and open source operating system based on Red Hat Enterprise Linux and aims to be \"as close to the commercial enterprise distribution as we can get it\".';
$l['os_scientific_line3'] = 'This product is derived from the free and open source software made available by Red Hat, Inc., but is not produced, maintained or supported by Red Hat.';
$l['os_strength_indicator'] = 'Strength Indicator';
$l['os_bad'] = 'Bad';
$l['os_good'] = 'Good';
$l['os_strong'] = 'Strong';
$l['os_short'] = 'Short';
$l['os_weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';
$l['os_pass_match'] = 'Passwords do not match';
$l['os_reinstall_wait'] = 'Reinstalling the OS, Please wait...';
$l['os_reinstall_disabled'] = 'Reinstallation of OS is disabled by Admin';

// vnc lang string - prefix : vnc_
$l['vnc_vnc_info'] = 'VNC Information';
$l['vnc_vnc_ip'] = 'VNC IP';
$l['vnc_vnc_port'] = 'VNC Port';
$l['vnc_novnc_button'] = 'Launch HTML 5 VNC Client';
$l['vnc_launch_vnc'] = 'Launch Java VNC Viewer';
$l['vnc_notice'] = 'VNC will only work if java is installed and enabled in your browser';
$l['vnc_not_enabled'] = 'VNC is not enabled';

// vncpass lang string - prefix : vncpas_
$l['vncpas_no_new'] = 'You did not specify the new password.';
$l['vncpas_no_conf'] = 'The confirmation password is missing.';
$l['vncpas_no_match'] = 'The passwords you gave do not match';
$l['vncpas_err_changing'] = 'There were some errors while changing the password.';
$l['vncpas_no_nonalphanumeric'] = 'No Non-Alphanumeric characters are allowed';
$l['vncpas_submit_button'] = 'Change VNC Password';
$l['vncpas_new_pass'] = 'New Password';
$l['vncpas_old_pass'] = 'Old Password';
$l['vncpas_retype_pass'] = 'Retype New Password';
$l['vncpas_change_note'] = 'Change VNC Password';
$l['vncpas_change_final'] = 'Your VNC Password has been changed successfully.';
$l['vncpas_change_notify'] = 'Changing the VNC Password...';

// userpassword lang string - prefix : up_
$l['up_no_new'] = 'You did not specify the new password';
$l['up_no_conf'] = 'The confirmation password is missing';
$l['up_no_match'] = 'The passwords you gave do not match';
$l['up_err_changing'] = 'There were some errors while changing the password.';
$l['up_new_pass'] = 'New Password';
$l['up_old_pass'] = 'Old Password';
$l['up_retype_pass'] = 'Retype New Password';
$l['up_page_head'] = 'Change Password';
$l['up_change_final'] = 'Your Password has been changed successfully';

// profile lang string - prefix : pr_
$l['pr_change_profile'] = 'Change Profile';
$l['pr_no_fname'] = 'You did not enter the First Name';
$l['pr_no_lname'] = 'You did not enter the Last Name';
$l['pr_firstname'] = 'First Name';
$l['pr_lastname'] = 'Last Name';
$l['pr_done'] = 'Your changes have been saved successfully';

// services lang string - prefix : ser_
$l['ser_heading'] = 'Services';
$l['ser_sstart'] = 'Start';
$l['ser_sstop'] = ' Stop';
$l['ser_srestart'] = 'Restart';
$l['ser_status'] = 'Status';
$l['ser_statrun'] = 'Running';
$l['ser_statoff'] = 'OFF';
$l['ser_staton'] = 'ON';
$l['ser_autostart'] = 'Autostart';
$l['ser_select'] = 'Select';
$l['ser_vps_is_off'] = 'The VPS is off !';
$l['ser_no_feature'] = 'This feature is not available !';
$l['ser_notice_start'] = 'The selected service(s) are being started..';
$l['ser_notice_stop'] = 'The selected service(s) are being stopped..';
$l['ser_notice_restart'] = 'The selected service(s) are being restarted..';

// processes lang string - prefix : proc_
$l['proc_heading'] = 'List of Processes';
$l['proc_usr'] = 'User';
$l['proc_pid'] = 'PID';
$l['proc_cpu'] = '%CPU';
$l['proc_mem'] = '%MEM';
$l['proc_command'] = 'Command';
$l['proc_rss'] = 'RSS';
$l['proc_time'] = 'time';
$l['proc_select'] = 'select';
$l['proc_pstart'] = 'start';
$l['proc_pkill'] = 'Kill';
$l['proc_prefresh'] = 'Autorefresh';
$l['proc_vps_is_off'] = 'The VPS is off !';
$l['proc_no_feature'] = 'This feature is not available !';
$l['proc_notice_pkill'] = 'Stopping the selected process(es) :';
$l['proc_with_selected'] = 'With Selected :';

// logs lang string - prefix : log_
$l['log_heading'] = 'Logs';
$l['log_date'] = 'Date';
$l['log_task'] = 'Task';
$l['log_status'] = 'Status';
$l['log_ip'] = 'IP';
$l['log_success'] = 'Successful';
$l['log_fail'] = 'Fail';

// managesubnets lang string - prefix : mng_
$l['mng_heading'] = 'Manage IPv6 Subnets';
$l['mng_done'] = 'IPs were saved successfully';
$l['mng_add_ipv6'] = 'Add an Ipv6 address';
$l['mng_add_ip_button'] = 'Add IP';
$l['mng_back_button'] = 'Back';
$l['mng_save_button'] = 'Save';
$l['mng_delete_confirm'] = 'Are you sure you want to delete this IPv6 address ?';
$l['mng_ipv6_invalid'] = 'There was some error with the IPv6 address';
$l['mng_ipv6_address'] = 'IPv6 Address';
$l['mng_ipv6_delete'] = 'Delete';
$l['mng_ipv6_subnet'] = 'IPv6 Subnet';
$l['mng_edit_subnet'] = 'Edit';
$l['mng_no_vps'] = 'No VPS Found';
$l['mng_inv_ipaddress'] = 'The IP specified doesnt belong to you';

// managezone lang string - prefix : mz_
$l['mz_page_head'] = 'Manage Zone';
$l['mz_zone_conf_del'] = 'Are you sure you want to delete the PDNS Server ?';
$l['mz_add_pdns'] = 'Add PDNS Server';
$l['mz_dns_mgmt'] = 'DNS Management';
$l['mz_zone_add_done'] = 'The Zone has been added successfully';
$l['mz_add_zone'] = 'Add Zone Record';
$l['mz_zone_name'] = 'Zone Name';
$l['mz_pdns_zones'] = 'View Zones';
$l['mz_manage_zone'] = 'Manage';
$l['mz_conf_del'] = 'Are you sure you want to delete this record ?';
$l['mz_add_done'] = 'The record has been added sucessfully';
$l['mz_edit_done'] = 'The record has been edited sucessfully';
$l['mz_del_done'] = 'The record has been deleted sucessfully';
$l['mz_priority'] = 'Priority';
$l['mz_ttl'] = 'TTL';
$l['mz_content'] = 'Content';
$l['mz_type'] = 'Type';
$l['mz_host'] = 'Host';
$l['mz_points_to'] = 'Points to';
$l['mz_txt_value'] = 'TXT Value';
$l['mz_pdns_name'] = 'Server Name';
$l['mz_submit_button'] = 'Add Record';
$l['mz_edit_button'] = 'Edit Record';
$l['mz_no_domains'] = 'There are no zones on record';
$l['mz_err_addzone'] = 'There was an error adding the zone';
$l['mz_inv_name'] = 'Invalid hostname specified';
$l['mz_inv_ip'] = 'Invalid IP Address specified';
$l['mz_inv_tld'] = 'Invalid top level domain specified';
$l['mz_inv_ipv6'] = 'Invalid IPv6 specified';
$l['mz_inv_int'] = 'Invalid integer specified';
$l['mz_err_add'] = 'There was an error while adding the record';
$l['mz_err_del'] = 'There was an error while deleting the record';
$l['mz_err_edit'] = 'There was an error while editing the record';
$l['mz_err_soa'] = 'There was an error while updating the SOA serial';
$l['mz_rec_exists'] = 'The record already exists';
$l['mz_records_limit'] = 'The limit for adding records has been reached';
$l['mz_err_connect'] = 'There was an error while connecting to the nameserver';
$l['mz_zone_restricted'] = 'The Zone you are trying to edit is restricted';

// pdns lang string - prefix : pdns_
$l['pdns_conf_del'] = 'Are you sure you want to delete this domain ?';
$l['pdns_page_head'] = 'DNS Management';
$l['pdns_add_done'] = 'The Zone has been added successfully';
$l['pdns_delete_done'] = 'The Zone has been deleted successfully';
$l['pdns_add_zone'] = 'Add Zone';
$l['pdns_zone_name'] = 'Zone Name';
$l['pdns_manage_zone'] = 'Manage';
$l['pdns_no_domains'] = 'There are no zones on record';
$l['pdns_no_name'] = 'The domain name was not specified';
$l['pdns_err_addzone'] = 'There was an error adding the zone';
$l['pdns_err_delete'] = 'There was an error deleting the zone';
$l['pdns_inv_domain'] = 'The specified domain name is invalid';
$l['pdns_limit_domains'] = 'The maximum number of domains that can be added has been reached';
$l['pdns_domain_exists'] = 'This domain name already exists';
$l['pdns_err_connect'] = 'There was an error in connecting to the nameserver';
$l['pdns_no_dns'] = 'DNS management not available';
$l['pdns_invalid_zone'] = 'The DNS Zone you are trying to delete is invalid';
$l['pdns_primary_nameserver'] = 'Primary Nameserver';
$l['pdns_hostmaster_email'] = 'Domain Admin Email';
$l['pdns_inv_email'] = 'Invalid Domain Admin Email specified';
$l['pdns_inv_ns'] = 'Invalid Primary Nameserver specified';

// rdns lang string - prefix : rdns_
$l['rdns_page_head'] = 'Add Reverse DNS';
$l['rdns_zone_name'] = 'Zone Name';
$l['rdns_exp_zone_name'] = 'The Zone Name';
$l['rdns_ns'] = 'Nameserver';
$l['rdns_hostmasteremail'] = 'Hostmaster Email';
$l['rdns_exp_hostmasteremail'] = 'Hostmaster Email';
$l['rdns_pdns_server'] = 'Select server';
$l['rdns_exp_pdns_server'] = 'The DNS server to add the record to';
$l['rdns_sub_but'] = 'Submit';
$l['rdns_rdns_ip'] = 'IP Address';
$l['rdns_exp_rdns_ip'] = 'Enter your VM IP address';
$l['rdns_rdns_domain'] = 'Domain name';
$l['rdns_exp_rdns_domain'] = 'Enter the Fully qualified domain name';
$l['rdns_no_rnds_ip'] = 'Please enter the IP address';
$l['rdns_no_rdns_domain'] = 'Please enter the Domain name';
$l['rdns_no_pdnsid'] = 'PowerDNS ID is invalid';
$l['rdns_err_zone'] = 'RDNS Zone entry not found. Please contact the Administrator';
$l['rdns_is_rdns'] = 'Reverse DNS entry already present';
$l['rdns_no_dns'] = 'The DNS server has not been setup by the Admin. Please contact the Admin for this.';
$l['rdns_no_zone_name'] = 'The zone name was not specified';
$l['rdns_no_ns'] = 'The nameserver must be specified. Atleast two are required';
$l['rdns_no_hostmasteremail'] = 'The hostmaster email was not specified';
$l['rdns_inv_revzone'] = 'The Reverse DNS zone specified is invalid';
$l['rdns_inv_ns'] = 'The nameserver TLDs specified are invalid';
$l['rdns_inv_hostemail'] = 'The Hostmaster Email specified is invalid';
$l['rdns_err_connect'] = 'Could not connect to the server. Please check if it is online';
$l['rdns_err_save'] = 'There was an error in saving the data';
$l['rdns_done'] = 'The reverse DNS zone has been successfully added';
$l['rdns_zone_exists'] = 'This zone already exists';
$l['rdns_inv_ipaddress'] = 'IP address entered is invalid';
$l['rdns_rdns_existing'] = 'rDNS Records';
$l['rdns_deleted'] = 'The rDNS record has been deleted';
$l['rdns_id'] = 'ID';
$l['rdns_ip'] = 'IP';
$l['rdns_name'] = 'Name';
$l['rdns_domain'] = 'Domain';

// edituser lang string - prefix : edu_
$l['edu_no_user_email'] = 'You did not enter the Email ID';
$l['edu_no_user_password'] = 'You did not enter the Password';
$l['edu_invalid_email'] = 'The Email ID you have entered is invalid';
$l['edu_uid_not_found'] = 'User ID not found';
$l['edu_useradd_error'] = 'There was an error while editing the user details';
$l['edu_page_head'] = 'Edit User';
$l['edu_done'] = 'User has been edited';
$l['edu_user_email'] = 'Email';
$l['edu_user_password'] = 'Password';

// rescue lang string - prefix : resc_
$l['resc_err_rescue_enable'] = 'There were some errors while enabling rescue mode';
$l['resc_err_rescue_disable'] = 'There were some errors while disabling the rescue mode';
$l['resc_err_downloading'] = 'There was an error downloading the rescue template';
$l['resc_err_delete_disk'] = 'There was an error while deleting the rescue disk';
$l['resc_cant_rescue'] = 'Rescue operation is not allowed when an ISO is in use. Please remove the ISO first';
$l['resc_heading'] = 'Rescue Mode';
$l['resc_rescue_exp'] = 'Rescue mode provides the ability to boot a small Linux environment from another disk so that you can rescue your primary linux VPS or backup files that are present on it';
$l['resc_enable_rescue'] = 'Enable Rescue Mode';
$l['resc_rescue_enabled'] = 'Rescue Mode is currently enabled.';
$l['resc_disable_rescue'] = 'Disable Rescue Mode';
$l['resc_rescue_disabled'] = 'Rescue Mode is currently disabled';
$l['resc_resuce_enable_success'] = 'Rescue mode has been enabled successfully';
$l['resc_resuce_disable_success'] = 'Rescue mode has been disabled successfully';
$l['resc_rescue_enable_notify'] = 'Enabling rescue mode...';
$l['resc_rescue_disable_notify'] = 'Disabling rescue mode...';
$l['resc_root_pass'] = 'Root Password';
$l['resc_root_pass_conf'] = 'Confirm Password';
$l['resc_disable_rescue_err'] = 'Rescue Mode is disabled by Admin';

// usersettings lang string - prefix : us_
$l['us_no_lang'] = 'No language was selected';
$l['us_wrong_lang'] = 'The language you selected does not exist';
$l['us_no_timezone'] = 'You did not select the timezone';
$l['us_timezone_invalid'] = 'The timezone you selected is invalid';
$l['us_wrong_theme'] = 'The Theme you selected does not exist';
$l['us_page_head'] = 'User Settings';
$l['us_change_final'] = 'Your settings have been save successfully';
$l['us_choose_lang'] = 'Choose Language';
$l['us_exp_lang'] = 'Choose your preferred language';
$l['us_timezone'] = 'Timezone';
$l['us_default_timezone'] = 'Server Default';
$l['us_edit_settings'] = 'Edit Settings';
$l['us_done'] = 'Your settings were saved successfully';
$l['us_choose_theme'] = 'Choose Theme';
$l['us_exp_theme'] = 'Choose your preferred theme';
$l['us_no_theme'] = 'No Theme was selected';
$l['us_logo'] = 'Logo URL';
$l['us_logo_exp'] = 'If empty default Logo will be displayed';

// create lang string - prefix : li_
$l['li_no_type'] = 'Please specify the type of Virtualization';
$l['li_num_vs_over'] = 'You have already created the maximum number of VMs allowed';
$l['li_no_hname'] = 'Please specify the Hostname';
$l['li_no_os'] = 'Please choose a OS for the VPS';
$l['li_no_rootpass'] = 'Please specify a Root Password';
$l['li_no_disk_space'] = 'Please specify the Disk Space to be allocated';
$l['li_no_ram'] = 'Please specify the RAM memory';
$l['li_no_vncpass'] = 'Please specify a VNC Password';
$l['li_no_bandwidth'] = 'Please specify the Bandwidth';
$l['li_no_cpu_units'] = 'Please specify the CPU Units';
$l['li_no_cpu_cores'] = 'Please specify the Number of Cores';
$l['li_cores_max'] = 'Cores Max';
$l['li_invalid_sg'] = 'The Region you selected is invalid';
$l['li_invalid_virt'] = 'The Region you selected does not support the virtualization you have chosen';
$l['li_no_percent_cpu'] = 'Please specify the Percent CPU utilization allowed';
$l['li_no_swap_ram'] = 'Please specify the SWAP RAM';
$l['li_no_burst_ram'] = 'Please specify the Burstable RAM limit';
$l['li_invalid_os'] = 'The OS you submitted is invalid';
$l['li_no_ip'] = 'Please specify atleast one IP for the VPS';
$l['li_invalid_uid'] = 'The User you submitted does not exist';
$l['li_no_user'] = 'You did not specify the user email';
$l['li_no_user_pass'] = 'You did not specify the user password';
$l['li_invalid_email'] = 'The user email address is invalid';
$l['li_emailexist'] = 'The new user email you specified already exists';
$l['li_err_user'] = 'There was an error while adding the user';
$l['li_invalid_hostname'] = 'The hostname you submitted is not valid';
$l['li_less_ram'] = 'You don\'t have enough ram to create this VPS';
$l['li_less_burst'] = 'You don\'t have enough Burst Ram to create this VPS';
$l['li_less_space'] = 'You don\'t have enough Disk Space to create this VPS';
$l['li_less_inodes'] = 'The inodes should not be less than 50000';
$l['li_less_vs'] = 'You are not allowed to create more VMs';
$l['li_less_bandwidth'] = 'You don\'t have enough Bandwidth to create this VPS';
$l['li_less_ipv4'] = 'You don\'t have enough IPv4 Address(s) to create this VPS';
$l['li_less_ipv6'] = 'You don\'t have enough IPv6 Address(s) to create this VPS';
$l['li_less_ipv6_subnet'] = 'You don\'t have enough IPv6 Subnet(s) to create this VPS';
$l['li_max_cores_exceeded'] = 'You are not allowed to create a VM with so many cores';
$l['li_less_cores'] = 'You don\'t have enough CPU Cores to create this VPS';
$l['li_no_user_resource'] = 'You have reached the maximum number of Users you are allowed to create';
$l['li_no_server'] = 'The Region you have selected is completely utilized and does not have enough resources to create this VM. Please report this to the Admin';
$l['li_ipv4_over'] = 'The Region you have selected does not have enough IPv4 resources to create this VM. Please report this to the Admin';
$l['li_ipv6_over'] = 'The Region you have selected does not have enough IPv6 resources to create this VM. Please report this to the Admin';
$l['li_ipv6_subnet_over'] = 'The Region you have selected does not have enough IPv6 Subnet(s) to create this VM. Please report this to the Admin';
$l['li_no_webuzo_template'] = 'The OS Template you selected is not a Webuzo Template';
$l['li_err_swapsize'] = 'The SWAP size specified cannot be greater than or equal to the total disk space specified';
$l['li_inv_kvm_cache'] = 'The Disk Cache submitted is invalid';
$l['li_inv_io_mode'] = 'The I/O Policy submitted is invalid';
$l['li_inv_vnc_keymap'] = 'The VNC keymap submitted is invalid';
$l['li_err_vpslimit'] = 'VPS creation limit exceeded';
$l['li_page_head'] = 'Launch Instance';
$l['li_vstype'] = 'Type';
$l['li_done'] = 'The Virtual Server has been created';
$l['li_newvs_vpsid'] = 'VPS ID';
$l['li_newvs_vps_name'] = 'VPS Name';
$l['li_newvs_rootpass'] = 'Root Password';
$l['li_newvs_vnc'] = 'VNC Details';
$l['li_newvs_vncpass'] = 'VNC Password';
$l['li_newvs_ips'] = 'IPs';
$l['li_newvs_ips6'] = 'IPv6';
$l['li_vs_server'] = 'Server';
$l['li_exp_server'] = 'Change the current server to change the server';
$l['li_vs_ser_id'] = 'ID';
$l['li_vs_user'] = 'User';
$l['li_vs_user_exp'] = 'Select an existing user OR add a user';
$l['li_user_email'] = 'User Email';
$l['li_user_pass'] = 'Password';
$l['li_add_user'] = 'Add User';
$l['li_regions'] = 'Region';
$l['li_virt_type'] = 'Virtualization';
$l['li_os'] = 'Operating System';
$l['li_select'] = 'Select';
$l['li_vs_plan'] = 'Select Plan';
$l['li_plan_exp'] = 'Select a pre-defined plan';
$l['li_hvm'] = 'Xen HVM';
$l['li_hvm_exp'] = 'Do you want to enable full virtualization for this VPS ?';
$l['li_vsos'] = 'Operating System';
$l['li_vsos_exp'] = 'Select the Operating System for the VPS';
$l['li_vsiso'] = 'ISO';
$l['li_vsiso_exp'] = 'If an ISO is selected the machine will be booted from that ISO';
$l['li_sec_vsiso'] = 'ISO for secondary CDROM ';
$l['li_sec_vsiso_exp'] = 'Select an ISO for secondary CDROM';
$l['li_none'] = 'None';
$l['li_rootpass'] = 'VPS Root Password';
$l['li_rootpass_exp'] = 'The Password of the Root User / Administrator of the VPS';
$l['li_randpass'] = 'Make another Random Password';
$l['li_hostname'] = 'Hostname';
$l['li_hostname_exp'] = 'Enter the hostname for the VPS. e.g. www.domain.com';
$l['li_ip'] = 'IP Address';
$l['li_ips'] = 'IP Address';
$l['li_ips_exp'] = 'You can specify the number of IPs to assign';
$l['li_ips6_subnet'] = 'IPv6 Subnets';
$l['li_ips6_subnet_exp'] = 'You can specify the number of IPv6 Subnets to assign';
$l['li_ips6'] = 'IPv6 Addresses';
$l['li_ips6_exp'] = 'You can specify the number of IPv6 to assign';
$l['li_add_ip'] = '+';
$l['li_remove_ip'] = '-';
$l['li_add_to_ips'] = '<<';
$l['li_rem_from_ips'] = 'Remove this IP';
$l['li_add_dns'] = '+';
$l['li_hdd'] = 'Disk Space';
$l['li_exp_hdd'] = 'The allowed disk space for the VPS';
$l['li_mac'] = 'MAC Address';
$l['li_exp_mac'] = 'Six groups of two hexadecimal digits separated by colons (:), Eg like 01:23:45:67:89:ab';
$l['li_space_gb'] = 'GB';
$l['li_inodes'] = 'Inodes';
$l['li_iondisk'] = 'The maximum number of Inodes (i.e. Files) allowed within the VPS. Recommended value : 500000+';
$l['li_gram'] = 'Guaranteed RAM';
$l['li_exp_gram'] = 'The amount of RAM which the VPS will always have';
$l['li_ram_mb'] = 'MB';
$l['li_bram'] = 'Burstable RAM';
$l['li_exp_bram'] = 'The maximum amount of RAM which the VPS can use';
$l['li_swap'] = 'Swap RAM';
$l['li_exp_swap'] = '';
$l['li_exp_swap_hvm'] = 'An attempt will be made to create a SWAP partition if there is a OS Template selected above';
$l['li_band'] = 'Bandwidth';
$l['li_exp_band'] = 'Monthly Bandwidth limit of the VPS. 0 (Zero) for unlimited';
$l['li_band_gb'] = 'GB';
$l['li_cpunit'] = 'CPU Units';
$l['li_cpalloc'] = 'CPU units to be allocated';
$l['li_cpalloc_xen'] = 'Recommended Value : 256';
$l['li_cpalloc_openvz'] = 'Recommended Value : 1000';
$l['li_cpalloc_kvm'] = 'Recommended Value : 1024';
$l['li_units'] = 'units';
$l['li_cores'] = 'CPU Cores';
$l['li_cpucore_exp'] = 'Recommended Value :';
$l['li_percent'] = 'CPU %';
$l['li_cpuperutil'] = 'The CPU time in percent the corresponding VPS is not allowed to exceed. <br />Set <b>0</b> for no restriction. <br />Recommended Value : 10';
$l['li_io'] = 'I/O Priority';
$l['li_io0-7'] = 'Choose priority from 0-7';
$l['li_na'] = 'Network Speed';
$l['li_na_exp'] = 'Please Mention the Network Speed';
$l['li_ubcsettings'] = 'UBC Settings';
$l['li_exp_ubc'] = 'If checked then you will be redirected to edit the UBC Settings of the VPS';
$l['li_submit'] = 'Create';
$l['li_addvoption'] = 'Advanced Options';
$l['li_addvhide'] = 'Hide Advance option';
$l['li_network_speed'] = 'Network Speed';
$l['li_network_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['li_upload_speed'] = 'Upload Speed';
$l['li_upload_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['li_net_kb'] = 'KB/s';
$l['li_no_limit'] = 'No Restriction';
$l['li_shadow'] = 'Shadow Memory';
$l['li_shadow_exp'] = 'Recommended value : 8 MB';
$l['li_vncpass'] = 'VNC Password';
$l['li_vncpass_exp'] = 'The VNC Password for the VPS. Click on the icon to generate a new random password';
$l['li_free'] = 'Free';
$l['li_band_suspend'] = 'Bandwidth suspend ';
$l['li_exp_band_suspend'] = 'Suspend the VPS if it is uses more than specified bandwidth';
$l['li_tuntap'] = 'Tun/Tap';
$l['li_ppp'] = 'PPP';
$l['li_exp_tuntap'] = 'Enable Tun/Tap for a VPS';
$l['li_exp_ppp'] = 'Enable PPP (Point to Point Protocol) for a VPS';
$l['li_osreinstall'] = 'OS Reinstall Limit';
$l['li_exp_osreinstall'] = 'If you want to limit the number of OS re-installs per month. <br />Eg. 0 - is unlimited';
$l['li_changenic'] = 'Virtual Network Interface Type';
$l['li_exp_changenic'] = 'If you want to change the network interface type. Options are default or E1000. <b>virtio</b> will be used as the virtual nic type if <b>virtio</b> is enabled';
$l['li_add_route'] = 'Use routed network';
$l['li_exp_add_route'] = 'If checked, it will use routed networking.';
$l['li_nic_default'] = 'Realtek 8139(default)';
$l['li_nic_e1000'] = 'Intel E1000';
$l['li_change_vif_type'] = 'Virtual Network Interface Emulation type';
$l['li_exp_change_vif_type'] = 'If you want to change the network interface emulation type. Options are <b>netfront</b> or <b>ioemu</b>.';
$l['li_viftype_ioemu'] = 'ioemu';
$l['li_viftype_netfront'] = 'netfront (default)';
$l['li_usevirtio'] = 'Enable virtio';
$l['li_exp_usevirtio'] = 'Use <b>virtio</b> as the IO virtualization';
$l['li_usesec_cdrom'] = 'Enable Secondary CD ROM';
$l['li_exp_usesec_cdrom'] = 'Enable this to attach a secondary ISO to the virtual machine.';
$l['li_kvm_cache'] = 'Disk Caching';
$l['li_exp_kvm_cache'] = 'Controls the cache mechanism';
$l['li_io_mode'] = 'I/O Policy';
$l['li_vnc_keymap'] = 'VNC Console Keymap';
$l['li_dns'] = 'DNS Nameservers';
$l['li_exp_dns'] = 'If not aware then use 4.2.2.1 and 4.2.2.2';
$l['li_mg'] = 'Media Groups';
$l['li_mg_exp'] = 'If no Media Group is assigned then all Media will be available to this VPS.';
$l['li_apps'] = 'Applications';
$l['li_apps_exp'] = 'Choose the Webuzo application you want to install';
$l['li_ploop'] = 'Ploop';
$l['li_ploop_exp'] = 'If enabled, VPS will be created with the Ploop format';
$l['li_mac_temp_vncdetails'] = 'MAC Address :';
$l['li_mail_temp_vnctitle'] = 'The VNC details are :';
$l['li_mail_temp_vncdetails'] = 'VNC Details :';
$l['li_mail_temp_vncpasswd'] = 'VNC Password :';
$l['li_reinstall'] = 'Reinstall Virtual Server';
$l['li_space'] = 'Disk Space';
$l['li_space_exp'] = 'The allowed disk space for the VPS';
$l['li_ram'] = 'Guaranteed RAM';
$l['li_ram_exp'] = 'The amount of RAM which the VPS will always have';
$l['li_burst'] = 'Burstable RAM';
$l['li_burst_exp'] = 'The maximum amount of RAM which the VPS can use';
$l['li_swap'] = 'Swap RAM';
$l['li_swap_exp'] = '';
$l['li_swap_hvm'] = 'An attempt will be made to create a SWAP partition if there is a OS Template selected above';
$l['li_bandwidth'] = 'Bandwidth';
$l['li_bandwidth_exp'] = 'Monthly Bandwidth limit of the VPS. 0 (Zero) for unlimited';
$l['li_free'] = 'Free';
$l['li_unlimited'] = 'Unlimited';
$l['li_submit'] = 'Create';
$l['li_weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';
$l['li_usevirtio'] = 'Enable virtio';
$l['li_usevirtio_exp'] = 'Use virtio as the I/O virtualization';


// editvm lang string - prefix : ei_
$l['ei_page_head'] = 'Edit Instance';
$l['ei_vs_user'] = 'User';
$l['ei_vs_user_exp'] = 'Select an existing user OR add a user';
$l['ei_user_email'] = 'User Email';
$l['ei_user_pass'] = 'Password';
$l['ei_add_user'] = 'Add User';
$l['ei_unknown'] = 'Unknown';
$l['ei_vsos'] = 'Operating System';
$l['ei_vsos_exp'] = 'The current operating system of this VPS';
$l['ei_vsiso'] = 'ISO';
$l['ei_vsiso_exp'] = 'If an ISO is selected the machine will be booted from that ISO';
$l['ei_none'] = 'None';
$l['ei_hostname'] = 'Hostname';
$l['ei_hostname_exp'] = 'Enter the hostname for the VPS. e.g. www.domain.com';
$l['ei_rootpass'] = 'VPS Root Password';
$l['ei_rootpass_exp'] = 'Leave empty if you do not want to change the current password';
$l['ei_randpass'] = 'Make another Random Password';
$l['ei_ip'] = 'IP Address';
$l['ei_ips_exp'] = 'You can choose from the IP Pool or specify other IPs';
$l['ei_ips6_subnet'] = 'IPv6 Subnet';
$l['ei_ips6_subnet_exp'] = 'You can choose from the IPv6 Subnet List';
$l['ei_free'] = 'Free';
$l['ei_ips6'] = 'IPv6 Addresses';
$l['ei_ips6_exp'] = 'You can specify the number of IPv6 to assign or choose from the IPv6 Pool';
$l['ei_space'] = 'Disk Space';
$l['ei_space_exp'] = 'The allowed disk space for the VPS';
$l['ei_ram'] = 'Guaranteed RAM';
$l['ei_ram_exp'] = 'The amount of RAM which the VPS will always have';
$l['ei_burst'] = 'Burstable RAM';
$l['ei_burst_exp'] = 'The maximum amount of RAM which the VPS can use';
$l['ei_swap'] = 'Swap RAM';
$l['ei_swap_exp'] = '';
$l['ei_bandwidth'] = 'Bandwidth';
$l['ei_bandwidth_exp'] = 'Monthly Bandwidth limit of the VPS. 0 (Zero) for unlimited';
$l['ei_cores'] = 'CPU Cores';
$l['ei_cpucore_exp'] = 'Recommended Value :';
$l['ei_cores_max'] = 'Cores Max';
$l['ei_unlimited'] = 'Unlimited';
$l['ei_network_speed'] = 'Network Speed';
$l['ei_network_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['ei_upload_speed'] = 'Upload Speed';
$l['ei_upload_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['ei_net_kb'] = 'KB/s';
$l['ei_no_limit'] = 'No Restriction';
$l['ei_vncpass'] = 'VNC Password';
$l['ei_vncpass_exp'] = 'The VNC Password for the VPS. Click on the icon to generate a new random password';
$l['ei_submit'] = 'Edit Virtual Server';
$l['ei_done'] = 'The Virtual Server has been sucessfully edited';
$l['ei_addvoption'] = 'Advanced Options';
$l['ei_no_uid'] = 'No user was selected';
$l['ei_no_nonalphanumeric'] = 'No Non-Alphanumeric characters are allowed for the VNC Password';
$l['ei_less_space'] = 'You don\'t have enough Disk Space to create this VPS';
$l['ei_less_ram'] = 'You don\'t have enough ram to create this VPS';
$l['ei_max_cores_exceeded'] = 'You are not allowed to create a VM with so many cores';
$l['ei_less_cores'] = 'You don\'t have enough CPU Cores to create this VPS';
$l['ei_less_burst'] = 'You don\'t have enough Burst Ram to create this VPS';
$l['ei_ipv4_over'] = 'The Region you have selected does not have enough IPv4 resources to create this VM. Please report this to the Admin';
$l['ei_ipv6_over'] = 'The Region you have selected does not have enough IPv6 resources to create this VM. Please report this to the Admin';
$l['ei_ipv6_subnet_over'] = 'The Region you have selected does not have enough IPv6 Subnet(s) to create this VM. Please report this to the Admin';
$l['ei_less_ipv4'] = 'You don\'t have enough IPv4 Address(s) to create this VPS';
$l['ei_less_ipv6'] = 'You don\'t have enough IPv6 Address(s) to create this VPS';
$l['ei_less_ipv6_subnet'] = 'You don\'t have enough IPv6 Subnet(s) to create this VPS';
$l['ei_wrong_user'] = 'You cannot change to that user';
$l['ei_only_user'] = 'While editing the user of the VM, the resources cannot be changed';
$l['ei_less_swap'] = 'You don\'t have enough swap ram';
$l['ei_usevirtio'] = 'Enable virtio';
$l['ei_usevirtio_exp'] = 'Use virtio as the I/O virtualization';

// controlpanel lang string - prefix : cpan_
$l['cpan_wrong_panel'] = 'The panel you selected is invalid';
$l['cpan_err_installing'] = 'There was an error installing the Panel';
$l['cpan_wrong_os'] = 'The Control Panel can be installed only on CentOS';
$l['cpan_confirm'] = 'Are you sure you want to install this panel ? Data on the server will be altered significantly.';
$l['cpan_done'] = 'The Panel installation has begun and will be completed soon';
$l['cpan_change_onboot'] = 'The Panel will be installed when you shutdown and then start the VPS';
$l['cpan_heading'] = 'Control panels';

// backup lang string - prefix : bkup_
$l['bkup_err_virt'] = 'The VPS does not support backups as of now';
$l['bkup_err_backup'] = 'There was an error while creating the backup';
$l['bkup_err_restore'] = 'There was an error while restoring the VPS';
$l['bkup_page_head'] = 'Backup';
$l['bkup_done'] = 'The VPS backup process has been started. Please allow a few minutes for it to complete. You will recieve a notification email when its is completed';
$l['bkup_done_restore'] = 'The VPS restore process has been started. Please allow a few minutes for it to complete. You will recieve a notification email when its is completed';
$l['bkup_cbackup'] = 'Create Backup';
$l['bkup_restore'] = 'Restore VPS';
$l['bkup_conf_cbackup'] = 'Are you sure you want to create backup ?';
$l['bkup_conf_restore'] = 'Are you sure you want to restore from the last backup ?';
$l['bkup_backup_exp'] = 'Here you can create backups of your VPS and also restore from old backups.';
$l['bkup_backupnotify'] = 'Backing up the VPS ...';
$l['bkup_restorenotify'] = 'Restoring the VPS...';
$l['bkup_backup_email_subject'] = 'VPS Backup Completed Successfully';
$l['bkup_restore_email_subject'] = 'VPS Restore Completed Successfully';
$l['bkup_deletevpsbackup_email_subject'] = 'Deletion of VPS Backup Completed Successfully';
$l['bkup_backup_email_body_start'] = 'The Backup process on your VPS : [ ';
$l['bkup_restore_email_body_start'] = 'The Restore process on your VPS : [';
$l['bkup_deletevpsbackup_email_body_start'] = 'The deletion process of VPS backup : [';
$l['bkup_backup_email_body_end'] = ' ] has completed successfully.
You can also view this notification from the Logs Dialog in the VPS Client Panel.

Regards,
{{sn}}';
$l['bkup_err_deletevpsbackup'] = 'There was an error while deleting the backup of VPS';
$l['bkup_del_backup'] = 'Delete Backup';
$l['bkup_done_deletevpsbackup'] = 'Backup of the VPS has been deleted';
$l['bkup_del_backupnotify'] = 'Deleting the VPS...';
$l['bkup_conf_del_backup'] = 'Are you sure you want to delete backup of the VPS ?';
$l['bkup_done_delete'] = 'The VPS backup deletion process has been started. Please allow a few minutes for it to complete. You will recieve a notification email when its is completed.';

// hvmsettings lang string - prefix : hvm_
$l['hvm_virt_error'] = 'This virtualization is not having HVM Settings';
$l['hvm_rescue_enabled'] = 'The VPS is in rescue mode and cannot be changed';
$l['hvm_invalid_iso'] = 'The ISO you selected is invalid';
$l['hvm_err_editing'] = 'There were some errors while saving the settings';
$l['hvm_heading'] = 'HVM Settings';
$l['hvm_submit_button'] = 'Submit';
$l['hvm_done'] = 'The settings have been save successfully';
$l['hvm_apic'] = 'APIC';
$l['hvm_acpi'] = 'ACPI';
$l['hvm_vnc'] = 'VNC';
$l['hvm_boot_order'] = 'Boot Order';
$l['hvm_isos'] = 'Select ISO';
$l['hvm_none'] = 'None';
$l['hvm_tuntap_enable'] = 'Enable Tun/Tap';
$l['hvm_ppp_enable'] = 'Enable PPP( Point to Point Protocol)';
$l['hvm_disabled'] = 'HVM Settings are disabled by Admin';

// cpu lang string - prefix : cpu_
$l['cpu_header'] = ' CPU ';
$l['cpu_cpuinfo'] = 'CPU Information';
$l['cpu_totalcpu'] = 'Total CPU :'; 
$l['cpu_cpuutilised'] = 'Utilised : ';
$l['cpu_poweredby'] = 'Powered by : ';
$l['cpu_graphheader'] = 'CPU Utilization';
$l['cpu_trademarks'] = 'All respective logo used are trademarks or registered trademarks of their respective companies.';
$l['cpu_not_supported'] = 'Current Utilization monitoring of this resource is not supported.';

// ram lang string - prefix : ram_
$l['ram_header'] = ' RAM';
$l['ram_raminfo'] = 'RAM Information';
$l['ram_totalram'] = 'RAM : ';
$l['ram_gaurateed'] = 'Guaranteed RAM : ';
$l['ram_burstable'] = 'Burstable :';
$l['ram_swap'] = 'SWAP :';
$l['ram_utilised'] = 'Utilised :';
$l['ram_percentram'] = 'Utilization % :';
$l['ram_graphheader'] = 'RAM Utilization';
$l['ram_not_supported'] = 'Current utilization monitoring of this resource is not supported.';

// disk lang string - prefix : disk_
$l['disk_header'] = 'Disk';
$l['disk_diskinfo'] = 'Disk Information';
$l['disk_totaldisk'] = 'Total Disk : ';
$l['disk_diskutilised'] = 'Utilised : ';
$l['disk_percentdisk'] = 'Utilization % : ';
$l['disk_graphheader'] = 'Disk Utilization';
$l['disk_inodesinfo'] ='Inodes Information';
$l['disk_inodestotal'] = 'Total Inodes :'; 
$l['disk_inodesutilised'] = 'Utilised : ';
$l['disk_percent_inodes'] = 'Utilization % :'; 
$l['disk_inodesheader'] = 'Inodes Utilization';
$l['disk_not_supported'] = 'Current utilization monitoring of this resource is not supported.';

// bandwidth lang string - prefix : band_
$l['band_heading'] = 'Bandwidth';
$l['band_bandwidthinfo'] = 'Bandwidth Information';
$l['band_Total_Bandwidth'] = 'Total Bandwidth :';
$l['band_Bandwidth_utilised'] = 'Utilised : ';
$l['band_percent_utilised'] = '% utilized : ';
$l['band_graphheader'] = 'Bandwidth Utilization';
$l['band_unlimited'] = 'Unlimited';
$l['band_network_speed'] = 'Network Speed (MB/s)';
$l['band_prev'] = 'Prev Month';
$l['band_next'] = 'Next Month';

// console lang string - prefix : cs_
$l['cs_disabled'] = 'Serial Console is disabled';
$l['cs_call_failed'] = 'The API call failed. Please contact the Admin';
$l['cs_heading'] = 'Serial Console';
$l['cs_none'] = 'No existing console session found. Please create one !';
$l['cs_create'] = 'Create Session';
$l['cs_creating'] = 'Creating the Session ...';
$l['cs_destroying'] = 'Destroying the Session ...';
$l['cs_details'] = 'The following are the console details';
$l['cs_expires'] = 'Expires';
$l['cs_ip'] = 'IP Address';
$l['cs_port'] = 'Port';
$l['cs_username'] = 'Username';
$l['cs_password'] = 'Password';
$l['cs_destroy'] = 'Destroy Session';
$l['cs_java_console'] = 'Java Console';

// statuslogs lang string - prefix : sts_
$l['sts_heading'] = 'Status logs';
$l['sts_running'] = 'Running';
$l['sts_stopped'] = 'Stopped';
$l['sts_sts'] = 'System Status';
$l['sts_time'] = 'Time';

// system_alerts lang string - prefix : sysa_
$l['sysa_alert_heading'] = 'System Alerts';


// login lang string - prefix : login_
$l['login_no_username'] = 'The Username field was empty';
$l['login_no_password'] = 'The Password field was empty';
$l['login_too_many_attempts'] = 'You have used up your failed login quota of '.$globals['login_attempts'].' failed attempts! <b>Please wait '.$globals['login_ban_time'].' minutes before trying again.</b> Don\'t forget that the password is case sensitive. Forgotten your password? Please try the <a href="'.$globals['index'].'act=login&sa=fpass">Forgot Password</a> utility.';

$l['login_sign_in'] = 'Sign in';
$l['login_log_user'] = 'Email or Username';
$l['login_log_pass'] = 'Password';
$l['login'] = 'Login';
$l['login_sub_but'] = 'Login';

$l['login_pass_nomatch'] = 'The username or password you entered is incorrect.';
$l['login_forgotpass'] = 'Forgot Password';
$l['login_emailuser'] = 'Email Address';
$l['login_enteremail'] = 'Enter your email address';
$l['login_sub_email'] = 'Submit';
$l['login_no_email'] = 'You did not submit your email address';
$l['login_invalidemail'] = 'The email address you submitted is invalid';
$l['login_mail_sub'] = 'Reset Password';
$l['login_mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
https://{{node_ip}}:4083/index.php?act=login&sa=resetpass&key=&soft-1;

Please Note : Above link is valid for 24 hours only.

Regards,
'.$globals['sn'];
$l['login_mail_done'] = 'A mail has been sent with the details to reset your password';
$l['login_back_to_login'] = 'Back to Login';

$l['login_resetpass'] = 'Reset Password';
$l['login_log_new_pass'] = 'New password'; 
$l['login_log_reppass'] = 'Confirm Password';
$l['login_changepass'] = 'Change Password';
$l['login_no_key'] = 'No Reset Key was submitted';
$l['login_invalidkey'] = 'You specified an invalid key';
$l['login_no_new'] = 'Please enter valid Password';
$l['login_no_reppass'] = 'Please enter confirm password';
$l['login_no_match'] = 'The passwords you gave do not match';
$l['login_keyexpire'] = 'Key is no longer valid';
$l['login_passchanged'] = 'Password Changed Successfully.';
$l['login_forgot_pass'] = 'Forgot Password';
$l['login_goto_login'] = 'Goto Login Page';

// listrecipe lang string - prefix : recipe_
$l['recipe_err_exec'] = 'Recipe execution error';
$l['recipe_no_selected'] = 'No recipe selected';
$l['recipe_wrong'] = 'Incorrect recipe selected';
$l['recipe_heading'] = 'Recipes';
$l['recipe_choose'] = 'Choose Recipe';
$l['recipe_exp_choose_recipe'] = 'Choose the recipe you want to cook';
$l['recipe_update'] = 'Cook Recipe';
$l['recipe_none'] = 'None';
$l['recipe_done'] = 'Recipe has been cooked';
$l['recipe_exec_onboot'] = 'Recipe will be cooked when you reboot the VPS';
$l['no_desc'] = 'No description';
$l['ingredients'] = 'Ingredients';
$l['recipe'] = 'Recipe';
$l['conf_execute'] = 'Are you sure you want to cook this recipe ?';
$l['rec_short_desc'] = 'Recipes are predefined bash codes';

// ssh lang string - prefix : ssh_
$l['ssh_disabled'] = 'SSH is disabled by Admin';

?>
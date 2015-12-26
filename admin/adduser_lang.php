<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adduser_lang.php
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

$l['slave_cant'] = 'Add User Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to add Users !';
$l['nousertype'] = 'Please choose the User Type';
$l['emailexist'] = 'The Email Address already exists';
$l['no_new'] = 'You did not specify the new password';
$l['no_email'] = 'Please enter a valid email address';
$l['invalid_email'] = 'Email address you entered is not valid';
$l['no_plan'] = 'No Plan';

$l['<title>'] = 'Add User';
$l['add_user'] = 'Add User';
$l['done'] = 'The user has been saved. Return to <a href="'.$globals['index'].'act=users">Users Overview</a>';
$l['usertype'] = 'User Type';
$l['typeofuser'] = 'The type of user';
$l['user_email'] = 'User Email';
$l['exp_email'] = 'Email Address of the User';
$l['new_pass'] = 'Password';
$l['pass_exp'] = 'The Password for the new user';
$l['submit'] = 'Save user';
$l['user_1'] = 'Admin';
$l['user_2'] = 'Cloud';
$l['user_0'] = 'User';
$l['num_vs'] = 'Number of VMs';
$l['num_vs_exp'] = 'The maximum number of Virtual Machines this user can create. Zero (<b>0</b>) for unlimited.';
$l['num_users'] = 'Number of Users';
$l['num_users_exp'] = 'The maximum number of sub-users this user can create. Zero (<b>0</b>) for unlimited.';
$l['space'] = 'Max Disk Space';
$l['space_exp'] = '';
$l['ram'] = 'Max Ram';
$l['ram_exp'] = '';
$l['burst'] = 'Max Burst / Swap';
$l['burst_exp'] = '';
$l['bandwidth'] = 'Max Bandwidth';
$l['bandwidth_exp'] = 'Zero (<b>0</b>) means unlimited bandwidth';
$l['cpu'] = 'Default CPU Weight';
$l['cpu_exp'] = '';
$l['cores'] = 'Max Cores / VM';
$l['cores_exp'] = 'The user cannot create a VPS above this limit';
$l['num_cores'] = 'Total Cores';
$l['num_cores_exp'] = 'The total number of cores allowed. Zero (<b>0</b>) means unlimited cores';
$l['cpu_percent'] = 'Default CPU %';
$l['cpu_percent_exp'] = 'All VPS created by the user would have this CPU %';
$l['num_ipv4'] = 'Max IPv4';
$l['num_ipv4_exp'] = '';
$l['num_ipv6_subnet'] = 'Max IPv6 Subnets';
$l['num_ipv6_subnet_exp'] = '';
$l['num_ipv6'] = 'Max IPv6';
$l['num_ipv6_exp'] = '';
$l['openvz'] = 'OpenVZ';
$l['openvz_exp'] = 'Allow user to create OpenVZ VMs';
$l['xen'] = 'Xen';
$l['xen_exp'] = 'Allow user to create Xen VMs';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = 'Allow user to create Xen HVM VMs';
$l['xcp'] = 'XCP';
$l['xcp_exp'] = 'Allow user to create XCP VMs';
$l['xcphvm'] = 'XCP HVM';
$l['xcphvm_exp'] = 'Allow user to create XCP HVM VMs';
$l['kvm'] = 'KVM';
$l['kvm_exp'] = 'Allow user to create KVM VMs';
$l['sg'] = 'Server Groups Allowed';
$l['sg_exp'] = 'If no group is selected than the user will not be able to create any VPS';
$l['mg'] = 'Media Groups';
$l['mg_exp'] = 'If no media group is selected, then ALL templates and ISO will become available to this user';
$l['dns_plan'] = 'DNS Plan';
$l['dnsplan_exp'] = 'The DNS plan for the user';
$l['acl_plan'] = 'Access Control';
$l['no_acl'] = 'Not used';
$l['network_speed'] = 'Network Speed';
$l['network_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['upload_speed'] = 'Upload Speed';
$l['upload_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['net_kb'] = 'KB/s';
$l['no_limit'] = 'No Restriction';

?>
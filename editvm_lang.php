<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vpsmanage_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 2.0.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Julien
// Date:       14th Dec 2011
// Time:       16:00 hrs
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
$l['<title>'] = 'Edit VPs';
$l['page_head'] = 'Edit Instance';
$l['vs_user'] = 'User';
$l['vs_user_exp'] = 'Select an existing user OR add a user';
$l['user_email'] = 'User Email';
$l['user_pass'] = 'Password';
$l['add_user'] = 'Add User';
$l['unknown'] = 'Unknown';
$l['vsos'] = 'Operating System';
$l['vsos_exp'] = 'The current operating system of this VPS';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = 'If an ISO is selected the machine will be booted from that ISO';
$l['none'] = 'None';
$l['hostname'] = 'Hostname';
$l['hostname_exp'] = 'Enter the hostname for the VPS. e.g. www.domain.com';
$l['rootpass'] = 'VPS Root Password';
$l['rootpass_exp'] = 'Leave empty if you do not want to change the current password';
$l['randpass'] = 'Make another Random Password';
$l['ip'] = 'IP Address';
$l['ips_exp'] = 'You can choose from the IP Pool or specify other IPs';
$l['ips6_subnet'] = 'IPv6 Subnet';
$l['ips6_subnet_exp'] = 'You can choose from the IPv6 Subnet List';
$l['randpass'] = 'Make another Random Password';
$l['free'] = 'Free';
$l['ips6'] = 'IPv6 Addresses';
$l['ips6_exp'] = 'You can specify the number of IPv6 to assign or choose from the IPv6 Pool';
$l['space'] = 'Disk Space';
$l['space_exp'] = 'The allowed disk space for the VPS';
$l['ram'] = 'Guaranteed RAM';
$l['ram_exp'] = 'The amount of RAM which the VPS will always have';
$l['burst'] = 'Burstable RAM';
$l['burst_exp'] = 'The maximum amount of RAM which the VPS can use';
$l['swap'] = 'Swap RAM';
$l['swap_exp'] = '';
$l['bandwidth'] = 'Bandwidth';
$l['bandwidth_exp'] = 'Monthly Bandwidth limit of the VPS. 0 (Zero) for unlimited';
$l['cores'] = 'CPU Cores';
$l['cpucore_exp'] = 'Recommended Value :';
$l['cores_max'] = 'Cores Max';
$l['unlimited'] = 'Unlimited';
$l['network_speed'] = 'Network Speed';
$l['network_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['upload_speed'] = 'Upload Speed';
$l['upload_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['net_kb'] = 'KB/s';
$l['no_limit'] = 'No Restriction';
$l['vncpass'] = 'VNC Password';
$l['vncpass_exp'] = 'The VNC Password for the VPS. Click on the icon to generate a new random password';
$l['submit'] = 'Edit Virtual Server';
$l['done'] = 'The Virtual Server has been sucessfully edited. Return to <a href="'.$globals['index'].'act=listvs">Virtual Server Overview</a>';
$l['addvoption'] = 'Advanced Options';
$l['no_uid'] = 'No user was selected';
$l['usevirtio'] = 'Enable virtio';
$l['exp_usevirtio'] = 'Use <b>virtio</b> as the IO virtualization';	

// Error strings
$l['no_nonalphanumeric'] = 'No Non-Alphanumeric characters are allowed for the VNC Password';
$l['less_space'] = 'You don\'t have enough Disk Space to create this VPS';
$l['less_ram'] = 'You don\'t have enough ram to create this VPS';
$l['max_cores_exceeded'] = 'You are not allowed to create a VM with so many cores';
$l['less_cores'] = 'You don\'t have enough CPU Cores to create this VPS';
$l['less_burst'] = 'You don\'t have enough Burst Ram to create this VPS';
$l['ipv4_over'] = 'The Region you have selected does not have enough IPv4 resources to create this VM. Please report this to the Admin';
$l['ipv6_over'] = 'The Region you have selected does not have enough IPv6 resources to create this VM. Please report this to the Admin';
$l['ipv6_subnet_over'] = 'The Region you have selected does not have enough IPv6 Subnet(s) to create this VM. Please report this to the Admin';
$l['less_ipv4'] = 'You don\'t have enough IPv4 Address(s) to create this VPS';
$l['less_ipv6'] = 'You don\'t have enough IPv6 Address(s) to create this VPS';
$l['less_ipv6_subnet'] = 'You don\'t have enough IPv6 Subnet(s) to create this VPS';
$l['wrong_user'] = 'You cannot change to that user';
$l['only_user'] = 'While editing the user of the VM, the resources cannot be changed';
$l['strength_indicator'] = 'Strength Indicator';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';

?>
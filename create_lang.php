<?php

//////////////////////////////////////////////////////////////
//===========================================================
// create_lang.php
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

$l['no_type'] = '请指定虚拟化的类型';
$l['num_vs_over'] = '你已经创建的虚拟机所允许的最大数量';

$l['slave_cant'] = '添加虚拟服务器错误';
$l['slave_cant_exp'] = '从服务器不允许添加虚拟服务器！';
$l['none_plan'] = '无';
$l['no_hname'] = '请指定主机名';
$l['no_os'] = '请为你的虚拟机选择一个操作系统';
$l['no_rootpass'] = 'Please specify a Root Password';
$l['no_disk_space'] = 'Please specify the Disk Space to be allocated';
$l['no_ram'] = 'Please specify the RAM memory';
$l['no_vncpass'] = 'Please specify a VNC Password';
$l['no_bandwidth'] = 'Please specify the Bandwidth';
$l['no_cpu_units'] = 'Please specify the CPU Units';
$l['no_cpu_cores'] = 'Please specify the Number of Cores';
$l['cores_max'] = 'Cores Max';
$l['invalid_sg'] = 'The Region you selected is invalid';
$l['invalid_virt'] = 'The Region you selected does not support the virtualization you have chosen';
$l['no_percent_cpu'] = 'Please specify the Percent CPU utilization allowed';
$l['no_swap_ram'] = 'Please specify the SWAP RAM';
$l['no_burst_ram'] = 'Please specify the Burstable RAM limit';
$l['no_inodes'] = 'Please specify the number of Inodes allowed';
$l['no_io'] = 'Please choose the I/O Priority';
$l['invalid_os'] = 'The OS you submitted is invalid';
$l['no_ip'] = 'Please specify atleast one IP for the VPS';
$l['invalid_ip'] = 'The following IP(s) are invalid : ';
$l['used_ip'] = 'The following IP(s) are used by another VPS : ';
$l['err_insert'] = 'There was an error while saving the new VPS information.';
$l['err_create'] = 'There was an error in creating the VPS. <a href="'.$globals['index'].'act=rebuild&vpsid=&soft-1;">Click here to reinstall the Virtual Server</a>';
$l['err_rootpass'] = 'There was an error in setting the Root Password of the new VPS';
$l['err_vncpass'] = 'There was an error in setting the Password of the new VNC';
$l['invalid_uid'] = 'The User you submitted does not exist';
$l['no_user'] = 'You did not specify the user email';
$l['no_user_pass'] = 'You did not specify the user password';
$l['invalid_email'] = 'The user email address is invalid';
$l['emailexist'] = 'The new user email you specified already exists';
$l['err_user'] = 'There was an error while adding the user';
$l['err_start'] = 'There was an error while starting the new VPS';
$l['err_numvs'] = 'Your license does not permit the creation of more VPS';
$l['err_mac'] = 'Please specify the MAC Address';
$l['err_dns'] = 'Please specify the correct Nameserver';
$l['err_tccreate'] = 'There was an error while setting the Network Limit for the VPS';
$l['invalid_hostname'] = 'The hostname you submitted is not valid';
$l['no_nonalphanumeric'] = 'No Non-Alphanumeric characters are allowed for the VNC Password';
$l['no_shadow'] = 'You did not specify the shadow memory';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['less_ram'] = 'You don\'t have enough ram to create this VPS';
$l['less_burst'] = 'You don\'t have enough Burst Ram to create this VPS';
$l['less_space'] = 'You don\'t have enough Disk Space to create this VPS';
$l['less_inodes'] = 'The inodes should not be less than 50000';
$l['less_vs'] = 'You are not allowed to create more VMs';
$l['less_bandwidth'] = 'You don\'t have enough Bandwidth to create this VPS';
$l['less_ipv4'] = 'You don\'t have enough IPv4 Address(s) to create this VPS';
$l['less_ipv6'] = 'You don\'t have enough IPv6 Address(s) to create this VPS';
$l['less_ipv6_subnet'] = 'You don\'t have enough IPv6 Subnet(s) to create this VPS';
$l['max_cores_exceeded'] = 'You are not allowed to create a VM with so many cores';
$l['less_cores'] = 'You don\'t have enough CPU Cores to create this VPS';
$l['no_user_resource'] = 'You have reached the maximum number of Users you are allowed to create';
$l['no_server'] = 'The Region you have selected is completely utilized and does not have enough resources to create this VM. Please report this to the Admin';
$l['ipv4_over'] = 'The Region you have selected does not have enough IPv4 resources to create this VM. Please report this to the Admin';
$l['ipv6_over'] = 'The Region you have selected does not have enough IPv6 resources to create this VM. Please report this to the Admin';
$l['ipv6_subnet_over'] = 'The Region you have selected does not have enough IPv6 Subnet(s) to create this VM. Please report this to the Admin';
$l['no_webuzo_template'] = 'The OS Template you selected is not a Webuzo Template';
$l['err_swapsize'] = 'The SWAP size specified cannot be greater than or equal to the total disk space specified';
$l['inv_kvm_cache'] = 'The Disk Cache submitted is invalid';
$l['inv_io_mode'] = 'The I/O Policy submitted is invalid';
$l['inv_vnc_keymap'] = 'The VNC keymap submitted is invalid';
$l['err_vpslimit'] = 'VPS creation limit exceeded';


// Theme strings
$l['<title>'] = 'Launch Instance';
$l['page_head'] = 'Launch Instance';
$l['vstype'] = 'Type';

$l['add_vs'] = 'Add Virtual Server';
$l['done'] = 'The Virtual Server has been created. Return to <a href="'.$globals['index'].'act=listvs">Virtual Server Overview</a>';
$l['newvs_vpsid'] = 'VPS ID';
$l['newvs_vps_name'] = 'VPS Name';
$l['newvs_rootpass'] = 'Root Password';
$l['newvs_vnc'] = 'VNC Details';
$l['newvs_vncpass'] = 'VNC Password';
$l['newvs_ips'] = 'IPs';
$l['newvs_ips6'] = 'IPv6';
$l['vs_server'] = 'Server';
$l['exp_server'] = 'Change the current server to change the server';
$l['vs_ser_id'] = 'ID';
$l['vs_user'] = 'User';
$l['vs_user_exp'] = 'Select an existing user OR add a user';
$l['user_email'] = 'User Email';
$l['user_pass'] = 'Password';
$l['add_user'] = 'Add User';
$l['regions'] = 'Region';
$l['virt_type'] = 'Virtualization';
$l['os'] = 'Operating System';
$l['select'] = 'Select';
$l['vs_plan'] = 'Select Plan';
$l['plan_exp'] = 'Select a pre-defined plan';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = 'Do you want to enable full virtualization for this VPS ?';
$l['vsos'] = 'Operating System';
$l['vsos_exp'] = 'Select the Operating System for the VPS';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = 'If an ISO is selected the machine will be booted from that ISO';
$l['sec_vsiso'] = 'ISO for secondary CDROM ';
$l['sec_vsiso_exp'] = 'Select an ISO for secondary CDROM';
$l['none'] = 'None';
$l['rootpass'] = 'VPS Root Password';
$l['rootpass_exp'] = 'The Password of the Root User / Administrator of the VPS';
$l['randpass'] = 'Make another Random Password';
$l['hostname'] = 'Hostname';
$l['hostname_exp'] = 'Enter the hostname for the VPS. e.g. www.domain.com';
$l['ip'] = 'IP Address';
$l['ips_exp'] = 'You can choose from the IP Pool or specify other IPs';

$l['ips'] = 'IP Address';
$l['ips_exp'] = 'You can specify the number of IPs to assign';
$l['ips6_subnet'] = 'IPv6 Subnets';
$l['ips6_subnet_exp'] = 'You can specify the number of IPv6 Subnets to assign';
$l['ips6'] = 'IPv6 Addresses';
$l['ips6_exp'] = 'You can specify the number of IPv6 to assign';
$l['add_ip'] = '+';
$l['remove_ip'] = '-';
$l['add_to_ips'] = '<<';
$l['rem_from_ips'] = 'Remove this IP';
$l['add_dns'] = '+';
$l['hdd'] = 'Disk Space';
$l['exp_hdd'] = 'The allowed disk space for the VPS';
$l['mac'] = 'MAC Address';
$l['exp_mac'] = 'Six groups of two hexadecimal digits separated by colons (:), Eg like 01:23:45:67:89:ab';
$l['space_gb'] = 'GB';
$l['inodes'] = 'Inodes';
$l['iondisk'] = 'The maximum number of Inodes (i.e. Files) allowed within the VPS. Recommended value : 500000+';
$l['gram'] = 'Guaranteed RAM';
$l['exp_gram'] = 'The amount of RAM which the VPS will always have';
$l['ram_mb'] = 'MB';
$l['bram'] = 'Burstable RAM';
$l['exp_bram'] = 'The maximum amount of RAM which the VPS can use';
$l['swap'] = 'Swap RAM';
$l['exp_swap'] = '';
$l['exp_swap_hvm'] = 'An attempt will be made to create a SWAP partition if there is a OS Template selected above';
$l['band'] = 'Bandwidth';
$l['exp_band'] = 'Monthly Bandwidth limit of the VPS. 0 (Zero) for unlimited';
$l['band_gb'] = 'GB';
$l['cpunit'] = 'CPU Units';
$l['cpalloc'] = 'CPU units to be allocated';
$l['cpalloc_xen'] = 'Recommended Value : 256';
$l['cpalloc_openvz'] = 'Recommended Value : 1000';
$l['cpalloc_kvm'] = 'Recommended Value : 1024';
$l['units'] = 'units';
$l['cores'] = 'CPU Cores';
$l['cpucore_exp'] = 'Recommended Value :';
$l['percent'] = 'CPU %';
$l['cpuperutil'] = 'The CPU time in percent the corresponding VPS is not allowed to exceed. <br />Set <b>0</b> for no restriction. <br />Recommended Value : 10';
$l['io'] = 'I/O Priority';
$l['io0-7'] = 'Choose priority from 0-7';
$l['na'] = 'Network Speed';
$l['na_exp'] = 'Please Mention the Network Speed';
$l['ubcsettings'] = 'UBC Settings';
$l['exp_ubc'] = 'If checked then you will be redirected to edit the UBC Settings of the VPS';
$l['submit'] = 'Add Virtual Server';
$l['addvoption'] = 'Advanced Options';
$l['addvhide']	= 'Hide Advance option';
$l['network_speed'] = 'Network Speed';
$l['network_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['upload_speed'] = 'Upload Speed';
$l['upload_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['net_kb'] = 'KB/s';
$l['no_limit'] = 'No Restriction';
$l['shadow'] = 'Shadow Memory';
$l['shadow_exp'] = 'Recommended value : 8 MB';
$l['vncpass'] = 'VNC Password';
$l['vncpass_exp'] = 'The VNC Password for the VPS. Click on the icon to generate a new random password';
$l['free'] = 'Free';
$l['band_suspend']= 'Bandwidth suspend ';
$l['exp_band_suspend'] = 'Suspend the VPS if it is uses more than specified bandwidth';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = 'Enable Tun/Tap for a VPS';
$l['exp_ppp'] = 'Enable PPP (Point to Point Protocol) for a VPS';
$l['osreinstall'] = 'OS Reinstall Limit';
$l['exp_osreinstall'] = 'If you want to limit the number of OS re-installs per month. <br />Eg. 0 - is unlimited';
$l['changenic'] = 'Virtual Network Interface Type';
$l['exp_changenic'] = 'If you want to change the network interface type. Options are default or E1000. <b>virtio</b> will be used as the virtual nic type if <b>virtio</b> is enabled';
$l['add_route'] = 'Use routed network';
$l['exp_add_route'] = 'If checked, it will use routed networking.';
$l['nic_default'] = 'Realtek 8139(default)';
$l['nic_e1000'] = 'Intel E1000';
$l['change_vif_type'] = 'Virtual Network Interface Emulation type';
$l['exp_change_vif_type'] = 'If you want to change the network interface emulation type. Options are <b>netfront</b> or <b>ioemu</b>.';
$l['viftype_ioemu'] = 'ioemu';
$l['viftype_netfront'] = 'netfront (default)';
$l['usevirtio'] = 'Enable virtio';
$l['exp_usevirtio'] = 'Use <b>virtio</b> as the IO virtualization';	
$l['usesec_cdrom'] = 'Enable Secondary CD ROM';
$l['exp_usesec_cdrom'] = 'Enable this to attach a secondary ISO to the virtual machine.';	
$l['kvm_cache'] = 'Disk Caching';
$l['exp_kvm_cache'] = 'Controls the cache mechanism';
$l['io_mode'] = 'I/O Policy';
$l['vnc_keymap'] = 'VNC Console Keymap';
$l['dns'] = 'DNS Nameservers';
$l['exp_dns'] = 'If not aware then use 4.2.2.1 and 4.2.2.2';
$l['mg'] = 'Media Groups';
$l['mg_exp'] = 'If no Media Group is assigned then all Media will be available to this VPS.';
$l['apps'] = 'Applications';
$l['apps_exp'] = 'Choose the Webuzo application you want to install';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = 'If enabled, VPS will be created with the Ploop format';

$l['mac_temp_vncdetails'] = 'MAC Address :';
$l['mail_temp_vnctitle'] = 'The VNC details are :';
$l['mail_temp_vncdetails'] = 'VNC Details :';
$l['mail_temp_vncpasswd'] = 'VNC Password :';

$l['reinstall'] = 'Reinstall Virtual Server';$l['space'] = 'Disk Space';
$l['space'] = 'Disk Space';
$l['space_exp'] = 'The allowed disk space for the VPS';
$l['ram'] = 'Guaranteed RAM';
$l['ram_exp'] = 'The amount of RAM which the VPS will always have';
$l['burst'] = 'Burstable RAM';
$l['burst_exp'] = 'The maximum amount of RAM which the VPS can use';
$l['swap'] = 'Swap RAM';
$l['swap_exp'] = '';
$l['swap_hvm'] = 'An attempt will be made to create a SWAP partition if there is a OS Template selected above';
$l['bandwidth'] = 'Bandwidth';
$l['bandwidth_exp'] = 'Monthly Bandwidth limit of the VPS. 0 (Zero) for unlimited';


//Progress Updates
$l['checking_data'] = 'Checking submitted data...';
$l['beginning_creation'] = 'Beginning VPS creation...';
$l['building_vps'] = 'Building the VPS...';
$l['setting_mac'] = 'Inserting into database...';
$l['setting_pass'] = 'Setting the root password...';
$l['starting_vps'] = 'Starting the VPS...';
$l['verfying_vps'] = 'Verfiying VPS build...';
$l['final_steps'] = 'Performing final steps...';
$l['pbar_notice'] = 'Note: This process may take a while.';
$l['pbar_tip'] = 'Navigating away from this page, will not affect this process.';
$l['overcomit_free'] = 'Overcommitted Free RAM';
$l['free'] = 'Free';
$l['unlimited'] = 'Unlimited';
$l['submit'] = 'Create';
$l['strength_indicator'] = 'Strength Indicator';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';


?>
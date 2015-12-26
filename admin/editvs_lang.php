<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editvs_lang.php
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


$l['slave_cant'] = 'Edit Virtual Server Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to edit Virtual Server !';
$l['none_plan'] = 'None';
$l['no_hname'] = 'Please specify the Hostname';
$l['no_os'] = 'Please choose a OS for the VPS';
$l['no_rootpass'] = 'Please specify a Root Password';
$l['no_disk_space'] = 'Please specify the disk space to be allocated';
$l['no_ram'] = 'Please specify the RAM memory';
$l['no_bandwidth'] = 'Please specify the Bandwidth';
$l['no_cpu_units'] = 'Please specify the CPU Units';
$l['no_cpu_cores'] = 'Please specify the Number of Cores';
$l['no_percent_cpu'] = 'Please specify the Percent CPU utilization allowed';
$l['no_swap_ram'] = 'Please specify the SWAP RAM';
$l['no_burst_ram'] = 'Please specify the Burstable RAM limit';
$l['no_inodes'] = 'Please specify the number of Inodes allowed';
$l['no_io'] = 'Please choose the I/O Priority';
$l['invalid_os'] = 'The OS you submitted is invalid';
$l['no_ip'] = 'Please specify atleast one IP for the VPS';
$l['invalid_ip'] = 'The following IP(s) are invalid : ';
$l['invalid_ip_subnet'] = 'The following IP Subnet(s) are invalid : ';
$l['used_ip'] = 'The following IP(s) are used by another VPS : ';
$l['used_ip_subnet'] = 'The following IP Subnet(s) are used by another VPS : ';
$l['err_edit'] = 'There was an error in editing the VPS';
$l['err_rootpass'] = 'There was an error in setting the Root Password of the new VPS';
$l['err_vncpass'] = 'There was an error in setting the Password of the new VNC';
$l['no_uid'] = 'No user was selected';
$l['invalid_uid'] = 'The User you submitted does not exist';
$l['invalid_hostname'] = 'The hostname you submitted is not valid';
$l['no_nonalphanumeric'] = 'No Non-Alphanumeric characters are allowed for the VNC Password';
$l['no_shadow'] = 'You did not specify the shadow memory';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['err_mac'] = 'Please specify the MAC Address';
$l['err_dns'] = 'Please specify the correct Nameserver';
$l['err_space'] = 'You cannot shrink the disk space of a VPS';
$l['err_effective_space'] = 'The effective disk space (<b>Space - Swap</b>) of the VPS cannot be less than the previous effective disk space';
$l['no_webuzo_template'] = 'The OS Template of this VPS is not a Webuzo Template.';
$l['inv_kvm_cache'] = 'The Disk Cache submitted is invalid';
$l['inv_io_mode'] = 'The I/O Policy submitted is invalid';
$l['inv_vnc_keymap'] = 'The VNC keymap submitted is invalid';
$l['less_ram'] = 'The Node doesn\'t have enough ram to allocate to this VPS. Please reduce the RAM allocated to this VPS.';
$l['less_space'] = 'The Node doesn\'t have enough Disk Space to create this VPS';
$l['rescue_edit_no_allowed'] = 'The VPS is in Rescue Mode. Edit operation not allowed';
$l['inv_storage'] = 'The storage for the VPS is invalid';
$l['no_storage'] = 'The primary storage could not be found';
$l['inv_space'] = 'The space format you submitted is invalid';
$l['primary_disk_modified'] = 'You cannot modify the primary disk storage or uuid';
$l['mul_storage'] = 'Secondary disk option not available for this Virtualization type';
$l['inv_cpu_mode'] = 'The CPU Mode Specified is invalid';

// Theme Strings
$l['<title>'] = 'Edit Virtual Server';
$l['heading'] = 'Edit Virtual Server';
$l['done'] = 'The Virtual Server has been edited. Return to <a href="'.$globals['index'].'act=vs">Virtual Server Overview</a>';
$l['vs_server'] = 'Server';
$l['vpsid'] = 'ID';
$l['vpsname'] = 'VID';
$l['exp_server'] = 'The server this VPS belongs to';
$l['vs_ser_id'] = 'ID';
$l['vs_user'] = 'User';
$l['vs_user_exp'] = 'Select an existing user OR add a user';
$l['vs_plan'] = 'Select Plan';
$l['plan_exp'] = 'Select a pre-defined plan';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = 'Do you want to enable full virtualization for this VPS ?';
$l['none'] = 'None';
$l['unknown'] = 'Unknown';
$l['vsos'] = 'Operating System';
$l['vsos_exp'] = 'The current operating system of this VPS';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = 'If an ISO is selected the machine will be booted from that ISO';
$l['sec_vsiso'] = 'ISO for secondary CDROM ';
$l['sec_vsiso_exp'] = 'Select an ISO for secondary CDROM';
$l['rootpass'] = 'VPS Root Password';
$l['rootpass_exp'] = 'Leave empty if you do not want to change the current password';
$l['randpass'] = 'Make another Random Password';
$l['hostname'] = 'Hostname';
$l['hostname_exp'] = 'Enter the hostname for the VPS. e.g. www.domain.com';
$l['ip'] = 'IP Address';
$l['ips_exp'] = 'You can choose from the IP Pool or specify other IPs';
$l['ips6'] = 'IPv6 Addresses';
$l['ips6_exp'] = 'You can specify the number of IPv6 to assign or choose from the IPv6 Pool';
$l['ips6_subnet'] = 'IPv6 Subnet';
$l['ips6_subnet_exp'] = 'You can choose from the IPv6 Subnet List';
$l['ips_int'] = 'Internal IP Addresses';
$l['ips_int_exp'] = 'You can choose from the Internal IP Addresses List';
$l['add_ip'] = '+';
$l['remove_ip'] = '-';
$l['add_to_ips'] = '<<';
$l['rem_from_ips'] = 'Remove this IP';
$l['add_dns'] = '+';
$l['hdd'] = 'Disk Space';
$l['exp_hdd'] = 'The allowed disk space for the VPS';
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
$l['cpucore_exp'] = 'Recommended Value : 4';
$l['percent'] = 'CPU %';
$l['cpuperutil'] = 'The CPU time in percent the corresponding VPS is not allowed to exceed. <br />Set <b>0</b> for no restriction. <br />Recommended Value : 10';
$l['io'] = 'I/O Priority';
$l['io0-7'] = 'Choose priority from 0-7';
$l['na'] = 'Network Speed';
$l['na_exp'] = 'Please Mention the Network Speed';
$l['shadow'] = 'Shadow Memory';
$l['shadow_exp'] = 'Recommended value : 8 MB';
$l['ubcsettings'] = 'UBC Settings';
$l['exp_ubc'] = 'If checked then you will be redirected to edit the UBC Settings of the VPS';
$l['submit'] = 'Edit Virtual Server';
$l['network_speed'] = 'Network Speed';
$l['network_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['net_kb'] = 'KB/s';
$l['upload_speed'] = 'Upload Speed';
$l['upload_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['no_limit'] = 'No Restriction';
$l['vncpass'] = 'VNC Password';
$l['vncpass_exp'] = 'Leave empty if you do not want to change the current password. Click on the icon to generate a new random password';
$l['boot_order'] = 'Boot Order';
$l['free'] = 'Free';
$l['band_suspend']= 'Bandwidth suspend ';
$l['exp_band_suspend'] = 'Suspend the VPS if it uses more bandwidth than the allowed limit';
$l['addvoption'] = 'Advance option';
$l['addvhide']	= 'Hide Advance option';
$l['mac'] = 'MAC Address';
$l['mac_suc'] = 'The changes will take effect when you restart the VPS';
$l['exp_mac'] = 'Six groups of two hexadecimal digits separated by colons (:), Eg like 01:23:45:67:89:ab';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = 'Enabling Tun/Tap for a VPS';
$l['exp_ppp'] = 'Enable PPP (Point to Point Protocol) for a VPS';
$l['dns'] = 'DNS Nameservers';
$l['exp_dns'] = 'If not aware then use 4.2.2.1 and 4.2.2.2';
$l['reboot'] = 'The changes will take effect when you Stop and Start the VPS';
$l['osreinstall'] = 'OS Reinstall Limit';
$l['exp_osreinstall'] = 'If you want to limit the number of OS re-installs per month. <br />Eg. 0 - is unlimited';
$l['changenic'] = 'Virtual Network Interface Type';
$l['exp_changenic'] = 'If you want to change the network interface type. Options are default or E1000';
$l['add_route'] = 'Set default route';
$l['exp_add_route'] = 'Check this if you want to explicitly set the default route for the IP.';
$l['nic_default'] = 'Realtek 8139(default)';
$l['nic_e1000'] = 'Intel E1000';
$l['nic_novell'] = 'Novell NE2000';
$l['nic_i82559er'] = 'Intel i82559er';
$l['nic_pcnet'] = 'AMD PCNET';
$l['nic_ne2k_isa'] = 'Novell E2000 ISA';
$l['change_vif_type'] = 'Virtual Network Interface Emulation type';
$l['exp_change_vif_type'] = 'If you want to change the network interface emulation type. Options are <b>netfront</b> or <b>ioemu</b>.';
$l['viftype_ioemu'] = 'ioemu';
$l['viftype_netfront'] = 'netfront (default)';
$l['usevirtio'] = 'Enable virtio';
$l['exp_usevirtio'] = 'Use <b>virtio</b> as the IO virtualization';	
$l['kvm_cache'] = 'Disk Caching';
$l['exp_kvm_cache'] = 'Controls the cache mechanism';
$l['io_mode'] = 'I/O Policy';
$l['vnc_keymap'] = 'VNC Console Keymap';
$l['mg'] = 'Media Groups';
$l['mg_exp'] = 'If no Media Group is assigned then all Media will be available to this VPS.';
$l['apps'] = 'Applications';
$l['apps_exp'] = 'Choose the Webuzo application you want to install';
$l['overcomit_free'] = 'Overcommitted Free RAM';
$l['oversell_free'] = 'Overcommitted Free Space';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = 'If enabled, VPS will be created with the Ploop format';
$l['create_date'] = 'VPS Creation Date';
$l['last_edited'] = 'Last Edited';
$l['cpupin'] = 'CPU Affinity';
$l['cpupin_exp'] = 'Pin the particular CPU Cores to this VPS. You can choose multiple CPU Cores.';
$l['cpupin_select'] = 'Select the vCPU';
$l['pv_on_hvm'] = 'PV-on-HVM driver Support';
$l['exp_pv_on_hvm'] = 'The primary goal of PV on HVM is to boost performance of fully virtualized HVM guests through use of specially optimized paravirtual device drivers';
$l['strength_indicator'] = 'Strength Indicator';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';
$l['total_iops_sec'] = 'Total I/O\'s per sec';
$l['read_bytes_sec'] = 'Read Mega Byte\'s/s';
$l['write_bytes_sec'] = 'Write Mega Byte\'s/s';
$l['vps_id'] = 'Select VPS';
$l['usevirtio'] = 'Enable virtio';
$l['exp_usevirtio'] = 'Use <b>virtio</b> as the IO virtualization';
$l['virtio_warning'] = 'Enabling virtio may cause unpredictable changes in the VPS. Do you still want to enable it ? NOTE: You will not be able to disable it later !';
$l['rem_storage'] = 'Delete this storage';
$l['del_storage_warn'] = 'Are you sure you want to delete this disk ? All data will be lost !';
$l['alert_failure'] = 'Failed To execute';
$l['title_start'] = 'Start';
$l['title_stop'] = 'Stop';
$l['title_restart'] = 'Restart';
$l['title_poweroff'] = 'Power Off';
$l['title_vnc'] = 'VNC';
$l['title_suspend'] = 'VPS Suspend';
$l['title_unsuspend'] = 'VPS Unsuspend';
$l['title_suspend_net'] = 'Network Suspend';
$l['title_unsuspend_net'] = 'Network Unsuspend';
$l['kvm_vga'] = 'Enable VGA';
$l['acceleration'] = 'Enable Acceleration';
$l['acceleration_exp'] = 'If checked then 2D and 3D acceleration will be enabled for the VPS';
$l['cpu_mode'] = 'CPU Mode';
$l['disable_ebtables'] = 'Disable ebtables';
$l['admin_managed'] = 'Managed by Admin';
$l['exp_admin_managed'] = 'If checked, VPS can not be managed from Enduser Panel.';

?>
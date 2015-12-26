<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addplan_lang.php
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

$l['slave_cant'] = 'Add Plan Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to add Plans !';
$l['noplantype'] = 'Please choose the Plan Type';
$l['no_name'] = 'Please specify the Name of the plan';
$l['no_disk_space'] = 'Please specify the disk space to be allocated';
$l['no_ram'] = 'Please specify the RAM memory';
$l['no_bandwidth'] = 'Please specify the Bandwidth';
$l['no_cpu_units'] = 'Please specify the CPU Units';
$l['no_cpu_cores'] = 'Please specify the Number of Cores';
$l['no_percent_cpu'] = 'Please specify the Percent CPU utilization allowed';
$l['no_swap_ram'] = 'Please specify the SWAP RAM';
$l['no_burst_ram'] = 'Please specify the Burstable RAM limit';
$l['no_inodes'] = 'Please specify the number of Inodes allowed';
$l['plannameexist'] = 'Plan Name already exists';
$l['no_io'] = 'Please choose the I/O Priority';

//Theme Settings
$l['<title>'] = 'Add Plan';
$l['add_plan'] = 'Add Plan';
$l['done'] = 'The Plan has been saved. Return to <a href="'.$globals['index'].'act=plans">Plans Overview</a>';
$l['plantype'] = 'Plan Type';
$l['planname'] = 'Plan Name';
$l['nameofplan'] = 'The name of this plan';
$l['dspace'] = 'Disk Space';
$l['hspaceallot'] = 'The allowed disk space for the VPS';
$l['inodes'] = 'Inodes';
$l['iondisk'] = 'Number of Inodes. Recommended value : 500000+';
$l['gram'] = 'Guaranteed RAM';
$l['gram_exp'] = 'The amount of RAM which the VPS will always have';
$l['burst_ram'] = 'Burstable RAM';
$l['burst_ram_exp'] = 'The maximum amount of RAM which the VPS can use';
$l['bwidth'] = 'Bandwidth';
$l['balloc'] = 'Monthly Bandwidth limit of the VPS';
$l['cpu'] = 'CPU Units';
$l['cpalloc'] = 'CPU units to be allocated';
$l['cpalloc_xen'] = 'Recommended Value : 256';
$l['cpalloc_openvz'] = 'Recommended Value : 1000';
$l['cpalloc_kvm'] = 'Recommended Value : 1024';
$l['cpucore'] = 'CPU Cores';
$l['cpucore_exp'] = 'Recommended Value : 4';
$l['cpupercent'] = 'CPU %';
$l['cpuperutil'] = 'The CPU time in percent the corresponding VPS is not allowed to exceed. <br />Set <b>0</b> for no restriction. <br />Recommended Value : 10';
$l['ioprior'] = 'I/O priority';
$l['io0-7'] = 'Choose priority from 0-7';
$l['swap'] = 'SWAP Ram';
$l['plan_ips'] = 'Number of IPs';
$l['plan_ips_exp'] = 'Specify any positive integer. If nothing is specified (or 0), you will have to select the IPs when creating a VPS.';
$l['plan_ips6_subnet'] = 'Number of IPv6 Subnets';
$l['plan_ips6_subnet_exp'] = 'Specify any positive integer. If nothing is specified (or 0), you will have to select the IPs when creating a VPS.';
$l['plan_ips6'] = 'Number of IPv6 Addresses';
$l['plan_ips6_exp'] = 'Specify any positive integer. If nothing is specified (or 0), you will have to select the IPs when creating a VPS.';
$l['plan_ips_int'] = 'Number of Internal IPs';
$l['plan_ips_int_exp'] = 'Specify any positive integer. If nothing is specified (or 0), you will have to select the Internal IPs when creating a VPS.';
$l['ubcsettings'] = 'UBC Settings';
$l['exp_ubc'] = 'If checked then you will be redirected to edit the UBC Settings of this Plan';
$l['submit'] = 'Save Plan';
$l['network_speed'] = 'Network Speed';
$l['network_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['net_kb'] = 'KB/s';
$l['no_limit'] = 'No Restriction';
$l['virtio'] = 'Enable virtio';
$l['virtio_exp'] = 'Use virtio as the IO virtualization';
$l['nic_type'] = 'Virtual Network Interface Type';
$l['nic_type_exp'] = 'If you want to change the network interface type. Options are default or E1000. virtio will be used as the virtual nic type if virtio is enabled';
$l['select_os'] = 'Select OS';

// Ubc related Settings
$l['no_bkmemsize'] = '<b>kmemsize</b> barrier not specified';
$l['no_blockedpages'] = '<b>lockedpages</b> barrier not specified';
$l['no_bnumproc'] = '<b>numproc</b> barrier not specified';
$l['no_bphyspages'] = '<b>physpages</b> barrier not specified';
$l['no_bnumtcpsock'] = '<b>numtcpsock</b> barrier not specified';
$l['no_bnumflock'] = '<b>numflock</b> barrier not specified';
$l['no_bnumpty'] = '<b>numpty</b> barrier not specified';
$l['no_bnumsiginfo'] = '<b>numsiginfo</b> barrier not specified';
$l['no_btcpsndbuf'] = '<b>tcpsndbuf</b> barrier not specified';
$l['no_btcprcvbuf'] = '<b>tcprcvbuf</b> barrier not specified';
$l['no_bothersockbuf'] = '<b>othersockbuf</b> barrier not specified';
$l['no_bdgramrcvbuf'] = '<b>dgramrcvbuf</b> barrier not specified';
$l['no_bnumothersock'] = '<b>numothersock</b> barrier not specified';
$l['no_bdcachesize'] = '<b>dcachesize</b> barrier not specified';
$l['no_bnumfile'] = '<b>numfile</b> barrier not specified';
$l['no_bnumiptent'] = '<b>numiptent</b> barrier not specified';
$l['no_bswappages'] = '<b>swappages</b> barrier not specified';
$l['no_bdiskinodes'] = '<b>diskinodes</b> barrier not specified';
$l['no_bdcachsize'] = '<b>dcachsize</b> barrier not specified';
$l['no_bquotaugidlimit'] = '<b>quotaugidlimit</b> barrier not specified';
$l['no_bmeminfo'] = '<b>meminfo</b> barrier not specified';

$l['no_lkmemsize'] = '<b>kmemsize</b> limit not specified';
$l['no_llockedpages'] = '<b>lockedpages</b> limit not specified';
$l['no_lnumproc'] = '<b>numproc</b> limit not specified';
$l['no_lphyspages'] = '<b>physpages</b> limit not specified';
$l['no_lnumtcpsock'] = '<b>numtcpsock</b> limit not specified';
$l['no_lnumflock'] = '<b>numflock</b> limit not specified';
$l['no_lnumpty'] = '<b>numpty</b> limit not specified';
$l['no_lnumsiginfo'] = '<b>numsiginfo</b> limit not specified';
$l['no_ltcpsndbuf'] = '<b>tcpsndbuf</b> limit not specified';
$l['no_ltcprcvbuf'] = '<b>tcprcvbuf</b> limit not specified';
$l['no_lothersockbuf'] = '<b>othersockbuf</b> limit not specified';
$l['no_ldgramrcvbuf'] = '<b>dgramrcvbuf</b> limit not specified';
$l['no_lnumothersock'] = '<b>numothersock</b> limit not specified';
$l['no_ldcachesize'] = '<b>dcachesize</b> limit not specified';
$l['no_lnumfile'] = '<b>numfile</b> limit not specified';
$l['no_lnumiptent'] = '<b>numiptent</b> limit not specified';
$l['no_lswappages'] = '<b>swappages</b> limit not specified';
$l['no_ldiskinodes'] = '<b>diskinodes</b> limit not specified';
$l['no_ldcachsize'] = '<b>dcachsize</b> limit not specified';
$l['no_lquotaugidlimit'] = '<b>quotaugidlimit</b> limit not specified';
$l['no_lmeminfo'] = '<b>meminfo</b> limit not specified';
$l['err_edit_vps'] = 'There was an error while applying the UBC settings to the VPS';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['no_shadow'] = 'Please speicfy the shadow memory';

//THEME Settings
$l['ubcsetting'] = 'UBC Settings';
$l['plan_name'] = 'Plan';
$l['vps_name'] = 'VPS';
$l['id'] = 'Id';
$l['barrier'] = 'Barrier';
$l['limit'] = 'Limit';
$l['kmemsize'] = 'kmemsize';
$l['lockedpages'] = 'lockedpages';
$l['numproc'] = 'numproc';
$l['physpages'] = 'physpages';
$l['numtcpsock'] = 'numtcpsock';
$l['numflock'] = 'numflock';
$l['numpty']= 'numpty';
$l['numsiginfo'] = 'numsiginfo';
$l['tcpsndbuf'] = 'tcpsndbuf';
$l['tcprcvbuf'] = 'tcprcvbuf';
$l['othersockbuf'] = 'othersockbuf';
$l['dgramrcvbuf'] = 'dgramrcvbuf';
$l['numothersock'] = 'numothersock';
$l['dcachesize'] = 'dcachesize';
$l['numfile'] = 'numfile';
$l['numiptent'] = 'numiptent';
$l['swappages'] = 'swappages'; 
$l['diskinodes'] = 'diskinodes';
$l['dcachsize'] = 'dcachsize';
$l['quotaugidlimit'] = 'quotaugidlimit';
$l['meminfo'] = 'meminfo';
$l['networksettings'] = 'Network Settings';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = 'If enabled, VPS will be created with the Ploop format';
$l['upload_speed'] = 'Upload Speed';
$l['upload_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['band_suspend']= 'Bandwidth suspend ';
$l['exp_band_suspend'] = 'Suspend the VPS if it is uses more than specified bandwidth';
$l['dns'] = 'DNS Nameservers';
$l['exp_dns'] = 'If not aware then use 4.2.2.1 and 4.2.2.2';
$l['add_dns'] = '+';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = 'Enable Tun/Tap for a VPS';
$l['exp_ppp'] = 'Enable PPP (Point to Point Protocol) for a VPS';
$l['ubcsettings'] = 'UBC Settings';
$l['exp_ubc'] = 'Check this if you want to save the UBC Settings';
$l['addvoption'] = 'Advanced Options';
$l['control_panel'] = 'Web Control Panel';
$l['control_panel_exp'] = 'This option will install selected web control panel in the VPS';
$l['mg'] = 'Media Groups';
$l['mg_exp'] = 'If no Media Group is assigned then all Media will be available to this VPS.';
$l['cpu_mode'] = 'CPU Mode';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = 'Do you want to enable full virtualization for this VPS ?';
$l['change_vif_type'] = 'Virtual Network Interface Emulation type';
$l['exp_change_vif_type'] = 'If you want to change the network interface emulation type. Options are <b>netfront</b> or <b>ioemu</b>.';
$l['viftype_ioemu'] = 'ioemu';
$l['viftype_netfront'] = 'netfront (default)';
$l['usesec_cdrom'] = 'Enable Secondary CD ROM';
$l['exp_usesec_cdrom'] = 'Enable this to attach a secondary ISO to the virtual machine.';	
$l['kvm_cache'] = 'Disk Caching';
$l['exp_kvm_cache'] = 'Controls the cache mechanism';
$l['io_mode'] = 'I/O Policy';
$l['vnc_keymap'] = 'VNC Console Keymap';
$l['kvm_vga'] = 'Enable VGA';
$l['acceleration'] = 'Enable Acceleration';
$l['acceleration_exp'] = 'If checked then 2D and 3D acceleration will be enabled for the VPS';
$l['osreinstall'] = 'OS Reinstall Limit';
$l['exp_osreinstall'] = 'If you want to limit the number of OS re-installs per month. <br />Eg. 0 - is unlimited';
$l['total_iops_sec'] = 'Total I/O\'s per sec';
$l['read_bytes_sec'] = 'Read Mega Byte\'s/s';
$l['write_bytes_sec'] = 'Write Mega Byte\'s/s';
$l['vnc_keymap'] = 'VNC Console Keymap';
$l['inv_vnc_keymap'] = 'The VNC keymap submitted is invalid';
$l['vsos'] = 'Operating System';
$l['vsos_exp'] = 'Select the Operating System for the VPS';
$l['pv_on_hvm'] = 'PV-on-HVM driver Support';
$l['exp_pv_on_hvm'] = 'The primary goal of PV on HVM is to boost performance of fully virtualized HVM guests through use of specially optimized paravirtual device drivers';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = 'If an ISO is selected the machine will be booted from that ISO';
$l['sec_vsiso'] = 'ISO for secondary CDROM ';
$l['sec_vsiso_exp'] = 'Select an ISO for secondary CDROM';
$l['admin_managed'] = 'Managed by Admin';
$l['exp_admin_managed'] = 'If checked, VPS can not be managed from Enduser Panel.';
$l['shadow'] = 'Shadow Memory';
$l['shadow_exp'] = 'Recommended value : 8 MB';

?>
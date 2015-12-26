<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['err_backup'] = '在创建备份时出错';
$l['err_restore'] = '同时恢复VPS时出错';
$l['err_deletevpsbackup'] = '在删除VPS备份时出错';

$l['<title>'] = '备份';
$l['page_head'] = '备份';
$l['done'] = '该VPS备份进程已经启动。请等待几分钟让它完成。当其完成后您将收到电子邮件通知。';
$l['done_restore'] = '该VPS恢复过程已经开始。请等待几分钟让它完成。当其完成后您将收到电子邮件通知';
$l['done_deletevpsbackup'] = '该VPS备份删除过程已经完成。您将收到电子邮件通知';
$l['cbackup'] = '创建备份';
$l['restore'] = '恢复VPS';
$l['conf_cbackup'] = '你确定你想要创建备份？';
$l['conf_restore'] = '你确定你想从上次备份恢复？';
$l['conf_del_backup'] = '你确定要删除的备份？';
$l['backup_exp'] = '在这里，你可以创建你的VPS备份，也从旧的备份恢复。';
$l['backupnotify'] = '备份 VPS 中 ...';
$l['restorenotify'] = '恢复 VPS 中 ...';
$l['del_backupnotify'] = "删除 VPS 中...";
$l['del_backup'] = '删除备份';

$l['backup_email_subject'] = 'VPS备份已经成功完成';
$l['restore_email_subject'] = 'VPS恢复已经成功完成';
$l['deletevpsbackup_email_subject'] = '删除VPS备份已经成功完成';

$l['deletevpsbackup_email_body_start'] = 'The deletion process of VPS backup : [';
$l['backup_email_body_start'] = 'The Backup process on your VPS : [ ';
$l['restore_email_body_start'] = 'The Restore process on your VPS : [';

$l['backup_email_body_end'] = ' ] 已经成功完成。
您也可以在VPS客户端面板中从日志对话框查看该通知。

Regards,
{{sn}}';


?>
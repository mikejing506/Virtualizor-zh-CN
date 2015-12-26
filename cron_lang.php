<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cron_lang.php
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

$l['upd_avail_sub'] = 'Virtualizor Upgrades v&soft-1; is available';
$l['upd_avail'] = 'Virtualizor Upgrades v&soft-1; is available.
Since \'Automatic Updates\' are OFF you will need to manually upgrade to the latest version.
To do so go to:
Admin Panel -> Configuration -> Updates

The following information about the new version was fetched:
&soft-2;

From Virtualizor Cron Jobs';

$l['upd_avail_suc_sub'] = 'Successfully Upgraded to Virtualizor v&soft-1;';
$l['upd_avail_suc'] = 'Virtualizor Upgrades v&soft-1; is available.
Virtualizor successfully Upgraded to latest version.
Below is the logs of the Upgrade Attempt:
&soft-2;

The following information about the new version was fetched:
&soft-3;

From Virtualizor Cron Jobs';

$l['upd_avail_err_sub'] = 'Failed Upgrading to Virtualizor v&soft-1;';
$l['upd_avail_err'] = 'Virtualizor Upgrades v&soft-1; is available.
Virtualizor tried to automatically upgrade to the latest version but failed.
Below is the logs of the Upgrade Attempt:
&soft-2;

You will have to manually upgrade to the latest version.
To do so go to:
Admin Panel -> Configuration -> Updates

The following information about the new version was fetched:
&soft-3;

From Virtualizor Cron Jobs';

//Admin email limit alert
$l['admin_mail_limit_sub'] = 'System Resources Usage Limit exceeded';
$l['admin_mail_limit'] = '

Server IP : {{ip}}

Load : {{load}}

CPU Usage : {{cpu_usage}} %

Ram Usage : {{ram_usage}} %

Disk Usage : {{disk_usage}} %

/tmp Usage : {{tmp_disk_usage}} %

Regards,
{{sn}} {{ip}}';

// Slave server status email
$l['slave_offline_sub'] = 'Slave Server offline';
$l['slave_offline'] = 'The following Slave server(s) are offline :

{{slave_text}}

Regards,
{{sn}} {{ip}}';


?>
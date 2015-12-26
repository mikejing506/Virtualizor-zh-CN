<?php

//////////////////////////////////////////////////////////////
//===========================================================
// dashboard_lang.php
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

$l['no_username'] = 'The Username field was empty';
$l['no_password'] = 'The Password field was empty';
$l['too_many_attempts'] = 'You have used up your failed login quota of '.$globals['login_attempts'].' failed attempts! <b>Please wait '.$globals['login_ban_time'].' minutes before trying again.</b> Don\'t forget that the password is case sensitive. Forgotten your password? Please try the <a href="'.$globals['index'].'act=login&sa=fpass">Forgot Password</a> utility.';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Sign in';
$l['log_user'] = 'Email or Username';
$l['log_pass'] = 'Password';
$l['login'] = 'Login';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Forgot Password';
$l['pass_nomatch'] = 'The username or password you entered is incorrect.';
$l['forgotpass'] = 'Forgot Password';
$l['emailuser'] = 'Email Address';
$l['enteremail'] = 'Enter your email address';
$l['sub_email'] = 'Submit';
$l['no_email'] = 'You did not submit your email address';
$l['invalidemail'] = 'The email address you submitted is invalid';
$l['mail_sub'] = 'Reset Password';
$l['mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
https://{{node_ip}}:4083/index.php?act=login&sa=resetpass&key=&soft-1;

Please Note : Above link is valid for 24 hours only.

Regards,
'.$globals['sn'];
$l['mail_done'] = 'A mail has been sent with the details to reset your password';
$l['back_to_login'] = 'Back to Login';

$l['<title_reset>'] = 'Reset Password';
$l['resetpass'] = 'Reset Password';
$l['log_new_pass'] = 'New password'; 
$l['log_reppass'] = 'Confirm Password';
$l['changepass'] = 'Change Password';
$l['no_key'] = 'No Reset Key was submitted';
$l['invalidkey'] = 'You specified an invalid key';
$l['no_new'] = 'Please enter valid Password';
$l['no_reppass'] = 'Please enter confirm password';
$l['no_match'] = 'The passwords you gave do not match';
$l['keyexpire'] = 'Key is no longer valid';
$l['passchanged'] = 'Password Changed Successfully. Please proceed to <a href="'.$globals['index'].'act=login">Login</a>';
$l['forgot_pass'] = 'Forgot Password';

?>
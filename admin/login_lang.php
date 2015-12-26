<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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
$l['too_many_attempts'] = 'You have used up your failed login quota of '.$globals['login_attempts'].' failed attempts! <b>Please wait '.$globals['login_ban_time'].' minutes before trying again.</b> Don\'t forget that the password is case sensitive.';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Sign in';
$l['log_user'] = 'Username';
$l['log_pass'] = 'Password';
$l['sub_but'] = 'Login';
$l['pass_nomatch'] = 'The username or password you entered is incorrect.';


?>
<?php

//////////////////////////////////////////////////////////////
//===========================================================
// createssl_lang.php
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

$l['error_saving'] = 'There was an error saving the SSL Information';

$l['<title>'] = 'Create SSL Certificate';
$l['sim_key'] = 'virtualizor.key';
$l['sim_key_desc'] = 'RSA private key generated';
$l['sim_crt_desc'] = 'CRT key generated';
$l['sim_crt'] = 'virtualizor.crt';
$l['submit'] = 'Create SSL';
$l['emptykey'] = 'SSL certificate key cannot be empty';
$l['emptycrt'] = 'SSL certficate file cannot be empty';
$l['country'] = 'Country Code';
$l['country_desc'] = '2 letter abbreviation e.g. US or IN';
$l['state'] = 'State';
$l['state_desc'] = 'Name of the state or province';
$l['locality'] = 'Locality';
$l['locality_desc'] = 'Name of the city or town'; 
$l['organisation'] = 'Company Name';
$l['organisation_desc'] = 'Name of your Company or Organisation';
$l['org_unit'] = 'Company Branch'; 
$l['org_unit_desc'] = 'Name of the Organisation branch or division';
$l['comname'] = 'Host';
$l['comname_desc'] = 'Your name or your servers name';
$l['email'] = 'Email Address';
$l['email_desc'] = 'Your email address';
$l['key_size'] = 'RSA Key Size';
$l['long_country'] = 'Country Code specified is too long. Please specify a 2 letter Code';
$l['no_country'] = 'No Country Code specified'; 
$l['no_state'] = 'No State or Province specified';
$l['no_locality'] = 'No locality specified';
$l['no_organisation'] = 'Organisation or Company name not specified';
$l['no_comname'] = 'No Host name specified';
$l['no_email'] = 'No Email specified';
$l['no_keysize'] = 'The RSA Key Size was not specified';
$l['inv_keysize'] = 'An invalid RSA Key Size was specified';
$l['done'] = 'SSL files created and installed successfully, BUT you will need to restart the Web Server.';
$l['invalid_email'] = 'Email address entered is invalid';
$l['note'] = 'Note';
$l['ssl_note'] = 'This utility will create the SSL Certificate Private Key, the Certificate Signing Request and the Certificate itself. If you want to obtain and install a Certificate issued by an SSL Certificate Provider, then you will need the Certificate Signing Request (virtualizor.csr) which can be obtained from <a href="'.$globals['index'].'act=ssl#csr">here</a>';

?>
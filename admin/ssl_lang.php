<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ssl_lang.php
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
$l['inv_crt'] = 'The certificate file is invalid';
$l['inv_key'] = 'The key file is invalid';
$l['emptykey'] = 'SSL certificate key cannot be empty';
$l['emptycrt'] = 'SSL certficate file cannot be empty';
$l['emptybundle'] = 'The CA Bundle is empty';

$l['<title>'] = 'SSL Files';
$l['sim_key'] = 'virtualizor.key';
$l['sim_key_desc'] = 'RSA private key generated';
$l['sim_crt_desc'] = 'CRT key generated';
$l['sim_crt'] = 'virtualizor.crt';
$l['sim_csr'] = 'virtualizor.csr';
$l['sim_csr_desc'] = 'Certificate Signing Request. This is required to obtain an SSL certificate.';
$l['sim_bundle'] = 'virtualizor-bundle (Optional)';
$l['sim_bundle_desc'] = 'The Certificate Bundle issued by the Certificate Authority';
$l['submit'] = 'Save SSL files';
$l['generate'] = 'Create SSL Certificate';
$l['notice'] = 'Click here to generate a self certified SSL';
$l['done'] = 'SSL Files has been saved, BUT you will need to restart the Virtualizor Service.';


?>
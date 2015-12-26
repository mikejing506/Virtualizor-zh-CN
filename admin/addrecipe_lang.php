<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addrecipe_lang.php
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

$l['error_saving'] = 'There was an error saving the Recipe Information';
$l['adr_done'] = 'The Recipe has been added';

$l['<title>'] = 'Add Recipe';
$l['code'] = 'Enter your Recipe';
$l['code_exp'] = 'Enter the actual bash code here.<br /> NOTE : #!/bin/sh will be added automatically, you do not have to add it.';
$l['submit'] = 'Add Recipe';
$l['recipe_name'] = 'Recipe Name';
$l['recipe_name_exp'] = 'Name of your recipe. This will be displayed to users.';
$l['done'] = 'Recipe has been added successfully! Return to <a href="'.$globals['index'].'act=recipes">Recipe Overview</a>';
$l['no_recipe_name'] = 'Recipe name was not entered';
$l['no_recipescript'] = 'Recipe bash script was not entered';
$l['error_saving'] = 'There was an error saving the Recipe';
$l['duplicate_name'] = 'Duplicate Recipe';
$l['recipe_logo'] = 'Recipe Logo';
$l['url_exp'] = 'URL of the logo for your recipe. This field is optional.';
$l['recipe_desc'] = 'Description';
$l['exp_desc'] = 'This will be shown to the users.<br />NOTE : Only &lt;br&gt; &lt;br/&gt; &lt;p&gt; &lt;a&gt; &lt;b&gt; &lt;span> these tags are allowed.';
$l['status'] = 'Disable recipe';
$l['exp_status'] = 'If checked then this recipe will not be shown to endusers.';

?>
<?php
/*
 *  Template Controller page
 *  Author: Gregory Schoeman
*/
require_once __DIR__.'/../functions.php';

// Page Template details
$templatename = "user_reset.twig";
$pagetitle = "Reset Password";
$description = "Reset Password Pages";
$class = "reset-password";
$pageurl = $setup->current_url();
$pic = "";

$values = array(
	'page' => array(
		'url' 			=> $pageurl,
		'title' 		=> $pagetitle,
		'description' 	=> $description,
		'class' 		=> $class,
		'pic' 			=> $pagepic
 	)
);
echo $twig->render($templatename, $values);
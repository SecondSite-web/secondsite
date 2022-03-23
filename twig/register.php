<?php
/*
 *  Template Controller page
 *  Author: Gregory Schoeman
*/
require_once __DIR__.'/../functions.php';
if ($setup->allowRegister === '0') {
    header("Location: /twig/login.php");
}
// Page Template details
$templatename = "user_register.twig";
$pagetitle = "User Registration";
$description = "User Registration Page";
$class = "register";
$pageurl = $setup->current_url();
$pagepic = "";

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
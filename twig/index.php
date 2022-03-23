<?php
/*
 *  Twig Admin Center Index Page
 *  Author: Gregory Schoeman
*/
require_once __DIR__.'/../functions.php';
require_once __DIR__.'/php/lock.php';

// Page Template details
$templatename = "sb_dash.twig";
$pagetitle = "Twig Backend Template";
$description = "Data Center";
$pagepic = ""; // The featured image of the page default is a 1200 x 630 .png
$class = "sb_dash";
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
$pageurl = $setup->current_url();


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

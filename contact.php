<?php
/*
 *  Contact Page Template Controller
 *  Author: Gregory Schoeman
*/

require_once __DIR__.'/functions.php';

$pagetitle = "Contact Us"; // https://www.wordstream.com/blog/ws/2009/08/05/seo-title-tag-formulas
$description = "SecondSite Contact Details: Tel: 079 995 9818 | info@secondsite.xyz";  // https://www.wordstream.com/meta-description
$pagepic = "http://secondsite.xyz/images/siteimg.png"; // The featured image of the page default is a 1200 x 630 .png
$class = "contact";

$templatename = "contact_page.twig";
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

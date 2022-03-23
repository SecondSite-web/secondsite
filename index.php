<?php
/*
 *  Index Page Template Controller
 *  Author: Gregory Schoeman
*/

require_once __DIR__.'/functions.php';

$pagetitle = "Secondsite Digital Consulting | Domains - Hosting - Mobile Apps - Website Development - Digital Marketing"; // https://www.wordstream.com/blog/ws/2009/08/05/seo-title-tag-formulas
$description = "Secondsite Digital Consulting | Turnkey Digital Solutions for Individuals, Startups and SME's including website, social media, domain and hosting, mobile apps and custom software";  // https://www.wordstream.com/meta-description
$pagepic = "http://secondsite.xyz/images/siteimg.png"; // The featured image of the page default is a 1200 x 630 .png
$class = "home";

$templatename = "home_page.twig";
$pageurl = $setup->current_url();

// Feeds vaiables to the html template
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

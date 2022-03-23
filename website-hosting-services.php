<?php
/*
 *  Index Page Template Controller
 *  Author: Gregory Schoeman
*/

require_once __DIR__.'/functions.php';

$pagetitle = "Website Hosting Services | Domain Hosting | Email Hosting"; // https://www.wordstream.com/blog/ws/2009/08/05/seo-title-tag-formulas
$description = "We offer world class Website Hosting Services to cover all your hosting needs in africa. Best prices and 100% reliable hosting. Trusted by top brands";  // https://www.wordstream.com/meta-description
$pagepic = "http://secondsite.xyz/images/siteimg.png"; // The featured image of the page default is a 1200 x 630 .png
$class = "hosting";

$templatename = "hosting.twig";
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
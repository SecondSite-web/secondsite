<?php
/*
 *  Index Page Template Controller
 *  Author: Gregory Schoeman
*/

require_once __DIR__.'/functions.php';

$pagetitle = "Website Design | Website Development"; // https://www.wordstream.com/blog/ws/2009/08/05/seo-title-tag-formulas
$description = "We offer full website design and development services. Professional, modern, solid and stable websites built with the latest standards to ensure a quality website";  // https://www.wordstream.com/meta-description
$pagepic = "http://secondsite.xyz/images/siteimg.png"; // The featured image of the page default is a 1200 x 630 .png
$class = "website";

$templatename = "design.twig";
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
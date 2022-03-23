<?php
/*
 *  Index Page Template Controller
 *  Author: Gregory Schoeman
*/

require_once __DIR__.'/functions.php';

$pagetitle = "SEO | Search Engine Optimisation"; // https://www.wordstream.com/blog/ws/2009/08/05/seo-title-tag-formulas
$description = "SEO | Search Engine Optimisation - We bring the true speed out a website. Take a look at how fast our website is!";  // https://www.wordstream.com/meta-description
$pagepic = "http://secondsite.xyz/images/siteimg.png"; // The featured image of the page default is a 1200 x 630 .png
$class = "seo";

$templatename = "seo.twig";
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
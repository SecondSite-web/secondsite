<?php
/*
 *  Index Page Template Controller
 *  Author: Gregory Schoeman
*/

require_once __DIR__.'/functions.php';

$pagetitle = "Acceptable Use Policy"; // https://www.wordstream.com/blog/ws/2009/08/05/seo-title-tag-formulas
$description = "";  // https://www.wordstream.com/meta-description
$pagepic = ""; // The featured image of the page default is a 1200 x 630 .png
$class = "home";

$templatename = "acceptableuse.twig";
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
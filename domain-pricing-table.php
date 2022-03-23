<?php
/*
 *  Index Page Template Controller
 *  Author: Gregory Schoeman
*/

require_once __DIR__.'/functions.php';

$pagetitle = "Domains for Africa"; // https://www.wordstream.com/blog/ws/2009/08/05/seo-title-tag-formulas
$description = "We Offer Domains for Africa. All the most popular Tld's are available at the best prices. We also offer discounts for clients who use our domain hosting and website services";  // https://www.wordstream.com/meta-description
$pagepic = "http://secondsite.xyz/images/siteimg.png"; // The featured image of the page default is a 1200 x 630 .png
$class = "domains";

$templatename = "domains.twig";
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
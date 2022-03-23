<?php 
/**
 * Webroot Main PHP Functions
 * Author: Gregory Schoeman
 */
// DB Settings
require_once __DIR__ . '/config.php'; // Settings not saved to DB
// Composer Autoload
require_once __DIR__ . '/vendor/autoload.php'; // composer autoload
// Initiate DB - using PDO
require_once __DIR__ . '/php/connect-pdo.php'; // pdo DB connection
// Load settings from /php/classes - Setup class
require_once __DIR__ . '/php/classes.php'; // PHP classes

// form PHPAuth Object
use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;
$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);
// form setup object
$setup = new setup($dbh); // php/classes/

$user = $setup->get_user($auth); // pass user from PHPAuth class to twig 'addGlobal'
$twig_globals = $setup->setup_globals(); // load global settings data from db and pass tp twig 'addGlobal'
$social_globals = $setup->setup_social();
// Twig HTML Template Pages
$templateDir1 = __root_path__ ."/templates"; // Front Face html
$templateDir2 = __root_path__ ."/templates/twig"; // Backend html
$templateDir3 = __root_path__ ."/templates/auth"; // Authentication pages html
$templateDir4 = __root_path__ ."/templates/website"; // Main Website Pages

// Twig File System Loader
$loader = new \Twig\Loader\FilesystemLoader([$templateDir1, $templateDir2, $templateDir3, $templateDir4]);
    $twig = new \Twig\Environment($loader, array(
      'debug' => TWIG_DEBUG,
      # 'cache' => 'cache',
    ));
    $twig->addGlobal('user', $user);
    $twig->addGlobal('site', $twig_globals);
$twig->addGlobal('social', $social_globals);
    $twig->addExtension(new \Twig\Extension\DebugExtension());
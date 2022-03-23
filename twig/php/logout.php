<?php
/**
 * Created by PhpStorm.
 * User: grego
 * Date: 7/22/2019
 * Time: 12:03 AM
 */
require_once __DIR__.'/../../functions.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;

$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('User Logout');
$log->pushHandler(new StreamHandler(__root_path__.'/logs/login.log', Logger::INFO));

if ($auth->isLogged()) {
    //$result = $auth->logout($auth);
    $log->addInfo('User Logout', array('Email Address',  $auth->getCurrentUser()));
    $auth->logout($_COOKIE['authID']);
    header("Location: /");
} else {
  exit;
}

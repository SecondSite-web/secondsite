<?php
require_once __DIR__.'/../../functions.php';
require_once __DIR__.'/../php/connect-dbh.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);
// create a log channel
$log = new Logger('Forced Delete');
$log->pushHandler(new StreamHandler(__root_path__.'/logs/account-delete.log', Logger::INFO));
    if ($_SERVER["REQUEST_METHOD"] == "POST") {    
        $uid = $_POST['id'];
        $result = $auth->deleteUserForced($uid);
        // print_r($result);
        header("Location: /twig/users-table.php");
    } else {
        header("Location: /");
    }
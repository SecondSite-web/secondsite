<?php
/*
 * Test Page
 */
require_once __DIR__.'/../../functions.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('User Login');
$log->pushHandler(new StreamHandler(__root_path__.'/logs/login.log', Logger::INFO));

$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $filters = array(
            'email' => 'trim|sanitize_email',
            'password' => 'trim|sanitize_string'
        );
        $rules = array(
            'email' => 'required|valid_email',
            'password' => 'required|max_len,100|min_len,8'
        );
        $validator = new GUMP();
        $whitelist = array_keys($rules);
        $_POST = $validator->sanitize($_POST, $whitelist);
        $_POST = $validator->filter($_POST, $filters);
        $validated = $validator->validate($_POST, $rules);

        if ($validated == '1') {
            $a = 'true';
        } else {
            $rawError = $validator->get_readable_errors(true);
            throw new Exception(strip_tags($rawError));
        }
        try {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result = $auth->login($email, $password, $remember = true, $captcha_response = null);

            if (!$result['error'] == 'true') {
                setcookie('authID', $result["hash"], $result["expire"], '/');
            } else {
                throw new Exception($result['message']);
            }
        } catch (\Exception $e) {
            $mistake = $e->getMessage();
            $responseArray = array('type' => 'danger', 'message' => $mistake);
        }
    } catch (\Exception $e) {
        $mistake = $e->getMessage();
        $responseArray = array('type' => 'danger', 'message' => $mistake);
    }

    // if requested by AJAX request return JSON response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $encoded = json_encode($responseArray);
        header('Content-Type: application/json');
        echo $encoded;
    }

    if ($result['type'] == 'danger') {
        $log->addError('User Login Fail', array('Email Address',  $_POST['email']." ". $result['message']));
    } else {
        $log->addInfo('User Login Success', array('Email Address',  $_POST['email']." ". $result['message']));
    }

} else {
    header("Location: /");
}


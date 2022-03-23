<?php
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
            'email'      => 'trim|sanitize_email',
            'password'   => 'trim|sanitize_string'
        );
        $rules = array(
            'email'       => 'required|valid_email',
            'password'     => 'required|max_len,100|min_len,8'
        );
        $validator = new GUMP();
        $whitelist = array_keys($rules);
        $_POST = $validator->sanitize( $_POST, $whitelist );
        $_POST = $validator->filter($_POST, $filters);
        $validated = $validator->validate($_POST, $rules);
        // $_POST = $validator->run($_POST);
        if($validated === FALSE)
        {
            throw new \Exception($validator->get_readable_errors(true));
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $auth->login($email, $password, $remember = true, $captcha_response = null);

        if (!$result['error'] == 'true') {
            setcookie('authID', $result["hash"], $result["expire"], '/');
            $responseArray = array('type' => 'success', 'message' => $result['message']);
            $log->addInfo('User Login Success', array('Email Address',  $_POST['email']." ". $result['message']));
        } else {
            throw new \Exception($result['error']);
        }
    } catch (\Exception $e) {
        $responseArray = array('type' => 'danger', 'message' => $result['message']);
        $log->addError('User Login Failed', array('Email Address',  $_POST['email']." ". $result['message']));
    }

    // if requested by AJAX request return JSON response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $encoded = json_encode($responseArray);
        header('Content-Type: application/json');
        echo $encoded;
    } 
    
} else {
        header("Location: /");
    }
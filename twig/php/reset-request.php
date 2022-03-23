<?php
require_once __DIR__.'/../../functions.php';
require_once __DIR__.'/../php/connect-dbh.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;
$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Password Reset Request');
$log->pushHandler(new StreamHandler(__root_path__.'/logs/password.log', Logger::INFO));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $filters = array(
            'email' => 'trim|sanitize_email'
        );
        $rules = array(
            'email' => 'required|valid_email'
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

        $result = $auth->requestReset($email, $use_email_activation = true);

        if ($result['error'] == '1') {
            throw new \Exception($result['error']);
        }
        $responseArray = array('type' => 'success', 'message' => $result['message']);
    } catch (\Exception $e) {
        $responseArray = array('type' => 'danger', 'message' => $result['message']);
    }


    // if requested by AJAX request return JSON response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $encoded = json_encode($responseArray);
        header('Content-Type: application/json');
        echo $encoded;
    }
    else {
        echo $responseArray['message'];
    }
    if ($result['error'] == 'true') {
        $log->addError('Failed', array('Email', $_POST['email']." ". $result['message']));
    } else {
        $log->addInfo('Successful', array('Email', $_POST['email']." ". $result['message']));
    }

} else {
        header("Location: /");
    }


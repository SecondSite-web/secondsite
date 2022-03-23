<?php
require_once __DIR__.'/../../functions.php';
require_once __DIR__.'/../php/connect-dbh.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('User Change Email');
$log->pushHandler(new StreamHandler(__root_path__.'/logs/email-change.log', Logger::INFO));

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
                'password'    => 'required|max_len,100|min_len,8'
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
			$uid= $auth->getCurrentUID();
			$result = $auth->changeEmail($uid, $email, $password, $captcha = null);
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
            $log->addError($result['message'], array($_POST['email'],  $auth->getCurrentUser()));
        } else {
            $log->addInfo($result['message'], array($_POST['email'],  $auth->getCurrentUser()));
        }
    } else {
        header("Location: /");
    }
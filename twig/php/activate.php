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
$log = new Logger('Account Activation');
$log->pushHandler(new StreamHandler(__root_path__.'/logs/register.log', Logger::INFO));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $filters = array(
            'key' => 'trim|sanitize_string'
        );
        $rules = array(
            'key' => , 'required|alpha_numeric|max_len,50|min_len,10'
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
        $key = $_POST['key'];

        $result = $auth->activate($key);

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
        // echo $responseArray['message'];
        header("Location: /");
    }
    if ($result['error'] == 'true') {
        $log->addError('Failed', array('Message', $result['message']));
    } else {
        $log->addInfo('Successful', array('Message',  $result['message']));
    }

} else {
        header("Location: /");
        }

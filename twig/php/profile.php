<?php
require_once __DIR__ . '/../../functions.php';
require_once __DIR__ . '/../php/connect-dbh.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Profile Update');
$log->pushHandler(new StreamHandler(__root_path__.'/logs/profile.log', Logger::INFO));

$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $rules = array(
            'firstname'   => 'required|alpha_numeric|max_len,100|min_len,3',
            'lastname'    => 'required|alpha_numeric|max_len,100|min_len,3',
            'email'       => 'required|valid_email',
            'userrole'    => "required|contains, 'root' 'admin' 'user' 'guest"
            );

            $filters = array(
                'firstname'   => 'trim|sanitize_string',
                'lastname'    => 'trim|sanitize_string',
                'email'       => 'trim|sanitize_email|lower_case',
                'userrole'    => 'trim|sanitize_string|lower_case'
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
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $userrole = strtolower($_POST['userrole']);
            $params = array('firstname' => $firstname, 'lastname' => $lastname, 'userrole' => $userrole);
            $uid= $auth->getCurrentUID();
            $result = $auth->updateUser($uid, $params);

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
            $log->addError($result['message'], array('Email',  $_POST['email']." | User: ".$_POST['firstname']." ".$_POST['lastname']));
        } else {
            $log->addInfo($result['message'], array('Email',  $_POST['email']." | User: ".$_POST['firstname']." ".$_POST['lastname']));
        }
    } else {
        header("Location: /");
    }
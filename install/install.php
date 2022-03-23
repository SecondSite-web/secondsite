<?php
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__.'/../config.php';
require_once __DIR__.'/connect.php';
include 'variables.php';


$tableNames = array(
    'contact_form',
    'phpauth_attempts',
    'phpauth_requests',
    'phpauth_sessions',
); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Twig Template Standalone Installation</title>

    <!-- Custom styles for this template-->
    <link href="../../css/styles.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-md-12 pt-2 pb-5">
            <h1>Installation Results</h1>
            <h3>Table Cleaning</h3>
            <p class="lead">All tables and Data are erased completely</p>
            <?php
            foreach ($tableNames as $key => $value) {
                $sql = "DROP TABLE IF EXISTS $value";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">' . "Table $value was removed successfully". '</div>';
                } else {
                    echo '<div class="alert alert-danger">'."Error removing table: " . $conn->error. '</div>';
                }
                unset($sql);
            } ?>
            <hr />
            <h3>Table Creation</h3>
            <p class="lead">New Tables are being Created and Settings are being Stored</p>
            <?php

            $sql = "CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `honeypot` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success">' . "Table contact_form created successfully". '</div>';
            } else {
                echo '<div class="alert alert-danger">'."Error creating table: " . $conn->error . '</div>';
            }
            unset($sql);

            $sql = "CREATE TABLE IF NOT EXISTS `phpauth_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` char(39) NOT NULL,
  `expiredate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success">' . "Table phpauth_attempts created successfully". '</div>';
            } else {
                echo '<div class="alert alert-danger">'."Error creating table: " . $conn->error . '</div>';
            }
            unset($sql);

            $sql = "CREATE TABLE IF NOT EXISTS `phpauth_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `token` CHAR(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `expire` datetime NOT NULL,
  `type` ENUM('activation','reset') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `token` (`token`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success">' . "Table phpauth_requests created successfully". '</div>';
            } else {
                echo '<div class="alert alert-danger">'."Error creating table: " . $conn->error . '</div>';
            }
            unset($sql);

            $sql = "CREATE TABLE IF NOT EXISTS `phpauth_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `hash` char(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `expiredate` datetime NOT NULL,
  `ip` varchar(39) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `cookie_crc` char(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success">' . "Table phpauth_sessions created successfully". '</div>';
            } else {
                echo '<div class="alert alert-danger">'."Error creating table: " . $conn->error . '</div>';
            }
            unset($sql);


            ?>
        </div>
    </div>

    <div class="row pb-2 mb-2">
        <div class="col-12 align-content-center text-center">
            <a href="settings.php" class="btn btn-primary btn-lg" target="_self">Install Settings</a>
            <br>
        </div>

    </div>
</div>
</body>
</html>
<?php
require_once __DIR__.'/../config.php';
$servername = DBHost;
$username = DBUser;
$password = DBPassword;
$dbname = DBName;


?>

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

<body class="bg-light" style="min-height: 100vh;">

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12 pt-2 pb-5">
            <h1>Database Creation</h1>
            <?php
                // Create connection
                $conn = new mysqli($servername, $username, $password);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                // Create database
                $sql = "CREATE DATABASE ".DB_NAME."";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">' . "DATABASE".DB_NAME." was created successfully". '</div>';
                } else {
                    echo '<div class="alert alert-danger">'."Error removing table: " . $conn->error. '</div>';
                }

                $conn->close();
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-primary btn-lg" href="install.php">Continue</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
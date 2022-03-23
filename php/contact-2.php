<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 

//Load Composer's autoloader
require __DIR__ . "/../../vendor/autoload.php";
require __DIR__ . "/mail-settings.php";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = DEBUG;                                 // Enable verbose debug output
    $mail->isSMTP();                                 // Set mailer to use SMTP
    $mail->Host = SMTPHOST;                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = SMTPAUTH;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                           // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = SMTPSECURE;            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = PORT;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom(EMAIL, EMAILNAME);
    $mail->addAddress(EMAIL);              // Add a recipient
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    if (!empty(MAILCC)) {
        $mail->addCC(MAILCC);
    }
    if (!empty(MAILBCC)) {
        $mail->addCC(MAILBCC);
    } 

    // $mail->sign(
    // '/path/to/cert.crt', //The location of your certificate file
    // '/path/to/cert.key', //The location of your private key file
    // 'yourSecretPrivateKeyPassword', //The password you protected your private key with (not the // Import Password! may be empty but parameter must not be omitted!)
    // '/path/to/certchain.pem' //The location of your chain file
    // );

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = SUBJECTLINE;

    $message = file_get_contents('../email-templates/mail-template.html');
    $message = str_replace('%name%', $_POST['name'], $message);
    $message = str_replace('%surname%', $_POST['surname'], $message);
    $message = str_replace('%email%', $_POST['email'], $message);
    $message = str_replace('%phone%', $_POST['phone'], $message);
    $message = str_replace('%message%', $_POST['message'], $message);
    $mail->MsgHTML($message);
    $mail->AltBody = strip_tags($message);


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
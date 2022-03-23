<?php

//Load Composer's autoloader
require_once __DIR__ . "/../functions.php";
require_once __DIR__ . "/../php/connect-pdo.php";
$setup->setup_phpmailer($dbh);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $filters = array(
            'firstname'   => 'trim|sanitize_string',
            'lastname'    => 'trim|sanitize_string',
            'phone'       => 'trim|sanitize_string',
            'email'       => 'trim|sanitize_email',
            'message'     => 'trim|sanitize_string'
        );
        $rules = array(
            'firstname'   => 'required|alpha_numeric|max_len,100|min_len,3',
            'lastname'    => 'required|alpha_numeric|max_len,100|min_len,3',
            'phone'       => 'max_len,1',
            'email'       => 'required|valid_email',
            'message'     => 'required'
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
    // message that will be displayed when everything is OK :)
    $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

    // If something goes wrong, we will display this message.
    $errorMessage = 'There was an error while submitting the form. Please try again later';
    // array variable name => Text to appear in the email
    $fields = array('fistname' => 'Name', 'lastname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');

    $mail = new PHPMailer(true);                        // Passing `true` enables exceptions

        if (count($_POST) == 0) {
            throw new \Exception('Form is empty');
        }

        $emailTextHtml = "<h1>Contact Form Submission</h1><hr>";
        $emailTextHtml .= "<table>";

        foreach ($_POST as $key => $value) {
            // If the field exists in the $fields array, include it in the email
            if (isset($fields[$key])) {
                $emailTextHtml .= "<tr><th>$fields[$key]</th><td>$value</td></tr>";
            }
        }
        $emailTextHtml .= "</table><hr>";
        $emailTextHtml .= "<p>My Thanks!</p>";

        //Server settings
        $mail->SMTPDebug = DEBUG;                         // Enable verbose debug output
        $mail->isSMTP();                                 // Set mailer to use SMTP
        $mail->Host = SMTPHOST;                         // Specify main and backup SMTP servers
        $mail->SMTPAuth = SMTPAUTH;                    // Enable SMTP authentication
        $mail->Username = EMAIL;                      // SMTP username
        $mail->Password = PASS;                      // SMTP password
        $mail->SMTPSecure = SMTPSECURE;             // Enable TLS encryption, `ssl` also accepted
        $mail->Port = PORT;                        // TCP port to connect to

        //Recipients
        $mail->setFrom(EMAIL, EMAILNAME);
        $mail->addAddress(EMAIL);              // Add a recipient
        $mail->addReplyTo($_POST['email'], $_POST['firstname']);

        if (!empty(MAILCC)) {
            $mail->addCC(MAILCC);
        }
        if (!empty(MAILBCC)) {
            $mail->addCC(MAILBCC);
        }
        //
        if (!empty($_POST['phone'])) {
            throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
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
        // form field names and their translations.


        //Contentm,
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = SUBJECTLINE;
        $mail->Body = $emailTextHtml;
        $mail->msgHTML($emailTextHtml);

        $mail->AltBody = strip_tags($emailTextHtml);

        if (!$mail->send()) {
            throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
        }
        $responseArray = array('type' => 'success', 'message' => $okMessage);
    } catch (\Exception $e) {
        $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
    }

    // if requested by AJAX request return JSON response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $encoded = json_encode($responseArray);

        header('Content-Type: application/json');

        echo $encoded;
    } // else just display the mess age
    else {
        echo $responseArray['message'];
    }

    $stmt = $dbh->prepare("INSERT INTO contact_form (firstname, lastname, honeypot, email, message)
    VALUES (:firstname, :lastname, :honeypot, :email,  :message)");
    $stmt->bindParam(':firstname', $_POST["firstname"]);
    $stmt->bindParam(':lastname', $_POST["lastname"]);
    $stmt->bindParam(':honeypot', $_POST["phone"]);
    $stmt->bindParam(':email', $_POST["email"]);
    $stmt->bindParam(':message', $_POST["message"]);
    $stmt->execute();
    $dbh = null;

   } else {
        header("Location: /");
    }
<?php
require_once ("./vendor/autoload.php");
use PHPMailer\PHPMailer\Exception;
include_once('./database/connection.php');

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'carefreeav09@gmail.com';                     // SMTP username
    $mail->Password   = 'facelessvoid';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('carefreeav09@gmail.com', 'Bibhushan');
    $mail->addAddress($_POST['email']);     // Add a recipient
    $mail->addReplyTo('carefreeav09@gmail.com', 'Information');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Grocery Store';
    $mail->Body    = 'You have successfully checked out. Thanks for purchasing the goods.';
    $mail->AltBody = 'You have successfully checked out. Thanks for purchasing the goods.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/MAMP/htdocs/php-oop-booking-app/vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.mailtrap.io';
    $mail->SMTPAuth   = true;
    $mail->Username   = '64baf55dfaac57'; // For those marking just put in your own Mailtrap Username and Password
    $mail->Password   = 'f72bf18f5f77da';
    $mail->Port       = 2525;

    //Recipients
    $mail->setFrom('confirmation@airdnd.com', 'Airdnd'); // Sender
    $mail->addAddress('oliververmeulen862@gmail.com', 'Juan Vermeulen'); // Receiver
    $mail->addReplyTo('reply@airdnd.com', 'Reply'); // Reply
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Airdnd Booking confirmation';
    $mail->Body    = '
                    <p>Hi Juan,</p>
                    <p>You have recently made a reservation for Bag End located in The Shire, Ariandor starting from 12/04/2022 till 14/04/2022</p>
                    <p>You total costs are: R2000.00 ZAR</p>
                    <br>
                    <p>Regards, Airdnd</p>
                    ';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

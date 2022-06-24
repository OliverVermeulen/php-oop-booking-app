<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/MAMP/htdocs/php-oop-booking-app/vendor/autoload.php';

$user_id = $_GET["booking_id"];
echo $user_id;

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

    $users = json_decode(file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/bookings.json"), true);
    $usera = $email["email"];
    $email = $user["email"];

    //Recipients
    $mail->setFrom('confirmation@airdnd.com', 'Airdnd'); // Sender
    $mail->addAddress('oliververmeulen862@gmail.com', 'Juan Vermeulen'); // Receiver
    $mail->addReplyTo('reply@airdnd.com', 'Reply'); // Reply

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Airdnd Booking confirmation';
    $mail->Body    = '
                    <div style="font-family: sans-serif">
                        <p>Hi $name,</p>
                        <p>You have recently made a reservation for $address_name located in $location_name</p>
                        <p>Your stay begins $start_date and ends on $end_date</p>
                        <p>Your total costs are: R$total_cost.00 ZAR</p>
                        <br>
                        <p>Regards, Airdnd</p>
                    </div>  
                    ';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

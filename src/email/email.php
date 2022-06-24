<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/MAMP/htdocs/php-oop-booking-app/vendor/autoload.php';

$recipient_id = $_GET["booking_id"];

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

    // User details
    $recipients = json_decode(file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/bookings.json"), true);
    $recipient = $recipients[$recipient_id]; // gets data from id key that is equal to $recipient_id
    $name = $recipient["name"];
    $surname = $recipient["surname"];
    $email = $recipient["email"];
    $address_name = $recipient["address_name"];
    $location_name = $recipient["location_name"];
    $start_date = $recipient["start_date"];
    $end_date = $recipient["end_date"];
    $days_booked = $recipient["days_booked"];
    $rates = $recipient["rates"];
    $total_cost = $recipient["total_cost"];

    // Recipients
    $mail->setFrom('confirmation@airdnd.com'); // Sender
    $mail->addAddress($email, "$name $surname"); // Receiver
    $mail->addReplyTo('reply@airdnd.com', 'Reply'); // Reply

    // Content
    $mail->isHTML(true);
    $mail->Subject = "Booking confirmation for $address_name";
    $mail->Body    = "
                    <div style='font-family: sans-serif'>
                        <p>Hi <strong>$name</strong>,</p>
                        <p>You have recently made a reservation for <strong>$address_name</strong> located in <strong>$location_name</strong></p>
                        <p>Your stay begins <strong>$start_date</strong> and ends on <strong>$end_date</strong></p>
                        <p>Your stay is for <strong>$days_booked</strong> days at a rate of <strong>R $rates.00 ZAR</strong> per night</p>
                        <p>Your total costs are: <strong>R $total_cost .00 ZAR</strong></p>
                        <br>
                        <p>Regards, Airdnd</p>
                    </div>" 
                    ;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

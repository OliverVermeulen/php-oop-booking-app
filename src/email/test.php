<?php
$fileContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/bookings.json");
$fileContents = json_decode($fileContents, true);
function createEmail($emails)
{
    $hotel_id = $_GET["booking_id"];

    foreach ($emails as $index => $emailArray) {
        $name = $emailArray['name'];
        $surname = $emailArray['surname'];
        $email = $emailArray['email'];
        $address_name = $emailArray['address_name'];
        $location_name = $emailArray['location_name'];
        $start_date = $emailArray['start_date'];
        $end_date = $emailArray['end_date'];
        $days_booked = $emailArray['days_booked'];
        $rates = $emailArray['rates'];
        $total_cost = $emailArray['total_cost'];
        $index = $index + 1;
        if ($emailArray['id'] == $hotel_id) {
            echo "
            <div style='font-family: sans-serif'>
                <p>Hi $name,</p>
                <p>You have recently made a reservation for $address_name located in $location_name</p>
                <p>Your stay begins $start_date and ends on $end_date</p>
                <p>Your total costs are: R$total_cost.00 ZAR</p>
                <br>
                <p>Regards, Airdnd</p>
            </div>    
            ";
        }
    }
}
?>
<main class="main">
    <div class="cards">
        <?php createEmail($fileContents); ?>
    </div>
</main>
<?php
$fileContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/bookings.json");
$fileContents = json_decode($fileContents, true);
function createAccommodations($accommodations)
{
    $hotel_id = "62b5995f475bc";

    foreach ($accommodations as $index => $accommodationArray) {
        $name = $accommodationArray['name'];
        $surname = $accommodationArray['surname'];
        $email = $accommodationArray['email'];
        $address_name = $accommodationArray['address_name'];
        $location_name = $accommodationArray['location_name'];
        $start_date = $accommodationArray['start_date'];
        $end_date = $accommodationArray['end_date'];
        $days_booked = $accommodationArray['days_booked'];
        $rates = $accommodationArray['rates'];
        $total_cost = $accommodationArray['total_cost'];
        $index = $index + 1;
        if ($accommodationArray['id'] == $hotel_id) {
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
        <?php createAccommodations($fileContents); ?>
    </div>
</main>
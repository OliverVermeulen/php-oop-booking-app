<?php
// Math calculation files
require "/MAMP/htdocs/php-oop-booking-app/src/include/calcAmount.inc.php";
require "/MAMP/htdocs/php-oop-booking-app/src/include/calcDays.inc.php";

if (isset($_POST['submit'])) {
// POST variables
    $id = uniqid();    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $numDays = calculateDays($start, $end);
    $rate = $_POST['rates'];
    $fullAmount = calcAmount($numDays);

    // Check if stay duration is longer than 1 day
    if ($start >= $end) {
        $_SESSION['dateError'] = "Duration of stay must be longer than 1 day.. Please fill in the form again.";
        header("Location: index.php");
    } else {
        unset($_SESSION['dateError']);
        $bookingsContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/bookings.json");
        $bookingsContents = json_decode($bookingsContents, true);
        try {
            $bookingsContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/bookings.json");
            $bookingsContents = json_decode($bookingsContents);
        } catch (Exception $ex) {
            $bookingsContents = [];
        }
        if ($bookingsContents == false) {
            $bookingsContents = [];
        }
        array_push($bookingsContents, array(
            "id" => $id,
            "name" => $name,
            "surname" => $surname,
            "email" => $email,
            "address_name" => $address,
            "location_name" => $location,
            "start_date" => $start,
            "end_date" => $end,
            "days_booked" => $numDays,
            "rates" => $rate,
            "total_cost" => $fullAmount
        ));
        file_put_contents("/MAMP/htdocs/php-oop-booking-app/src/json/bookings.json", json_encode($bookingsContents, JSON_PRETTY_PRINT));
    }
}
?>
<main>
    <?php
    echo "
        <div class='checkout'>
            <h2 class='checkout-header'>Details</h2>

            <p class='checkout-row'><span class='checkout-title'>Name:</span>
            <span class='checkout-value'>$name</span></p>
            <p class='checkout-row'><span class='checkout-title'>Surname:</span>
            <span class='checkout-value'>$surname</span></p>
            <p class='checkout-row'><span class='checkout-title'>Email:</span>
            <span class='checkout-value'>$email</span></p>

            <p class='checkout-row'><span class='checkout-title'>Address Name:</span>
            <span class='checkout-value'>$address</span></p>
            <p class='checkout-row'><span class='checkout-title'>Address Location:</span>
            <span class='checkout-value'>$location</span></p>
            <p class='checkout-row'><span class='checkout-title'>Start Date:</span>
            <span class='checkout-value'>$start</span></p>

            <p class='checkout-row'><span class='checkout-title'>End Date:</span>
            <span class='checkout-value'>$end</span></p>
            <p class='checkout-row'><span class='checkout-title'>Days Booked:</span>
            <span class='checkout-value'>$numDays</span></p>
            <p class='checkout-row'><span class='checkout-title'>Rates:</span>
            <span class='checkout-value'>R $rate.00</span></p>
            <p class='checkout-row'><span class='checkout-title'>Total:</span>
            <span class='checkout-value'>R $fullAmount.00</span></p>

            <form action='/php-oop-booking-app/' class='checkout-form'>
            <button class='checkout-button' title='Checkout'>Checkout</button>
            </form>                        
        </div>
        ";
    ?>

</main>
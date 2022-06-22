<?php
require "/MAMP/htdocs/php-oop-booking-app/src/include/calcAmount.inc.php";
require "/MAMP/htdocs/php-oop-booking-app/src/include/calcDays.inc.php";

if (isset($_POST['submit'])) {
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
        <div class='checkout-table'>
            <p class='table-row'><span class='table-title'>Name:</span>
            <span class='table-value'>$name</span></p>
            <p class='table-row'><span class='table-title'>Surname:</span>
            <span class='table-value'>$surname</span></p>
            <p class='table-row'><span class='table-title'>Email:</span>
            <span class='table-value'>$email</span></p>

            <p class='table-row'><span class='table-title'>Address Name:</span>
            <span class='table-value'>$address</span></p>
            <p class='table-row'><span class='table-title'>Address Location:</span>
            <span class='table-value'>$location</span></p>
            <p class='table-row'><span class='table-title'>Start Date:</span>
            <span class='table-value'>$start</span></p>

            <p class='table-row'><span class='table-title'>End Date:</span>
            <span class='table-value'>$end</span></p>
            <p class='table-row'><span class='table-title'>Days Booked:</span>
            <span class='table-value'>$numDays</span></p>
            <p class='table-row'><span class='table-title'>Rates:</span>
            <span class='table-value'>R $rate.00</span></p>
            <p class='table-row'><span class='table-title'>Total:</span>
            <span class='table-value'>R $fullAmount.00</span></p>

            <a href='/php-oop-booking-app/'>
            <button>Home</button>
            </a>            
        </div>
        ";
    ?>

</main>
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
        <div>
            <p class='table-item'><span>Name:</span> $name</p>
            <p class='table-item'><span>Surname:</span>$surname</p>
            <p class='table-item'><span>Email:</span>$email</p>
            <p class='table-item'><span>Address Name:</span>$address</p>
            <p class='table-item'><span>Address Location:</span>$location</p>
            <p class='table-item'><span>Start Date:</span>$start</p>
            <p class='table-item'><span>End Date:</span>$end</p>
            <p class='table-item'><span>Days Booked:</span>$numDays</p>
            <p class='table-item'><span>Rates:</span>R $rate.00</p>
            <p class='table-item'><span>Total:</span>R $fullAmount.00</p>
        </div>
        ";
    ?>
    <a href="/php-oop-booking-app/">
        <button>Home</button>
    </a>
</main>
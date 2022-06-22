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
        <table>
            <tr>
                <th class='table-heading'>Name</th>
                <th class='table-heading'>Surname</th>
                <th class='table-heading'>Email</th>
                <th class='table-heading'>Accommodation Name</th>
                <th class='table-heading'>Accommodation Location</th>
                <th class='table-heading'>Start Date</th>
                <th class='table-heading'>End Date</th>
                <th class='table-heading'>Days Booked</th>
                <th class='table-heading'>Rates</th>
                <th class='table-heading'>Total cost</th>
            </tr>
            <tr>
                <td class='table-item'>$name</td>
                <td class='table-item'>$surname</td>
                <td class='table-item'>$email</td>
                <td class='table-item'>$address</td>
                <td class='table-item'>$location</td>
                <td class='table-item'>$start</td>
                <td class='table-item'>$end</td>
                <td class='table-item'>$numDays</td>
                <td class='table-item'>R $rate.00</td>
                <td class='table-item'>R $fullAmount.00</td>
            </tr>
        </table>
        ";
    ?>
    <a href="/php-oop-booking-app/">
        <button>Home</button>
    </a>
</main>
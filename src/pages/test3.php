<!DOCTYPE html>
<html lang="en">

<?php
session_start();

require "/MAMP/htdocs/php-oop-booking-app/src/include/calcAmount.inc.php";
require "/MAMP/htdocs/php-oop-booking-app/src/include/calcDays.inc.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
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
              "start_date" => $start,
              "end_date" => $end,
              "days_booked" => $numDays,
              "rates" => $rate,
              "total_cost" => $fullAmount
          ));
          file_put_contents("/MAMP/htdocs/php-oop-booking-app/src/json/bookings.json", json_encode($bookingsContents, JSON_PRETTY_PRINT));

        echo "
            <p>Name: $name</p>
            <p>Surname: $surname</p>
            <p>Email: $email</p>
            <p>Accommodation Name: $address</p>
            <p>Start Date: $start</p>
            <p>End Date: $end</p>
            <p>Days Booked: $numDays</p>
            <p>Rates: R $rate</p>
            <p>Total cost: R $fullAmount</p>
        ";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
    <a href="/php-oop-booking-app/">
        <button>
            Home
        </button>
    </a>
</body>

</html>
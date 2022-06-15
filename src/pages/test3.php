<!DOCTYPE html>
<html lang="en">

<?php

session_start();

// require "./includes/calculateAmount.php";
// require "./includes/calculateDays.inc.php";


if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $rate = $_POST['rates'];

    // compares the whole not just the day
    if ($start >= $end) {

        $_SESSION['dateError'] = "Duration of stay must be longer than 1 day.. Please fill in the form again.";
        header("Location: index.php");
    } else {

        unset($_SESSION['dateError']);

        $numDays = calculateDays($start, $end);
        $fullAmount = calcAmount($numDays);

        echo "
            <p>Name: $name</p>
            <p>Surname: $surname</p>
            <p>Start Date: $start</p>
            <p>End Date: $end</p>
            <p>Rates per day: R $rate</p>
            <p>Days Booked: $numDays</p>
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
            Back To Home
        </button>
    </a>

</body>

</html>
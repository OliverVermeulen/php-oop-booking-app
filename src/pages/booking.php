<?php
$head = "Booking";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $head ?></title>
    <link rel="stylesheet" href="/php-oop-booking-app/src/css/style.css">
    <link rel="shortcut icon" href="/php-oop-booking-app/src/images/tab-icon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
    <script src="/php-oop-booking-app/src/js/script.js" defer></script>
</head>

<body>
    <!-- Header -->
    <?php include("/MAMP/htdocs/php-oop-booking-app/src/include/header.inc.php") ?>

    <!-- Main -->
    <?php include("/MAMP/htdocs/php-oop-booking-app/src/include/booking.inc.php") ?>

    <!-- Footer -->
    <?php include("/MAMP/htdocs/php-oop-booking-app/src/include/footer.inc.php") ?>
</body>

</html>
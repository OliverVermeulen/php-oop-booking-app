<!-- Main Body Module -->
<?php
require "/MAMP/htdocs/php-oop-booking-app/src/include/test2.php";
$_SESSION['books'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/accommodations.json");
$fileContents = json_decode($fileContents, true);
?>
<main class="booking-page">
        <?php createBookings($fileContents); ?>
</main>
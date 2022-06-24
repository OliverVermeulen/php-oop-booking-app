<!-- Accommodations Body Module -->
<?php
require "/MAMP/htdocs/php-oop-booking-app/src/include/createAccommodations.inc.php";
$_SESSION['accommodations'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/accommodations.json");
$fileContents = json_decode($fileContents, true);
?>
<main class="main">
    <div class="cards">
        <?php createAccommodations($fileContents); ?>
    </div>
</main>
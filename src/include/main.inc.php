<?php
require "./include/createAccommodations.inc.php";
$_SESSION['books'] = [];
$fileContents = file_get_contents("./json/accommodation.json");
$fileContents = json_decode($fileContents, true);
?>
<main class="main">
    <div class="cards">
        <?php createAccommodations($fileContents); ?>
    </div>
</main>
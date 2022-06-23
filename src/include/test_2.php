<!-- Accommodations Body Module -->
<?php
require "/MAMP/htdocs/php-oop-booking-app/src/include/test_1.php";
$_SESSION['price_class'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/accommodations.json");
$fileContents = json_decode($fileContents, true);
?>
    <!-- Modal Trigger -->
    <button id="myBtn">Compare</button>
    <!-- Comparison Modal -->
    <div id="myModal" class="modal">
        <!-- Modal Header -->
        <div class="modal-content">
            <div class="modal-header">
                <h2>Compare Accommodations</h2>
                <button class="close"><i class="fa fa-minus"></i></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <?php test($fileContents); ?>
            </div>
        </div>
    </div>
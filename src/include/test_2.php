<!-- Accommodations Body Module -->
<?php
require "/MAMP/htdocs/php-oop-booking-app/src/include/test_1.php";
$_SESSION['books'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/accommodations.json");
$fileContents = json_decode($fileContents, true);
?>
<main class="main">
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <h2>Compare Accommodations</h2>
      <span class="close"><i class="fa fa-plus"></i></span>
    </div>
    <div class="modal-body">
    <?php test($fileContents); ?>
    </div>
  </div>
</div>
</main>

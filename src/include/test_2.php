<!-- Accommodations Body Module -->
<?php
require "/MAMP/htdocs/php-oop-booking-app/src/include/test_1.php";
$_SESSION['books'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/php-oop-booking-app/src/json/accommodations.json");
$fileContents = json_decode($fileContents, true);
?>
<main class="main">
<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
</main>
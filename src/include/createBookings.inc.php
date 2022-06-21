<!-- Booking Creation Module -->
<?php
function createBookings($accommodations) {
    $hotel_id = $_GET["hotel_id"];
    foreach ($accommodations as $index => $accommodationArray) {
        $index = $index + 1;
        if ($index == $hotel_id) {
            echo " 
                <div class='accommodation-booking'>
                    <h2>" . $accommodationArray['address'] . "</h2>
                    <img src=" . $accommodationArray['image'] . " alt=" . $accommodationArray['address'] . " class='accommodation-img' title=" . $accommodationArray['address'] . ">

                    <div class='accommodation-data'>
                        <div class='accommodation-info'>
                            <p class='accommodation-location'>" . $accommodationArray['location'] . "</p>
                            <p class='accommodation-description'>" . $accommodationArray['description'] . "</p>
<div class='dropdown'>
  <button class='dropbtn'>Dropdown</button>
  <div class='dropdown-content'>
  <a href='#'>Link 1</a>
  <a href='#'>Link 2</a>
  <a href='#'>Link 3</a>
  </div>
</div>
                        </div>

                        <form action='/php-oop-booking-app/src/pages/test3.php' method='post' class='booking-form'>
                            <div class='pricing'>
                                <p class='price-per-night'>R" . $accommodationArray['price'] . " ZAR</p>
                                <p> per night</p>
                            </div>

                            <div class='booking-inputs'>
                                <input type='hidden' name='address' value=" . $accommodationArray['address'] . ">
                                <input type='hidden' name='rates' value=" . $accommodationArray['price'] . ">

                                <input type='text' name='name' class='booking-input' placeholder='Name' required>
                                <input type='text' name='surname' class='booking-input' placeholder='Surname' required>
                                <input type='text' name='email' class='booking-input' placeholder='Email' required>

                            <div class='check-in-out'>
                                <div>
                                    <label for='start' class='booking-label'>Start Date:</label>
                                    <input type='date' name='start' class='date-input' required>
                                </div>
                                <div class='start-end'>
                                    <label for='end' class='booking-label'>End Date:</label>
                                    <input type='date' name='end' class='date-input' required>
                                </div>
                            </div>

                                <input type='submit' value='Reserve' name='submit' class='booking-btn'>
                            </div>
                        </form>
                    </div>
                </div>
            ";
        }
    }
}

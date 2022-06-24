<!-- Bookings Creation Module -->
<?php
include("/MAMP/htdocs/php-oop-booking-app/src/include/comparisons.php");
function createBookings($accommodations)
{
    // Gets value assigned to hotel_id
    $hotel_id = $_GET["hotel_id"];
    // Loops through each file in accommodations.json
    foreach ($accommodations as $index => $accommodationArray) {
        $index = $index + 1;
        // Filters file by id of selected accommodation
        if ($index == $hotel_id) {
            // booking page template
            echo " 
                <div class='accommodation-booking'>
                    <h2>" . $accommodationArray['address'] . "</h2>
                    <img src=" . $accommodationArray['image'] . " alt=\"" . $accommodationArray['address'] . "\" class='accommodation-img' title=\"" . $accommodationArray['address'] . "\">
                <div class='accommodation-data'>
                    <div class='accommodation-info'>
                    <div class='info-heading'>
                        <p class='accommodation-location'>" . $accommodationArray['location'] . "</p>
                        <p title='rating'>" . $accommodationArray['rating'] . "<i class='fa fa-star'></i></p>                    
                    </div>
                        <p class='accommodation-description'>" . $accommodationArray['description'] . "</p>
                        <div class='compare-btn'>
                        <button id='myBtn' class='booking-btn'>Compare</button>
                        </div>
                    </div>
                    <form action='/php-oop-booking-app/checkout' method='post' class='booking-form'>
                        <div class='pricing'>
                            <p class='price-per-night'>R" . $accommodationArray['price'] . " ZAR</p>
                            <p> per night</p>
                        </div>
                        <div class='booking-inputs'>
                            <input type='hidden' name='address' value=\"" . $accommodationArray['address'] . "\">
                            <input type='hidden' name='location' value=\"" . $accommodationArray['location'] . "\">
                            <input type='hidden' name='rates' value=\"" . $accommodationArray['price'] . "\">
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
                            <input type='submit' value='Reserve' name='submit' class='booking-btn' title='Reserve'>
                        </div>
                    </form>
                    </div>
                </div>
            ";
        }
    }
}

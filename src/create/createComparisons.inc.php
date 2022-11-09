<!-- Comparisons Modal Module -->
<?php
function createComparisons($comparisons)
{
    // Gets value assigned to hotel_range
    $hotel_range = $_GET["hotel_range"];
    // Loops through each file in accommodations.json
    foreach ($comparisons as $index => $comparisonArray) {
        $index = $index + 1;
        // Checks if $comparisonArray['range'] is equal to $hotel_range and filters by range of selected accommodation
        if ($comparisonArray['range'] == $hotel_range) {
            echo "
                <form action='/php-oop-booking-app/checkout' method='post' class='booking-form modal-content'>
                    <h2>" . $comparisonArray["address"] . " </h2>
                    <h2>" . $comparisonArray["location"] . " </h2>
                    <div class='pricing'>
                        <p class='price-per-night'>R" . $comparisonArray["price"] . " ZAR</p>
                        <p> per night</p>
                    </div>
                    <div class='booking-inputs'>
                        <input type='hidden' name='address' value=\"" . $comparisonArray['address'] . "\">
                        <input type='hidden' name='location' value=\"" . $comparisonArray['location'] . "\">
                        <input type='hidden' name='rates' value=\"" . $comparisonArray['price'] . "\">
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
                ";
        };
    }
}

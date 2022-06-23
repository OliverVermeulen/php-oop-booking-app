<!-- Comparisons Modal Module -->
<?php
function createComparisons($comparisons)
{
    foreach ($comparisons as $index => $accommodationArray) {
        $index = $index + 1;
        if ($accommodationArray['range'] == "low") {
            echo "
                <form action='/php-oop-booking-app/checkout' method='post' class='booking-form modal-content'>
                    <h2>" . $accommodationArray["address"] . " </h2>
                    <h2>" . $accommodationArray["location"] . " </h2>
                    <div class='pricing'>
                        <p class='price-per-night'>R" . $accommodationArray["price"] . " ZAR</p>
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
                ";
        };
    }
}

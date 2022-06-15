<!-- Accommodation Creation Module -->
<?php
function createBookings($accommodations)
{
    foreach ($accommodations as $index => $accommodationArray) {
        $index = $index + 1;
        echo " 
                <div class='accommodation-booking'>
                    <h2>" . $accommodationArray['name'] . "</h2>
                    <img src=" . $accommodationArray['image'] . " alt=" . $accommodationArray['name'] . " class='accommodation-img'>
                    <div class='accommodation-data'>
                        <div class='accommodation-info'>
                            <p class='accommodation-location'>" . $accommodationArray['location'] . "</p>
                            <p class='accommodation-description'>" . $accommodationArray['description'] . "</p>
                        </div>

                        <form action='src/pages/test3.php' method='post' class='booking-form'>
                            <div class='pricing'>
                                <p class='price-per-night'>R" . $accommodationArray['price'] . " ZAR</p>
                                <p> per night</p>
                            </div>
                            <div class='booking-inputs'>
                                <div class='check-in-out'>
                                    <input type='date' name='stay-length' class='stay-length'>
                                    <input type='date' name='stay-length' class='stay-length'>
                                </div>
                                <input type='submit' value='Reserve' class='booking-btn'>
                                <select class='booking-btn' name='accommodations'>
                                    <option value='volvo'>Addams Family House</option>
                                    <option value='saab'>Pineapple House</option>
                                    <option value='mercedes'>ghfh</option>
                                    <option value='audi'>fghfg</option>
                                </select>
                            </div>
                            <div class='booking-costs'>
                                <p class='price-breakdown'>R1200 x 10 nights</p>
                                <p class='total'>R12000</p>
                            </div>
                        </form>
                        
                    </div>
                </div>
            ";
    }
}

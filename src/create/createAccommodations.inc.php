<!-- Accommodation Creation Module -->
<?php
function createAccommodations($accommodations)
{
    foreach ($accommodations as $index => $accommodationArray) {
        $index = $index + 1;
        // booking page template
        echo "
            <div class='card'>
                <img src=\"" . $accommodationArray['image'] . "\" alt=\"" . $accommodationArray['address'] . "\" class='accommodation' title=\"" . $accommodationArray['address'] . "\">
                <form action='/php-oop-booking-app/bookings'>
                    <input type='hidden' value=" . $accommodationArray['id'] . " name='hotel_id'>
                    <input type='hidden' value=" . $accommodationArray['range'] . " name='hotel_range'>
                    <button class='booking-page-btn' title='Book'><i class='fa fa-plus'></i></button>
                </form>
                <p>" . $accommodationArray['location'] . "</p>
                <p>R" . $accommodationArray['price'] . ".00 ZAR night</p>
            </div> 
            ";
    }
}

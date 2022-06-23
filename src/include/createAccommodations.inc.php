<!-- Accommodation Creation Module -->
<?php
function createAccommodations($accommodations)
{
    foreach ($accommodations as $index => $accommodationArray) {
        $index = $index + 1;
        echo "
            <div class='card'>
                <img src=\"" . $accommodationArray['image'] . "\" alt=\"" . $accommodationArray['address'] . "\" class='accommodation' title=\"" . $accommodationArray['address'] . "\">
                <form action='/php-oop-booking-app/bookings'>
                <input type='hidden' value=" . $accommodationArray['id'] . " name='hotel_id'>
                    <button class='booking-page-btn' title='Book'><i class='fa fa-plus'></i></button>
                </form>
                <p>" . $accommodationArray['location'] . "</p>
                <p>R" . $accommodationArray['price'] . " ZAR night</p>
            </div> 
            ";
    }
}

<?php
function createAccommodations($accommodations)
{
    foreach ($accommodations as $index => $accommodationArray) {
        $index = $index + 1;
        echo " 
            <div class='card'>
                <img src=" . $accommodationArray['image'] . " alt=" . $accommodationArray['name'] . " class='accommodation'>
                <form action='/php-oop-booking-app/src/pages/booking.php'>
                    <button class='info-modal'><i class='fa fa-info'></i></button>
                </form>
                <p>" . $accommodationArray['location'] . "</p>
                <p>R" . $accommodationArray['price'] . " ZAR night</p>
            </div> 
            ";
    }
}

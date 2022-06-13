<?php
function createAccommodations($accommodations)
{
    foreach ($accommodations as $index => $accommodationArray) {
        $index = $index + 1;
        echo " 
            <div class='card'>
                <img src=" . $accommodationArray['image'] . " alt=" . $accommodationArray['name'] . " class='accommodation'>
                <button class='info-modal'><i class='fa fa-info'></i></button>
                <p>" . $accommodationArray['location'] . "</p>
                <p>R" . $accommodationArray['price'] . " ZAR night</p>
            </div> 
            ";
    }
}

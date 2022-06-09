<?php

function createAccommodations($accommodations)
{

    foreach ($accommodations as $index => $accommodationArray) {

        $index = $index + 1;
        echo " 
            <div class='card'>
                    <img src=" . $accommodationArray['image'] . " alt=". $accommodationArray['name'] . " class='accommodation'>
                    <p>" . $accommodationArray['location'] . "</p>
                    <p>R" . $accommodationArray['price'] . " ZAR</p>
            </div> 
        ";
    }
}

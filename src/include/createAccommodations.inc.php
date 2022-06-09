<?php

function createAccommodations($accommodations)
{

    foreach ($accommodations as $index => $accommodationArray) {

        $index = $index + 1;
        echo " 
            <div class='box'>
                <h3> 
                Accommodation: $index
                </h3>
                <ul>
                    <img src=" . $accommodationArray['image'] . ">
                    <p>" . $accommodationArray['location'] . "</p>
                    <p>R" . $accommodationArray['price'] . " ZAR</p>
                    <p>" . $accommodationArray['description'] ."</p>
                </ul>
            </div> 
        ";
    }
}
?>
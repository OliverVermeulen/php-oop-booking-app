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
                            <label for='name'>Name </label>
                            <input type='text' name='name'>

                            <label for='surname'>Surname </label>
                            <input type='surname' name='surname'>

                            <input type='hidden' name='rates' value=" . $accommodationArray['price'] . ">

                            <label for='start'>Start Date: </label>
                            <input type='date' name='start'>

                            <label for='end'>End Date: </label>
                            <input type='date' name='end'>

                                <input type='submit' value='Reserve' class='booking-btn'>
                            </div>
                        </form>

                    </div>
                </div>
            ";
    }
}

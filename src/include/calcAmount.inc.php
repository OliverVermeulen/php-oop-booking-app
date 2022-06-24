<?php
function calcAmount($num)
{
    $rate = $_POST['rates'];
    // daily rate times number of booked days
    return $rate * $num;
}

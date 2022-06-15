<?php

function calcAmount ($num) {

    $rate = $_POST['rates'];

    return $rate * $num;

}
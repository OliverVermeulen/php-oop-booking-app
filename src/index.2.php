<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        require "./include/createAccommodations.inc.php";

        $_SESSION['books'] = [];

        $fileContents = file_get_contents("./json/accommodation.json");

        $fileContents = json_decode($fileContents, true);
    ?>
    
    <div>
        <?php createAccommodations($fileContents); ?>
    </div>

    <br>
    
</body>

</html>
<?php
session_start();
$head = "Airdnd";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $head ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/tab-icon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
    <script src="./js/script.js" defer></script>
</head>

<body>
    <?php include("./include/header.inc.php") ?>
    <?php
    require "./include/createAccommodations.inc.php";
    $_SESSION['books'] = [];
    $fileContents = file_get_contents("./json/accommodation.json");
    $fileContents = json_decode($fileContents, true);
    ?>
    <main class="main">
        <div class="cards">
            <?php createAccommodations($fileContents); ?>
        </div>
    </main>
    <?php include("./include/footer.inc.php") ?>
</body>

</html>
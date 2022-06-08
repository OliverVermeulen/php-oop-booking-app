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
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="shortcut icon" href="./src/images/tab-icon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
    <script src="./src/js/script.js" defer></script>
</head>

<body>
    <?php include("./src/include/header.inc.php") ?>
    <main class="main">
        <div class="cards">
            <div class="card">
                <img src="./src/images/bag-end.jpg" alt="Bag End" class="accommodation">
                <p>The Shire, Ariandor</p>
                <p>R2,900 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/addams-family-mansion.jpg" alt="The Addams Family Mansion" class="accommodation">
                <p>Finding, Lost Angeles</p>
                <p>R1,500 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/kame-house.jpg" alt="Kame House" class="accommodation">
                <p>Turtle Island, Polynesia</p>
                <p>R1,500 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/the-flintstones-house.jpg" alt="The Flintstones House" class="accommodation">
                <p>Bedrock, Cobblestone County</p>
                <p>R1,200 ZAR night</p>
            </div>

            <div class="card">
                <img src="./src/images/minecraft-village-house.jpg" alt="Minecraft Village House" class="accommodation">
                <p>Village, Grass Plains</p>
                <p>R1,000 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/tardis.jpg" alt="The Tardis" class="accommodation">
                <p>Anywhere, Galaxy</p>
                <p>R10,000 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/tubbytronic-superdome.jpg" alt="Tubbytronic Superdome" class="accommodation">
                <p>Homedome, Teletubbyland</p>
                <p>R3,000 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/spongebob-pineapple-house.jpg" alt="Pineapple House" class="accommodation">
                <p>Bathurst, Eastern Cape</p>
                <p>R1,000 ZAR night</p>
            </div>

            <div class="card">
                <img src="./src/images/the-burrow.jpg" alt="The Burrow" class="accommodation">
                <p>Devon, England</p>
                <p>R1500 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/the-simpsons-house.jpg" alt="The Simpsons House" class="accommodation">
                <p>Springfield, Oregon</p>
                <p>R900 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/arrow-house.jpeg" alt="Arrow House" class="accommodation">
                <p>Garden in Arley, England</p>
                <p>R10,000 ZAR night</p>
            </div>
            <div class="card">
                <img src="./src/images/baker-family-estate.jpg" alt="Arrow House" class="accommodation">
                <p>Dulvey Parish, Louisiana</p>
                <p>R1,000 ZAR night</p>
            </div>
        </div>
    </main>
    <?php include("./src/include/footer.inc.php") ?>
</body>

</html>
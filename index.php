<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The aim of this project is to make a OOP based booking app in PHP">
    <title>Airdnd</title>
    <link rel="stylesheet" href="/php-oop-booking-app/src/css/style.css">
    <link rel="shortcut icon" href="/php-oop-booking-app/src/images/tab-icon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous" defer></script>
    <script src="/php-oop-booking-app/src/js/script.js" defer></script>
</head>

<body>
    <?php
    // PHP Mailer
    include("/MAMP/htdocs/php-oop-booking-app/vendor/autoload.php");

    // Header
    include("/MAMP/htdocs/php-oop-booking-app/src/include/header.inc.php");

    // Switch Router
    $request = $_SERVER['REQUEST_URI'];
    $basepath = "php-oop-booking-app/";
    $request = str_replace($basepath, "", $request);
    $request = strtok($request, '?');
    switch ($request) {
        case '/':
            require __DIR__ . '/src/pages/accommodations.inc.php';
            break;
        case '':
            require __DIR__ . '/src/pages/accommodations.inc.php';
            break;
        case '/home':
            require __DIR__ . '/src/pages/accommodations.inc.php';
            break;
        case '/bookings':
            require __DIR__ . '/src/pages/bookings.inc.php';
            break;
        case '/comparison':
            require __DIR__ . '/src/pages/comparisons.php';
            break;
        case '/checkout':
            require __DIR__ . '/src/pages/checkout.inc.php';
            break;            
        case '/email':
            require __DIR__ . '/src/email/email.php';
            break;
        default:
            http_response_code(404);
            echo "page not found";
            break;
    };

    // Footer
    include("/MAMP/htdocs/php-oop-booking-app/src/include/footer.inc.php");
    ?>
</body>

</html>
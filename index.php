<?php
echo "Hello World";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post" class="sign-in-form">
        <label for="name">Enter name</label>
        <input type="text" name="name" placeholder="Enter name only" required>

        <label for="surname">Enter surname</label>
        <input type="text" name="surname" placeholder="Enter surname only" required>

        <label for="email">Enter email</label>
        <input type="text" name="surname" placeholder="Enter email" required>

        <label for="password">Enter password</label>
        <input type="password" name="password" maxlength="20" required>
    </form>
</body>
</html>
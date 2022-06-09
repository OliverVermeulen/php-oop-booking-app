<?php
$head = "Register";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $head ?></title>
  <link rel="stylesheet" href="/php-oop-booking-app/src/css/style.css">
  <link rel="shortcut icon" href="/php-oop-booking-app/src/images/tab-icon.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  $nameErr = $surnameErr = $emailErr = $passwordErr = $genderErr = "";
  $name = $surname = $email = $password = $gender = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["surname"])) {
      $surnameErr = "Surname is required";
    } else {
      $surname = test_input($_POST["surname"]);
      if (!preg_match("/^[a-zA-Z]*$/", $surname)) {
        $surnameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
    } else {
      $password = test_input($_POST["password"]);
      if (!preg_match("/^[a-zA-Z]*$/", $password)) {
        $passwordErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <?php include("../include/header.inc.php") ?>

  <h2>Register Account</h2>
  <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="name" value="<?= $name; ?>" class="form-input" placeholder="Name">
    <span class="error"><?= $nameErr; ?></span>

    <input type="text" name="surname" value="<?= $surname; ?>" class="form-input" placeholder="Surname">
    <span class="error"><?= $surnameErr; ?></span>

    <input type="text" name="email" value="<?= $email; ?>" class="form-input" placeholder="Email">
    <span class="error"><?= $emailErr; ?></span>

    <input type="password" name="password" value="<?= $password; ?>" class="form-input" minlength="8" maxlength="30" placeholder="Password">
    <span class="error"><?= $passwordErr; ?></span>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
    <span class="error"><?= $genderErr; ?></span>

    <input type="submit" name="submit" value="Submit" class="sign-in-button">
  </form>

  <?php
  echo "<h2>Account Details:</h2>";
  echo $name;
  echo "<br>";
  echo $surname;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $password;
  echo "<br>";
  echo $gender;
  ?>

  <?php include("../include/footer.inc.php") ?>
</body>

</html>
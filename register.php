<?php

/** @var mysqli $conn */


if(isset($_POST['submit'])) {

    //I use require_once to only make connection with the database when I use the submit button.
    require_once "php/database.php";


    //These are for the SQL Injections//
    $email = mysqli_escape_string($conn,  $_POST['email']);
    $password = $_POST['password'];


    //if you didn't fill in your email or password you'll see errors.
    $errors = [];
    if($email == '') {
        $errors['email'] = 'Fill in Email';
    }
    if($password == '') {
        $errors['password'] = 'Fill in password';
    }

    if(empty($errors)) {
        //I want to make a password hash to make secure them for the user.
        //The password will show as random digest in the database when a user makes a new account.
        $password = password_hash($password, PASSWORD_DEFAULT);

        //When the email and password are filled in these fill be added to the database
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        $result = mysqli_query($conn, $query)
        or die('Db Error: '.mysqli_error($conn).' with query: '.$query);

        if ($result) {
            header('Location: index.php');
            exit;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Stylesheet/Stylesheet.css?v=<?php echo time(); ?>">
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<section>
<form action="" method="post">
    <div class="data-field">
        <label for="email">Email</label>
        <input id="email" type="text" name="email" value="<?= $email ?? '' ?>"/>
        <span class="errors"><?= $errors['email'] ?? '' ?></span>
    </div>
    <div class="data-field">
        <label for="password">Password</label>
        <input id="password" type="password" name="password" value="<?= $password ?? '' ?>"/>
        <span class="errors"><?= $errors['password'] ?? '' ?></span>
    </div>
    <div class="data-submit">
        <input type="submit" name="submit" value="Register"/>
    </div>
</form>
</section>
</body>
</html>
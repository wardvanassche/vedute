<?php
session_start();

//I use this code to prevent deeplinks.
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}


//Get email from session
$email = $_SESSION['loggedInUser']['email'];
$admin = $_SESSION['loggedInUser']['admin'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Afacad&family=Oswald:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-loginsysteem.css?v=<?php echo time(); ?>">
    <title>Secure page</title>
</head>

<body>
<!--This is only accessible page when you're logged in-->
<h2>veiligheidspagina</h2>


<ul>
    <h1>
        <p>Je bent ingelogd! Welkom <?= $email ?></p>
        <p>
            <?php if ($admin == true) { ?>
                <a href="adminOverview.php">admin overzicht</a>
            <?php }else{ ?>
            doei
            <?php } ?>
        </p>
<!--        --><?php //var_dump($_SESSION['loggedInUser']); ?>

        <button> <a href="logoutpage.php">uitloggen</a></button>

        <br>
        <button><a href="index.php">Homepage</a></button>

        </h1>
</ul>

</body>
</html>
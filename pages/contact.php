<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css2?family=Afacad&family=Oswald:wght@200;500&display=swap" rel="stylesheet">

</head>
<body>
<header>
    <div class="container">

    </div>
    <div class="container">
        <a href="index.php">
            <h1>VEDUTE</h1>
        </a>
    </div>
    <div class="container login">
        <div class="container login">
            <?php if (!isset($_SESSION['loggedInUser'])) { ?>
                <a href="login.php">
                    Login
                    <i class="fa-solid fa-circle-user"></i>
                </a>
            <?php } else { ?>
                <a href="logoutpage.php">Uitloggen<i class="fa-solid fa-circle-user"></i></a>
            <?php } ?>
        </div>
    </div>
</header>
<!doctype html>
<nav class="navbar navbar-expand-lg bg-light py-1">
    <div class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black border-bottom border-black" href="contact.php">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">GALERIJ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stories.php">VERHALEN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="storybook.php">STORYBOOK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donate.php">DONEREN</a>
            </li>
        </ul>
    </div>
</nav>

<section class="contact">
    <div class="container-sm bg-light mt-5 p-3 text-center">
        <h2>Heb je vragen?</h2>
        <p>
            Welkom op onze contactpagina. Als je vragen hebt, vul het onderstaande formulier in,
            en we nemen zo snel mogelijk contact met je op.
        </p>
        <button> <a href="process_contact.php">Naar contact pagina</a></button>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>
</html>
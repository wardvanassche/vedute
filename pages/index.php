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
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad&family=Oswald:wght@200;500&display=swap" rel="stylesheet">
</head>
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
                <a href="logoutpage.php">Logout<i class="fa-solid fa-circle-user"></i></a>
            <?php } ?>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg bg-light py-1">
    <div class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-black border-bottom border-black" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">GALERIJ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stories.php">VERHALEN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ebook.php">EBOOK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donate.php">DONEREN</a>
            </li>
        </ul>
    </div>
</nav>
<body>
<section class="about">
    <div class="container-sm bg-light mt-5 p-3 text-center">
        <h2>Vedute</h2>
        <p>
            Vedute is opgericht met als doel een bibliotheek van ruimtelijke manuscripten op te bouwen: een verzameling
            driedimensionale objecten, allen in gesloten vorm 44 x 32 x 7 cm, die als gevisualiseerde gedachten het
            begrip ruimte zichtbaar en toegankelijk maken.
        </p>
    </div>
</section>
<section class="news">
    <div class="container-sm bg-light mt-5 p-3 text-center">
        <h2>Laatste nieuws</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, asperiores aspernatur blanditiis cumque
            distinctio eaque ex exercitationem fugit minima officiis omnis rerum sapiente sed similique tempora, ut
            voluptates. Maiores, unde?
        </p>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
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
    <title>Verhalen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-verhaalpagina.css">
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
                <a href="logoutpage.php">Logout<i class="fa-solid fa-circle-user"></i></a>
            <?php } ?>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg bg-light py-1">
    <div class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">GALERIJ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black border-bottom border-black" href="stories.php">VERHALEN</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


<main>
    <section id="artist1">
        <div class="artist-info">
            <div class="text">
                <h2>DE WERELD</h2>
                <p>
                    ‘We bekijken de wereld, waarvan de plekken en de herinneringen nog onbepaald zijn.
                    Maar zodra wij onze eerste handelingen verrichten, zijn deze onverbrekelijk met een
                    plek verbonden.
                </p>
            </div>
           <div class= "image-1">
               <img src="https://media.discordapp.net/attachments/372804664053334016/1184116040720978033/0001_a.jpg?ex=658accff&is=657857ff&hm=be40dffda207acf689feddccb7678d5082351c51255e1500da4778818b40844b&=&format=webp&width=642&height=978">
           </div>
        </div>
    </section>

    <div class="arrowcontainer">
        <div class="arrow down" onclick="scrollToSection('artist2')"></div>
    </div>

    <section id="artist2">
        <div class="artist-info">
            <p>
                Zo hebben wij uiteindelijk allemaal onze eigen plek; de plek waar we
                ooit begonnen, en de plek waar we ooit zullen eindigen.
            </p>
            <img src="https://media.discordapp.net/attachments/372804664053334016/1184116034127544350/0001_c.jpg?ex=658accfe&is=657857fe&hm=9d194093549bde15b7081de35c60ab9a5a0af3cd24c86f89e275156606b963e7&=&format=webp&width=1494&height=978">
                </div>
    </section>

    <div class="arrowcontainer">
        <div class="arrow down" onclick="scrollToSection('artist3')"></div>
    </div>


    <section id="artist3">
        <div class="artist-info">
            <p>
                We hebben de plek van ons
                alleen zijn en de plek van ons groot verlangen. Soms bereiken we die plek.
                Het ideaal dat we onszelf ooit stelden.’
                (Ynte Alkema naar Italo Calvino; 0001-0004)
            </p>

            <img src="https://media.discordapp.net/attachments/372804664053334016/1184116041522098328/0001_b.jpg?ex=658acd00&is=65785800&hm=f213e72d2993e5151dac8cb47df04a74477aadbbe9e69fa71101dfd0252b7e37&=&format=webp&width=1490&height=978">
                </div>
    </section>

    <div class="d-flex justify-content-center align-items-center">
        <section class="stories-button">
            <a href="donate.php" class="btn btn-primary btn-lg">Koop je eigen storybook!!!</a>
        </section>
    </div>

    <div class="arrowcontainer">
        <div class="arrow up" onclick="scrollToSection('artist1')"></div>
    </div>

</main>

<script>
    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        section.scrollIntoView({ behavior: 'smooth' });
    }
</script>

<script>
    // Smooth scrolling effect
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>
</html>
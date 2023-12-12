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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
        <a href="login.php">
            Login
            <i class="fa-solid fa-circle-user"></i>
        </a>
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
        <h2>DE WERELD</h2>
        <div class="artist-info">
            <img src="artist1.jpg" alt="Artist 1">
            <p>
                ‘We bekijken de wereld, waarvan de plekken en de herinneringen nog onbepaald zijn.
                Maar zodra wij onze eerste handelingen verrichten, zijn deze onverbrekelijk met een
                plek verbonden.
            </p>
        </div>

    </section>

    <div class="arrow" onclick="scrollToSection('artist2')"></div>


    <section id="artist2">
        <div class="artist-info">
            <img src="artist2.jpg" alt="Artist 2">
            <p>
                Zo hebben wij uiteindelijk allemaal onze eigen plek; de plek waar we
                ooit begonnen, en de plek waar we ooit zullen eindigen.
            </p>
        </div>
    </section>

    <div class="arrow" onclick="scrollToSection('artist3')"></div>


    <section id="artist3">
        <div class="artist-info">
            <img src="artist3.jpg" alt="Artist 3">
            <p>
                We hebben de plek van ons
                alleen zijn en de plek van ons groot verlangen. Soms bereiken we die plek.
                Het ideaal dat we onszelf ooit stelden.’
                (Ynte Alkema naar Italo Calvino; 0001-0004)
            </p>
        </div>
    </section>

    <!-- Add more sections as needed -->

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
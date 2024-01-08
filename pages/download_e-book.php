<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Doneren</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style-home.css">
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
                        <a class="nav-link" href="stories.php">VERHALEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="storybook.php">STORYBOOK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black border-bottom border-black" href="donate.php">DONEREN</a>
                    </li>
                </ul>
            </div>
        </nav>
        <button class="download_button" id="downloadButton">Download e-book</button>
        <script>
            document.getElementById('downloadButton').addEventListener('click', function() {
                // Hier plaats je de logica om het PDF-bestand te downloaden
                downloadPDF();
            });

            function downloadPDF() {
                // Plaats hier de code om het PDF-bestand te downloaden
                // Bijvoorbeeld, als de PDF een directe link heeft:
                var pdfUrl = 'e-book/test.pdf';

                // Maak een onzichtbare link aan en simuleer een klik om het bestand te downloaden
                var link = document.createElement('a');
                link.href = pdfUrl;
                link.download = 'test.pdf';
                link.click();
            }
        </script>
    </body>
</html>


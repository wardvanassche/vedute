<?php
    if (isset($_GET['amount'])) {
        $donatieBedrag = filter_var($_GET['amount'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    } else {
        echo "Fout: Geen donatiebedrag ontvangen.";
    }
?>

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
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">

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
                        <a class="nav-link" href="stories.php">VERHALEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="storybook.php">STORYBOOK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black border-bottom border-black"  href="donate.php">DONEREN</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="center-content">
            <h4>Bedankt voor je donatie</h4>
            <a href="storybook.php"><button>terug</button></a>
        </div>
        <?= exit;?>
    </body>
</html>

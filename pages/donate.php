<?php
session_start();

//I use this code to prevent deeplinks.
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}
require_once "../php/settings.php"; // verbinding met database


$admin = $_SESSION['loggedInUser']['admin'];
//$doneren = $_SESSION['loggedInUser']['doneer'];
$id = $_SESSION['loggedInUser']['id'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Storybook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
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


<div class="container mt-5">
    <h4>Bedrag om te doneren:</h4>
    <form id="donationForm" method="post">

        <label for="donationAmount" class="form-label"></label>
        <div class="input-group mb-3">
            <span class="input-group-text">€</span>
            <input type="number" id="donationAmount" name="donationAmount" class="form-control" required>
        </div>
        <input type="hidden" id="donationSubmitted" name="donationSubmitted" value="1">
        <button type="submit" name="toggleButton" class="btn btn-primary">Doneren</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('donationForm').addEventListener('submit', function () {
            document.getElementById('donationSubmitted').value = '1';
            return true;
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['toggleButton'])) {

        if (isset($_POST['donationSubmitted']) && $_POST['donationSubmitted'] == '1') {

            $donatieBedrag = $_POST['donationAmount'];
            $nieuweStatus = true;
            $sqlUpdate = "UPDATE users SET doneer = " . ($nieuweStatus ? 1 : 0) . " WHERE id = $id";

            if ($conn->query($sqlUpdate)) {
                $conn->commit();  // Bevestig de transactie
                echo "Update succesvol uitgevoerd. Bedrag: €" . htmlspecialchars($donatieBedrag);

                $_SESSION['donation_result'] = "Update succesvol uitgevoerd. Bedrag: €" . htmlspecialchars($donatieBedrag);
                $betalen = 'https://tikkie.me/pay/indj4r4mnv7pd3g6l1k3';
                ?>

                <script type="text/javascript">

                    var betalen = '<?php echo $betalen; ?>';
                    var donatieBedrag = <?php echo $donatieBedrag; ?>;

                    window.open(betalen, "_blank");

                    setTimeout(function () {
                        window.location.href = "process_donation.php?amount=" + encodeURIComponent(donatieBedrag);
                    }, 1500);
                </script>
                <?php

            } else {
                echo "Fout bij de update: " . $conn->error;
            }

        }
    }
    $conn->close();
}

?>


</body>
</html>
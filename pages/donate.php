<?php
session_start();

//I use this code to prevent deeplinks.
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}



$admin = $_SESSION['loggedInUser']['admin'];
$doneren = $_SESSION['loggedInUser']['doneer'];
$id = $_SESSION['loggedInUser']['id'];
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
                <a class="nav-link" href="stories.php">VERHALEN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ebook.php">EBOOK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black border-bottom border-black" href="donate.php">DONEREN</a>
            </li>
        </ul>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<p><?= $doneren, $admin, $id ?>h</p>
<?php
// Include het bestand met de databaseverbinding
require_once "../php/settings.php"; // verbinding met database
// Controleer of het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Controleer of de knop is ingedrukt
    if (isset($_POST['toggleButton'])) {
        // Haal de huidige waarde op
        $sqlSelect = "SELECT doneer FROM users WHERE id = $id";
        $result = $conn->query($sqlSelect);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $huidigeStatus = $doneren;

            // Wissel de boolean-waarde om
            $nieuweStatus = !$huidigeStatus;

            // Update de database met de nieuwe waarde (let op de enkele aanhalingstekens en update query)
//            $sqlUpdate = "UPDATE users SET doneer = " . ($nieuweStatus ? 1 : 0) . " WHERE id = $id";
//            $conn->query($sqlUpdate);
            $sqlUpdate = "UPDATE users SET doneer = " . ($nieuweStatus ? 1 : 0) . " WHERE id = $id";
            if ($conn->query($sqlUpdate)) {
                $conn->commit();  // Bevestig de transactie
                echo "Update succesvol uitgevoerd.";
            } else {
                echo "Fout bij de update: " . $conn->error;
            }


        }
    }
}

// Sluit de databaseverbinding
$conn->close();
?>



<!-- Het formulier met de knop -->
<form method="post">
    <button type="submit" name="toggleButton">Toggle Doneer</button>
</form>



</body>
</html>
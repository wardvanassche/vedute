<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit;
}


$email = $_SESSION['loggedInUser']['email'];
$admin = $_SESSION['loggedInUser']['admin'];
if ($admin === false){
    header("Location: index.php"); // Redirect to the login page if not logged in
    exit;
}

// HTML for the homepage
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
                <a class="nav-link" href="ebook.php">STORYBOOK</a>
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
        <h2>Admin overzicht</h2>
        <p>
<?php
require_once "../php/settings.php"; // verbinding met database

// haalt alle gegevens uit de database
$sql = "SELECT * FROM users";

$result = $conn->query($sql); // Uitvoeren van de query en de resultaten worden in $result opgeslagen

// Controleer of er gegevens zijn opgehaald
if ($result->num_rows > 0) {

// Loop door de resultaten en haal elke rij op
while ($row = $result->fetch_assoc()) {
// Toon de opgehaalde gegevens van elke rij
    $id = $row["id"];
    $email = $row["email"];
    $doneer = $row["doneer"];

    // Toon de opgehaalde gegevens van elke rij in HTML
    echo "<p>ID: $id</p>";
    echo "<p>Email: $email</p>";
    echo "<p>doneer: $doneer</p>";
        }
        } else {
            echo "Er zijn nog geen vedutes aangemaakt";
        }

        $conn->close(); // Sluit de databaseverbinding
        ?>
        </p>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
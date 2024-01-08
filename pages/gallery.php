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
    <title>Galerij</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css2?family=Afacad&family=Oswald:wght@200;500&display=swap"
          rel="stylesheet">

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
        <?php if (!isset($_SESSION['loggedInUser'])) { ?>
            <a href="login.php">
                Login
                <i class="fa-solid fa-circle-user"></i>
            </a>
        <?php } else { ?>
            <a href="logoutpage.php">Logout<i class="fa-solid fa-circle-user"></i></a>
        <?php } ?>
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
                <a class="nav-link text-black border-bottom border-black" href="gallery.php">GALERIJ</a>
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
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm">
                <?php
                // verbinding met database
                require_once "../php/database.php";

                // haalt alle gegevens uit de database
                $sql = "SELECT * FROM vedute";

                // Uitvoeren van de query en de resultaten worden in $result opgeslagen
                $result = $conn->query($sql);

                // Controleer of er gegevens zijn opgehaald
                if ($result->num_rows > 0) {

                    // Loop door de resultaten en haal elke rij op
                    while ($row = $result->fetch_assoc()) {
                        // Toon de opgehaalde gegevens van elke rij
                        echo '<!-- Button trigger modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal1' . $row['id'] . '">
                    <img src="' . $row["photo1"] . '" alt="' . $row["title"] . '" class="img-responsive fit-image rounded">
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal1' . $row['id'] . '" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> ' . $row["title"] . ' </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExampleIndicators' . $row['id'] . '" class="carousel slide">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators' . $row['id'] . '" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators' . $row['id'] . '" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators' . $row['id'] . '" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="' . $row["photo1"] . '" class="d-block w-100" alt="' . $row["title"] . '">
                                    </div>   
                                    <div class="carousel-item">
                                        <img src="' . $row["photo2"] . '" class="d-block w-100" alt="' . $row["title"] . '">
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="' . $row["photo3"] . '" class="d-block w-100" alt="' . $row["title"] . '">
                                    </div>                                                                     
                                </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators' . $row['id'] . '" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators' . $row['id'] . '" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>';

                    }
                } else {
                    echo "Er zijn nog geen vedutes aangemaakt";
                }

                $conn->close(); // Sluit de databaseverbinding
                ?>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
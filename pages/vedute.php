<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style-home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>Overzicht veduten</title>
    </head>
    <body> 
        <div class="d-flex justify-content-evenly mt-3 mb-3">
            <button> <a href="create.php">Maak vedute aan</a> </button>
            <button> <a href="adminOverview.php">Admin pagina</a> </button>
        </div>
        <div class="col-md-8 offset-md-2">
            <?php
                // Start session
                session_start();

                // I use this code to prevent deeplinks.
                if (!isset($_SESSION['loggedInUser'])) {
                    header("Location: login.php");
                    exit;
                }

                // verbinding met database
                require_once "../php/database.php";

                // haalt alle gegevens uit de database
                $sql = "SELECT * FROM vedute";

                // Uitvoeren van de query en de resultaten worden in $result opgeslagen
                $result = $conn->query($sql);

                // Controleer of er gegevens zijn opgehaald
                if ($result->num_rows > 0) {
                    echo "<table class='table table-striped'>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th scope='col'>Titel</th>";
                                echo "<th scope='col'>Datum</th>";
                                echo "<th scope='col'>Auteur</th>";
                                echo "<th scope='col'>Beschrijving</th>";
                                echo "<th scope='col'></th>";
                                echo "<th scope='col'></th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                            while ($row = $result->fetch_assoc()) {
                                // Loop through results, get each row
                                echo "<tr>";
                                echo '<td>' . $row["title"] . '</td>';
                                echo '<td>' . $row["date"] . '</td>';
                                echo '<td>' . $row["author"] . '</td>';
                                echo '<td>' . $row["description"] . '</td>';
                                echo '<td><a class="btn btn-warning" href="editvedute.php?id=' . $row["id"] . '">Wijzig</a></td>';
                                echo '<td><a class="btn btn-danger" href="deletevedute.php?id=' . $row["id"] . '">Verwijder</a></td>';
                            }
                        echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "Er zijn nog geen nieuws veduten!";
                }

                $conn->close(); // Sluit de databaseverbinding
            ?>
        </div>
    </body>
</html>
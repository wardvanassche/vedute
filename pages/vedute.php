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

                // Loop door de resultaten en haal elke rij op
                while ($row = $result->fetch_assoc()) {
                    // Toon de opgehaalde gegevens van elke rij
                    echo "ID: " . $row["id"];
                    echo "<br>";
                    echo "Titel: " . $row["title"];
                    echo "<br>";
                    echo "Create date: " . $row["date"];
                    echo "<br>";
                    echo "Auteur: " . $row["author"];
                    echo "<br>";
                    echo "Beschrijving: " . $row["description"];
                    echo "<br>";

                    // Toont de afbeeldin--g
                    echo '<img src="' . $row["photo"] . '" alt="Afbeelding">';
                    echo "<br>";
                    echo '<a class="btn btn-info" href="editvedute.php?id=' . $row["id"] . '">Wijzig</a>';
                    echo "<br>";
                    echo '<a class="btn btn-info" href="deletevedute.php?id=' . $row["id"] . '">Verwijder</a>';
                }
            } else {
                echo "Er zijn nog geen vedutes aangemaakt";
            }

            $conn->close(); // Sluit de databaseverbinding
        ?>
    </body>
</html>
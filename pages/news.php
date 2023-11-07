<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Overzicht nieuws</title>
    </head>
    <body>
        <a href="insertNews.php">Maak artikel aan</a>
        <br>
        <br>
        <?php
            // verbinding met database
            require_once "../php/settings.php"; 

            // haalt alle gegevens uit de database
            $sql = "SELECT * FROM news";

            $result = $conn->query($sql); // Uitvoeren van de query en de resultaten worden in $result opgeslagen

            // Controleer of er gegevens zijn opgehaald
            if ($result->num_rows > 0) {

                // Loop door de resultaten en haal elke rij op
                while ($row = $result->fetch_assoc()) {
                    // Toon de opgehaalde gegevens van elke rij
                    echo "ID: " . $row["id"];
                    echo "<br>";
                    echo "Titel: " . $row["news_title"];
                    echo "<br>";
                    echo "Create date: " . $row["news_create_date"];
                    echo "<br>";
                    echo "Edit date: " . $row["news_edit_date"];
                    echo "<br>";
                    echo "Auteur: " . $row["news_author"];
                    echo "<br>";
                    echo "Bericht: " . $row["news_content"];
                    echo "<br>";
                    echo "Artikel zichtbaar?: " . $row["news_visible"];
                    echo "<br>";
                    echo '<a class="btn btn-info" href="editNews.php?id=' .$row["id"] . '">Wijzig</a>';
                    echo "<br>";
                    echo '<a class="btn btn-info" href="deleteNews.php?id=' .$row["id"] . '">Verwijder</a>';
                    echo "<br>";
                    echo "<br>";
                }
            } else {
                echo "Er zijn nog geen nieuws berichten!";
            }

            $conn->close(); // Sluit de databaseverbinding
        ?>
    </body>
</html>
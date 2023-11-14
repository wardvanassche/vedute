<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Overzicht nieuws</title>
    </head>
    <body>
        <a href="insertnews.php">Maak artikel aan</a>
        <br>
        <br>
        <?php
            // verbinding met database
            require_once "../php/database.php"; 

            // haalt alle gegevens uit de database
            $sql = "SELECT * FROM news";

            $result = $conn->query($sql); // Uitvoeren van de query en de resultaten worden in $result opgeslagen

            // Controleer of er gegevens zijn opgehaald
            if ($result->num_rows > 0) {

                // Loop door de resultaten en haal elke rij op
                echo "<table class='table table-striped'>";
                    echo "<thead>";
                        echo "<tr>";
                        echo "<th scope='col'>#ID</th>";
                        echo "<th scope='col'>Titel</th>";
                        echo "<th scope='col'>Aanmaak datum</th>";
                        echo "<th scope='col'>Wijzig datum</th>";
                        echo "<th scope='col'>Auteur</th>";
                        echo "<th scope='col'>Bericht</th>";
                        echo "<th scope='col'>Zichtbaar</th>";
                        echo "<th scope='col'></th>";
                        echo "<th scope='col'></th>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while ($row = $result->fetch_assoc()) {
                        // Toon de opgehaalde gegevens van elke rij
                        echo "<tr>";
                        echo '<th scope="row">' . $row["id"] . '</th>';
                        echo '<td>' . $row["news_title"] . '</td>';
                        echo '<td>' . $row["news_create_date"] . '</td>';
                        echo '<td>' . $row["news_edit_date"] . '</td>';
                        echo '<td>' . $row["news_author"] . '</td>';
                        echo '<td>' . $row["news_content"] . '</td>';
                        if ($row["news_visible"] == 1) {
                            echo '<td> Zichtbaar </td>';
                        } else {
                            echo '<td> Niet zichtbaar </td>';
                        }
                        echo '<td><a class="btn btn-info" href="editNews.php?id=' . $row["id"] . '">Wijzig</a></td>';
                        echo '<td><a class="btn btn-info" href="deleteNews.php?id=' . $row["id"] . '">Verwijder</a></td>';
                        
                        // echo "ID: " . $row["id"];
                        // echo "Titel: " . $row["news_title"];
                        // echo "Create date: " . $row["news_create_date"];
                        // echo "Edit date: " . $row["news_edit_date"];
                        // echo "Auteur: " . $row["news_author"];
                        // echo "Bericht: " . $row["news_content"];
                        // echo "Artikel zichtbaar?: " . $row["news_visible"];
                        // echo '<a class="btn btn-info" href="editNews.php?id=' . $row["id"] . '">Wijzig</a>';
                        // echo '<a class="btn btn-info" href="deleteNews.php?id=' . $row["id"] . '">Verwijder</a>';
                    }
                    echo "</tbody>";
                echo "</table>";
            } else {
                echo "Er zijn nog geen nieuws berichten!";
            }

            $conn->close(); // Sluit de databaseverbinding
        ?>
    </body>
</html>
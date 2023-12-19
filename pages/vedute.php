<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overzicht veduten</title>
</head>
<body>
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

        // Toont de afbeelding
        echo '<img src="' . $row["photo1"] . '" alt="Afbeelding">';
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
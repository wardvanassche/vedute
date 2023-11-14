<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>test of het werkt

<?php
require_once "../php/settings.php"; // verbinding met database

// haalt alle gegevens uit de database
$sql = "SELECT * FROM vedute";

$result = $conn->query($sql); // Uitvoeren van de query en de resultaten worden in $result opgeslagen

// Controleer of er gegevens zijn opgehaald
if ($result->num_rows > 0) {

    // Loop door de resultaten en haal elke rij op
    while ($row = $result->fetch_assoc()) {
        // Toon de opgehaalde gegevens van elke rij
        echo $row["id"];
        echo $row["title"];
        echo $row["date"];
        echo $row["author"];
        echo $row["description"];

        // Toont de afbeelding
        echo '<img src="' . $row["photo"] . '" alt="Afbeelding">';
        ?>
        <td class='border-b border-slate-200 dark:border-slate-600 p-4 pr-8 text-slate-500 dark:text-slate-400'><a
                    href='delete.php?id=<?= htmlentities($row["id"]) ?>'>Delete</a></td>
        <?php

    }
} else {
    echo "Er zijn nog geen vedutes aangemaakt";
}

$conn->close(); // Sluit de databaseverbinding
?>


</body>
</html>
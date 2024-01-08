<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Delete</title>
    </head>
    <body>
        <form action='../php/crud.php' method="post">
            <?php
                require_once "../php/settings.php"; // verbinding met database
                if (!isset($_GET['id']) || $_GET['id'] === '') {
                    header('Location: test.php');
                    exit;
                }
                $id = $_GET['id'];
                // haalt alle gegevens uit de database
                $sql = "SELECT * FROM vedute WHERE id =" . $id;

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
                        echo '<input type="hidden" name="id" value="' . htmlentities($row['id']) . '" alt="Afbeelding">';
                        echo '<button type="submit" name="delete">DELETE</button>';
                    }
                } else {
                    echo "Er zijn nog geen vedutes aangemaakt";
                } 
            ?>
        </form>
    </body>
</html>
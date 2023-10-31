<?php
function createRecord($titel, $date, $author, $description, $photo) {


    $titel = "titel";
    $date = "date";
    $author = "author";
    $description = "description";
    $photo = "photo";
    $database = "database";


    $conn = new mysqli($titel, $date, $author, $description, $photo);


    if ($conn->connect_error) {
        die("Verbindingsfout: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("INSERT INTO vedute (titel, date, author, description, $photo) VALUES (?, ?)");
    $stmt->bind_param("ss", $auteur, $kunstwerk);


    if ($stmt->execute()) {
        echo "vedute succesvol toegevoegd.";
    } else {
        echo "Fout bij het toevoegen van het vedute: " . $stmt->error;
    }


    $conn->close();
}

$name = "John Doe";
$email = "johndoe@example.com";
createRecord($name, $email);
?>

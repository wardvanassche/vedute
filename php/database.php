<?php
    //gegevens database
    $host = "localhost";
    $database = "vedute";
    $user = "root";
    $password = "";

    //verbind de database
    $conn = new mysqli($host, $user, $password, $database);

    //error melding als het niet werkt
    if ($conn->connect_error) {
        die("Verbindingsfout: " . $conn->connect_error);
    }
?>
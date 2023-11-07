<?php
    //gegevens database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vedute";

    //verbind de database
    $conn = new mysqli($servername, $username, $password, $dbname);

    //error melding als het niet werkt
    if ($conn->connect_error) {
        die("Verbindingsfout: " . $conn->connect_error);
    }
?>
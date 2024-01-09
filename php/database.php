<?php
    // Local DB
    // $host = "localhost";
    // $database = "vedute";
    // $user = "root";
    // $password = "";

    // Live DB
    $host = "185.114.157.173";
    $database = "vlogslif_vedute";
    $user = "vlogslif_admin";
    $password = "lol1234";

    //verbind de database
    $conn = new mysqli($host, $user, $password, $database);

    //error melding als het niet werkt
    if ($conn->connect_error) {
        die("Verbindingsfout: " . $conn->connect_error);
    }
?>

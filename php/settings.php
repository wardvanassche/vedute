<?php
    // Local DB
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "vedute";

    // Live DB
    $host = "185.114.157.173";
    $database = "vlogslif_vedute";
    $user = "vlogslif_admin";
    $password = "lol1234";

    //verbind de database
    $conn = new mysqli($servername, $username, $password, $dbname);

    //error melding als het niet werkt
    if ($conn->connect_error) {
        die("Verbindingsfout: " . $conn->connect_error);
    }
?>
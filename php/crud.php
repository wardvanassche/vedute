<?php
require_once "../php/settings.php"; // database verbinding

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    //error melding
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // beveiligd en ontvangt de gegevens
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $photo = mysqli_real_escape_string($conn, $_POST["photo"]);

    // roept createvedute aan
    createVedute($title, $date, $author, $description, $photo, $conn);
} else {
    echo "Het formulier is niet correct verzonden.";
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {

    if (!isset($_POST['id']) || $_POST['id'] === '') {
        header('Location: index.php');
        exit;
    }

    $id = $_POST['id'];
    var_dump($id);
    $sql = "DELETE FROM vedute  WHERE id= $id";

    $result = mysqli_query($conn, $sql) or die('Error: ' . mysqli_error($conn) . ' with query ' . $sql);


    $conn->close();


    // Redirect to index.php
    header('Location: test.php');
    exit;
}

function createVedute($title, $date, $author, $description, $photo, $conn)
{

    // voegt de informatie toe aan de database
    $sql = "INSERT INTO vedute (title, date, author, description, photo) VALUES ('$title', '$date', '$author', '$description', '$photo')";

    // Voer de query uit en controleert op fouten
    $result = mysqli_query($conn, $sql) or die('error ' . mysqli_error($conn) . 'with query' . $sql);

    // als de query gelukt is stuurt hij je naar test.php waar alle vedutes getoond worden
    if ($result) {
        header("location: test.php");
        echo "vedute gemaakt";
    } else {
        // Als er een fout optreedt, toon een foutbericht
        echo "fout bij het maken van vedute" . $sql->error;
    }

    // Sluit de databaseverbinding
    $conn->close();
}


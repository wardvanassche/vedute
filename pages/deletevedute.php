<?php
// Start session
// session_start();

// Check if logged in
// if (!isset($_SESSION['loggedInUser'])) {
//     header("Location: login.php");
//     exit;
// }

include "../php/database.php";

if (isset($_GET['id'])) {

    $vedute_id = $_GET['id'];

    $sql = "DELETE FROM `vedute` WHERE `id`='$vedute_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record deleted successfully.";
        header('Location: vedute.php');
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

}
?>
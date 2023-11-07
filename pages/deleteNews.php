<?php
    // Start session
    // session_start();

    // Check if logged in
    // if (!isset($_SESSION['loggedInUser'])) {
    //     header("Location: login.php");
    //     exit;
    // }

    include "../php/settings.php";

    if (isset($_GET['id'])) {

        $news_id = $_GET['id'];

        $sql = "DELETE FROM `news` WHERE `id`='$news_id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "Record deleted successfully.";
            header('Location: news.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 
?>
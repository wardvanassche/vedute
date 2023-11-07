<?php
    // Start session
    session_start();

    // Can I even visit this page?
    if (!isset($_SESSION['loggedInUser'])) {
        header("Location: login.php");
        exit;
    }

    // Database variable
    /** @var mysqli $db */

    // Database connection
    require_once("includes/database.php");

    // Check for id
    $id = preg_replace('#[^0-9]#i', '', $_GET['id']);
?>
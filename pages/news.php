<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>Overzicht nieuws</title>
    </head>
    <body>
        <a href="insertnews.php">Maak artikel aan</a>
        <br>
        <br>
        <div class="col-md-8 offset-md-2">
            <?php
                // Start session
                session_start();

                // I use this code to prevent deeplinks.
                if (!isset($_SESSION['loggedInUser'])) {
                    header("Location: ../index.php");
                    exit;
                }

                // DB
                require_once "../php/database.php"; 

                // Get all data from table
                $sql = "SELECT * FROM news";

                // Run query, save results in $result
                $result = $conn->query($sql);

                // Check if there is data
                if ($result->num_rows > 0) {

                    // Echo table for news admin page
                    echo "<table class='table table-striped'>";
                        echo "<thead>";
                            echo "<tr>";
                            echo "<th scope='col'>#ID</th>";
                            echo "<th scope='col'>Titel</th>";
                            echo "<th scope='col'>Aanmaak datum</th>";
                            echo "<th scope='col'>Wijzig datum</th>";
                            echo "<th scope='col'>Auteur</th>";
                            echo "<th scope='col'>Bericht</th>";
                            echo "<th scope='col'>Zichtbaar</th>";
                            echo "<th scope='col'></th>";
                            echo "<th scope='col'></th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                            while ($row = $result->fetch_assoc()) {
                                // Loop through results, get each row
                                echo "<tr>";
                                echo '<th scope="row">' . $row["id"] . '</th>';
                                echo '<td>' . $row["news_title"] . '</td>';
                                echo '<td>' . $row["news_create_date"] . '</td>';
                                echo '<td>' . $row["news_edit_date"] . '</td>';
                                echo '<td>' . $row["news_author"] . '</td>';
                                echo '<td>' . $row["news_content"] . '</td>';
                                if ($row["news_visible"] == 1) {
                                    echo '<td> Zichtbaar </td>';
                                } else {
                                    echo '<td> Niet zichtbaar </td>';
                                }
                                echo '<td><a class="btn btn-warning" href="editNews.php?id=' . $row["id"] . '">Wijzig</a></td>';
                                echo '<td><a class="btn btn-danger" href="deleteNews.php?id=' . $row["id"] . '">Verwijder</a></td>';
                            }
                        echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "Er zijn nog geen nieuws berichten!";
                }

                // Close connection
                $conn->close();
            ?>
        </div>
    </body>
</html>
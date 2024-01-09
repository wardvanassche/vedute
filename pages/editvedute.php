<?php
    include "../php/database.php";

    if (isset($_POST['submit'])) {
        $vedute_id = $_POST['id'];
        $title = $_POST["title"];
        $author = $_POST["author"];
        $description = $_POST['description'];
        $photo1 = $_POST['photo1'];
        $photo2 = $_POST['photo2'];
        $photo3 = $_POST['photo3'];

        $sql = "UPDATE `vedute` SET `title`='$title',`description`='$description',`photo1`='$photo1',`photo2`='$photo2',`photo3`='$photo3' WHERE `id`='$vedute_id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "Vedute updated successfully.";
            header('Location: vedute.php');
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_GET['id'])) {
        $vedute_id = $_GET['id'];
        $sql = "SELECT * FROM `vedute` WHERE `id`='$vedute_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $title = $row["title"];
                $date = $row["date"];
                $author = $row["author"];
                $description = $row['description'];           
                $photo1 = $row['photo1'];
                $photo2 = $row['photo2'];
                $photo3 = $row['photo3'];
            }
        }
    }
?>
<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style-form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>Wijzig vedute - <?php echo $title; ?> </title>
    </head>
    <body>
        <div class="registration-form">
            <form action="" method="post">
                <h2>Vedute wijzigen</h2>
                <input type="hidden" name="id" value="<?php echo $vedute_id; ?>">
                <div class="form-group">
                    Titel
                    <input type="text" value="<?php echo $title; ?>" class="form-control item" name="title" id="title" required>
                </div>
                <div class="form-group">
                    Datum
                    <input type="date" value="<?php echo $date; ?>" class="form-control item" name="date" id="date" required>
                </div>
                <div class="form-group">
                    Auteur
                    <input type="text" value="<?php echo $author; ?>" class="form-control item" name="author" id="author" required>
                </div>
                <div class="form-group">
                    Omschrijving
                    <input type="text" value="<?php echo $description; ?>" class="form-control item" name="description" id="description" required>
                </div>
                <div class="form-group">
                    Foto 1
                    <input type="text" value="<?php echo $photo1; ?>" class="form-control item" name="photo1" id="photo1" required>
                    Foto 2 
                    <input type="text" value="<?php echo $photo2; ?>" class="form-control item" name="photo2" id="photo2" required>
                    Foto 3
                    <input type="text" value="<?php echo $photo3; ?>" class="form-control item" name="photo3" id="photo3" required>
                </div>
                <div class="form-group d-flex">
                    <button type="submit" name="submit" value="submit" class="btn btn-block create-account">Wijzigen</button>
                    <a href="vedute.php" class="btn-block create-account margin-left">
                        Terug
                    </a>
                </div>
            </form>
        </div>
    </body>
</html>


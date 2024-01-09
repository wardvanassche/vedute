<?php
    include "../php/database.php";

    if (isset($_POST['update'])) {
        $news_id = $_POST['id'];
        $title = $_POST["news_title"];
        $content = $_POST["news_content"];
        $edit_date = $_POST["news_edit_date"];
        $author = $_POST["news_author"];

        $sql = "UPDATE `news` SET `news_title`='$title',`news_content`='$content',`news_edit_date`='$edit_date', `news_author`='$author' WHERE `id`='$news_id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "News updated successfully.";
            header('Location: news.php');
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_GET['id'])) {
        $news_id = $_GET['id'];
        $sql = "SELECT * FROM `news` WHERE `id`='$news_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $title = $row["news_title"];
                $content = $row["news_content"];
                $author = $row["news_author"];
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
        <title>Wijzig Nieuws </title>
    </head>
    <body>
        <div class="registration-form">
            <form action="" method="post">
                <h2>Artikel wijzigen</h2>
                <div class="form-group">
                    Titel
                    <input type="text" class="form-control item" id="news_title" value="<?php echo $title; ?>" name="news_title">
                </div>
                <div class="form-group">
                    Auteur
                    <input type="text" class="form-control item" id="news_author" name="news_author" value="<?php echo $author; ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="news_edit_date" value="<?php echo date("Y.m.d"); ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $news_id; ?>">
                </div>
                <div class="form-group">
                    Bericht
                    <textarea class="form-control item" name="news_content" rows="5" cols="21"><?php echo $content; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="update" value="submit" class="btn btn-block create-account">Wijzig</button>
                </div>
            </form>
        </div>
    </body>
</html>


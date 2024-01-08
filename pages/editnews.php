<?php
    include "../php/database.php";

    if (isset($_POST['update'])) {
        $news_id = $_POST['id'];
        $title = $_POST["news_title"];
        $content = $_POST["news_content"];
        $edit_date = $_POST["news_edit_date"];

        $sql = "UPDATE `news` SET `news_title`='$title',`news_content`='$content',`news_edit_date`='$edit_date' WHERE `id`='$news_id'";
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
        <title>Wijzig vedute - <?php echo $title; ?> </title>
    </head>
    <body>
        <h2>Nieuws update</h2>
        <form action="" method="post">
            Titel:
            <br>
            <input type="text" name="news_title" value="<?php echo $title; ?>">
            <br>
            Artikel context:
            <br>
            <input type="text" name="news_content" value="<?php echo $content; ?>">
            <br>
            <input type="hidden" name="id" value="<?php echo $news_id; ?>">
            <input type="hidden" name="news_edit_date" value="<?php echo date("Y.m.d"); ?>">
            <br>
            <input type="submit" value="Update" name="update">
        </form>
    </body>
</html>


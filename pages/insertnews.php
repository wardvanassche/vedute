<?php
    include "../php/settings.php";
    if (isset($_POST['submit'])) {
        $news_title = $_POST['news_title'];
        $news_create_date = $_POST['news_create_date'];
        $news_content = $_POST['news_content'];
        $news_author = $_POST['news_author'];

        $sql = "INSERT INTO `news`(`news_title`, `news_create_date`, `news_content`, `news_author`, `news_visible`) VALUES ('$news_title','$news_create_date','$news_content','$news_author',1)";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
            header('Location: news.php');
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style-home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>
    <body>
        <h2>Creëer nieuws artikel</h2>
        <form action="" method="POST">
            Titel:<br>
            <input type="text" name="news_title">
            <br>
            Auteur:<br>
            <input type="text" name="news_author">
            <br>
            <input type="hidden" name="news_create_date" value="<?php echo date("Y.m.d"); ?>">
            Bericht:<br>
            <!-- <input type="" name="news_content"> -->
            <textarea name="news_content" rows="5" cols="21"></textarea>
            <br>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
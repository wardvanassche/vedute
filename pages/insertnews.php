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
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>Nieuwsbericht aanmaken</title>
    </head>
    <body>    
        <div class="registration-form">
            <form action="" method="post">
                <h2>Artikel aanmaken</h2>
                <div class="form-group">
                    Titel
                    <input type="text" class="form-control item" id="news_title" placeholder="Titel" name="news_title" required>
                </div>
                <div class="form-group">
                    Auteur
                    <input type="text" class="form-control item" id="news_author" placeholder="Auteur" name="news_author" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="news_create_date" value="<?php echo date("Y.m.d"); ?>">
                </div>
                <div class="form-group">
                    Bericht
                    <textarea placeholder="Typ hier je bericht" class="form-control item" name="news_content" rows="5" cols="21" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" value="submit" class="btn btn-block create-account">Aanmaken</button>
                </div>
            </form>
        </div>
    </body>
</html>
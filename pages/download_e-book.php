<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="../php/crud.php" method="post">
    <label for="title">kunstwerk naam:</label>
    <input type="text" name="title" id="title" required><br><br>

    <label for="date">date:</label>
    <input type="date" name="date" id="date" required><br><br>

    <label for="author">author:</label>
    <input type="text" name="author" id="author" required><br><br>

    <label for="description">description:</label>
    <input type="text" name="description" id="description" required><br><br>

    <label for="photo">photo:</label>
    <input type="text" name="photo" id="photo" required><br><br>

    <input type="submit" name="create" value="verzenden">
</form>
</body>
</html>


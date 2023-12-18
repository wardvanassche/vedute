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

    <label for="photo1">photo 1:</label>
    <input type="text" name="photo1" id="photo1" required><br><br>

    <label for="photo2">photo 2:</label>
    <input type="text" name="photo2" id="photo2" required><br><br>

    <label for="photo3">photo 3:</label>
    <input type="text" name="photo3" id="photo3" required><br><br>

    <input type="submit" name="create" value="verzenden">
</form>
</body>
</html>


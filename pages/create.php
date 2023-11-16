<!doctype html>
<html lang="en">
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
        <title>Vedute aanmaken</title>
    </head>
    <body>
        <div class="registration-form">
            <form action="../php/crud.php" method="post">
                <h2>Vedute aanmaken</h2>
                <div class="form-group">
                    Titel
                    <input type="text" placeholder="Kunstwerk naam" class="form-control item" name="title" id="title" required>
                </div>
                <div class="form-group">
                    Datum
                    <input type="date" class="form-control item" name="date" id="date" required>
                </div>
                <div class="form-group">
                    Auteur
                    <input type="text" placeholder="Auteur" class="form-control item" name="author" id="author" required>
                </div>
                <div class="form-group">
                    Beschrijving
                    <input type="text" placeholder="Beschrijving" class="form-control item" name="description" id="description" required>
                </div>
                <div class="form-group">
                    Foto 
                    <input type="text" placeholder="Foto URL" class="form-control item" name="photo" id="photo" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="create" value="submit" class="btn btn-block create-account">Aanmaken</button>
                </div>
            </form>
        </div>
    </body>
</html>


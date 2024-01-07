<?php

if (isset($_GET['amount'])) {
    $donatieBedrag = filter_var($_GET['amount'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
} else {
    echo "Fout: Geen donatiebedrag ontvangen.";
}

//?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Afacad&family=Oswald:wght@200;500&display=swap" rel="stylesheet">
    <title>Verwerking Donatie</title>
    <link rel="stylesheet" href="../css/style-loginsysteem.css"/>
</head>
<body>
<div class="container">
    <ul>
        <h1>
            <p>Dank voor uw donatie van € <?= $donatieBedrag ?></p>
            <br>
        </h1>
    </ul>
</div>
<?= exit;?>
</body>
</html>

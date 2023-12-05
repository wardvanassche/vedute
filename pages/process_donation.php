<?php
// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controleer of het donatiebedrag is ingesteld
    if (isset($_POST["donationAmount"])) {
        // Sanitize en valideer het donatiebedrag
        $donatieBedrag = filter_var($_POST["donationAmount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        // Voer aanvullende validatie uit indien nodig

        // Verwerk de donatie (in een real-world scenario zou je hier een betalingsgateway integreren)
        // Voor nu laten we gewoon een bedankbericht zien
    } else {
        // Behandel het geval waarin donatieBedrag niet is ingesteld
        echo "<div class='error-message'>Fout: Geen bedrag aangegeven.</div>";
    }
} else {
    // Behandel het geval waarin het formulier niet is ingediend
    echo "<div class='error-message'>Fout: Uw donatie is niet verstuurd.</div>";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwerking Donatie</title>
    <link rel="stylesheet" href="../css/Stylesheet.css"/>
</head>
<body>
<div class="container">
    <ul>
        <h1>
            <p>Dank voor uw donatie van € <?= $donatieBedrag ?></p>
            <br>
            <button><a href="index.php">Terug naar homepagina</a></button>
        </h1>
    </ul>
</div>
</body>
</html>

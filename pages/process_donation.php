<?php
// Controleer of het bedrag in de queryparameters aanwezig is
if (isset($_GET['amount'])) {
    // Haal de waarde op en desinfecteer deze indien nodig
    $donatieBedrag = filter_var($_GET['amount'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    // Gebruik $donatieBedrag zoals nodig in de rest van je code
//    echo "Ontvangen donatiebedrag: €" . htmlspecialchars($donatieBedrag);
} else {
    // Handel het geval af waarin het bedrag niet aanwezig is
    echo "Fout: Geen donatiebedrag ontvangen.";
}


//?>

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
            <p>download nu het e-book</p>

            <button class="download_button" id="downloadButton">Download e-book</button>

            <script>
                document.getElementById('downloadButton').addEventListener('click', function() {
                    // Hier plaats je de logica om het PDF-bestand te downloaden
                    downloadPDF();
                });

                function downloadPDF() {
                    // Plaats hier de code om het PDF-bestand te downloaden
                    // Bijvoorbeeld, als de PDF een directe link heeft:
                    var pdfUrl = 'e-book/test.pdf';

                    // Maak een onzichtbare link aan en simuleer een klik om het bestand te downloaden
                    var link = document.createElement('a');
                    link.href = pdfUrl;
                    link.download = 'test.pdf';
                    link.click();
                }
            </script>
            <button><a href="index.php">Terug naar homepagina</a></button>
        </h1>
    </ul>
</div>
<?= exit;?>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style-home.css">


    <title>Document</title>
</head>
<body>

<button class="download_button" id="downloadButton">Download e-book</button>
<a href="storybook.php">terug</a>

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
</body>
</html>


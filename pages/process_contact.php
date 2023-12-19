<?php
// Include the database connection code
require_once "../php/settings.php";

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate data (you can add more validation as needed)

    // Insert data into the database
    $sql = "INSERT INTO contact_form (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Dank je wel voor het contact met ons opnemen! We zullen binnenkort bij je terugkomen.";
    } else {
        $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad&family=Oswald:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-contact.css">
    <title>Contact pagina</title>
</head>


<body>

<button class="home-btn"><a href="contact.php">Terug naar home</a></button>


<section>
    <h2>Neem contact met ons op</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Onderwerp:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Bericht:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <div class="success-message-container">
        <?php
        // Display success message if set
        if (!empty($successMessage)) {
            echo '<div class="success-message">' . $successMessage . '</div>';
        }
        // Display error message if set
        if (!empty($errorMessage)) {
            echo '<div class="error-message">' . $errorMessage . '</div>';
        }
        ?>
        </div>

        <button type="submit"  class="btn btn-primary">Submit</button>

    </form>
</section>
</body>

</html>
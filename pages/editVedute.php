<?php 
    include "../php/settings.php";

    if (isset($_POST['update'])) {
        $vedute_id = $_POST['id']; 
        $title = $_POST["title"];
        $description = $_POST['description'];
        $photo = $_POST['photo'];

        $sql = "UPDATE `vedute` SET `title`='$title',`description`='$description',`photo`='$photo' WHERE `id`='$vedute_id'"; 
        $result = $conn->query($sql); 

        if ($result == TRUE) {
            echo "Vedute updated successfully.";
            header('Location: vedute.php');
        } else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 

    if (isset($_GET['id'])) {
        $vedute_id = $_GET['id']; 
        $sql = "SELECT * FROM `vedute` WHERE `id`='$vedute_id'";
        $result = $conn->query($sql); 

        if ($result->num_rows > 0) {        
            while ($row = $result->fetch_assoc()) {
                $title = $row["title"];
                $description = $row['description'];
                $photo = $row['photo'];
            } 
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wijzig vedute - <?php echo $title; ?> </title>
    </head>
    <body>
        <h2>Vedute update</h2>
        <form action="" method="post">
            Titel:
            <br>
            <input type="text" name="title" value="<?php echo $title; ?>">
            <br>
            Beschrijving:
            <br>
            <input type="text" name="description" value="<?php echo $description; ?>">
            <br>
            Foto:
            <br>
            <input type="text" name="photo" value="<?php echo $photo; ?>">
            <br>
            <input type="hidden" name="id" value="<?php echo $vedute_id; ?>">
            <br>              
            <input type="submit" value="Update" name="update">
        </form> 
    </body>
</html>


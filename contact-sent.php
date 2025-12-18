<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Atsauksme saņemta!</h2>";

        echo "<p>";
        echo "Jūsu vārds: " . $_POST["name"];
        echo "</p>";

        echo "<p>";
        echo "Jūsu e-pasts: " . $_POST["email"];
        echo "</p>";

        echo "<p>";
        echo "Atsauksme: " . $_POST["story"];
        echo "</p>";
    ?>
    <a href="contact.php">Kontaktu forma</a>
</body>
</html>

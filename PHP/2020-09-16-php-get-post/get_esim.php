<?php
    if (isset($_GET['action'])) {
        $message = 'Action is ' .$_GET['action'];
    } else {
        $message = 'No action';
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET-esimerkki</title>
</head>
<body>
    <h1>GET-esimerkki</h1>
    <a href="?">Ei toimintoa</a>
    <br>
    <a href="?id=1&action=delete">Poista</a>
    <br>
    <a href="?id=1&action=insert">Lisää</a>

    <?php
    echo "<p>$message</p>";
    ?>

 
</body>
</html>
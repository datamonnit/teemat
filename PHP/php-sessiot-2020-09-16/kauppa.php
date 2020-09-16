<?php
// Tänne pääsee vain kirjautumalla
session_start();

include_once 'my_functions.php';

checkPermission();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kauppa</title>
</head>
<body>
    <h1>Kauppa</h1>
    <p>Tervetuloa <?php echo $_SESSION['uname']; ?>!</p>
    <a href="./logout.php">Kirjaudu ulos</a>
</body>
</html>

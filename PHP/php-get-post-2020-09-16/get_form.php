<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="name">Nimi</label>
        <input type="text" name="name">
        <br>
        <label for="pwd">Salasana</label>
        <input type="password" name="password">
        <input type="submit" value="Send">
    </form>
    <?php
    if (isset($_GET['name'])){
        echo $_GET['name']; 
    }
    
    ?>
</body>
</html>
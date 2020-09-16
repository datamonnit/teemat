<?php
// Kirjautumissivu

session_start();

if (isset($_SESSION['logged_in'])) {
    header('Location: ./kauppa.php');
    die();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['uname']) && isset($_POST['pwd'])){

        if ($_POST['uname'] == 'mikki' && $_POST['pwd'] == 'hiiri') {
            $_SESSION['uname'] = 'mikki';
            $_SESSION['logged_in'] = TRUE;
            header('Location: kauppa.php');
            die();
        } else {
            
            header('Location: error.php?error_code=1');
            die();

        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kauppa</title>
</head>
<body>
    <h1>Kaupan etusivu</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="uname">Käyttäjätunnus</label>
        <input type="text" name="uname">
        <br>
        <label for="pwd">Salasana</label>
        <input type="password" name="pwd">
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
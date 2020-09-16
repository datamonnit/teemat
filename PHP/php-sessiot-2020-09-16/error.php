<?php
if (isset($_GET['error_code'])) {
    switch ($_GET['error_code']) {
        case "1":
            $message = "Salasana tai käyttäjätunnus olivat väärin";
            break;
        case "2":
            $message = "Sinulla ei ole lupaa tälle sivulle!";
            break;
        default:
            $message = "Joku muu virhe oli kyseessä";
    }
} else {
    $message = "Ei tietoa miksi sait virheen!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <p><?php echo $message; ?></p>
    <a href="./">Etusivulle</a>

</body>
</html>
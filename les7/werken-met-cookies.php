<?php
if (!isset($_COOKIE['Bezoeker'])) {
    setcookie('Bezoeker', 'Mehdi Sahri', time() + 300);
}

function getUser() {
    if (isset($_COOKIE['Bezoeker'])) {
        return ' terug ' . $_COOKIE['Bezoeker'];
    } else {
        return ' op onze website';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Werken met cookies in PHP</title>
    <link rel="icon" href="~/les7/Content/cookie.png">
</head>
<body>
<h1> Welkom <?php echo getUser();?></h1>
</body>
</html>
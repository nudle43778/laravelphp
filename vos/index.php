<?php
// Linux
setlocale(LC_ALL, 'nlb');
//Windows
//setlocale(LC_ALL, 'nld_nld');

// initialiseert de classes, implementeert de namespaces (niet van anormapart maar van composer)
include __DIR__ . '/vendor/autoload.php';
// $notice = new ModernWays\Dialog\Model\Notice();
$model = new ModernWays\Dialog\Model\NoticeBoard();
$model->setCaption('Mijn eerste notitie');
$model->setTitle('Mijn prikbord');
$model->log();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VOS back-end</title>
</head>
<body>
    <fieldset class="fieldsetBubble">
        <legend class="legendMiddle">Gegevens</legend>
        <?php
            include ('vendor/modernways/dialog/src/View/NoticeBoard.php');
        ?>
    </fieldset>
</body>
</html>
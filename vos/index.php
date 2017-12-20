<?php
    setlocale(LC_ALL, 'nlb');

    require __DIR__ . '/vendor/autoload.php';
    $uc = 'Home-LoggingIn';    
    if (isset($_REQUEST['uc'])) {
        if ($_REQUEST['uc'] == 'Home/Index') {
            $controller = new RedMind\Dialog\Controller\HomeController();
            $view = $controller->Index();
        } else if ($_REQUEST['uc'] == 'Notice/Index') {
            $controller = new RedMind\Dialog\Controller\NoticeController();
            $view = $controller->Index();
        }

    } else {
        $controller = new RedMind\Dialog\Controller\HomeController();
        $view = $controller->Index();
    }
?>

<style>
    <?php include('css/index.css');?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Red Mind Dialog</title>
</head>
<body>
    <?php $view();?>
</body>
</html>
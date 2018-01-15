<?php
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        setlocale(LC_ALL, 'nld_nld');
    }else {
        setlocale(LC_ALL, 'nlb');
    }
    
    require __DIR__ . '/vendor/autoload.php';
    // New way: reflection
    // No need for every use-case.
    function invokeActionMethod($entity,$action,$id) {
        $namespace='RedMind\Dialog';
        $controllerName="{$namespace}\\Controller\\{$entity}Controller";
        $actionMethod=new \ReflectionMethod($controllerName,$action);
        if (!class_exists($controllerName,true)) {
            return false;
        }else {
            $reflection=new \ReflectionClass($controllerName);
            $controller=$reflection->newInstance();
            return $actionMethod->invokeArgs($controller,array($id));
        }
    }
    $uc='Home/Index';
    if (isset($_REQUEST['uc'])) {
        $uc=$_REQUEST['uc'];
    }
    $route=explode('/',$uc);
    $entity=$route[0];
    $action=$route[1];
    $id=-1;// Standard parameter. Shouldn't appear in the database.
    if (isset($route[2])) {
        $id=$route[2];
    }
    $view=invokeActionMethod($entity,$action,$id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/vos/Content/Magnifier.ico">
    <style>
        <?php 
            include('css/index.css'); 
        ?>
    </style>
    <title>Red Mind Dialog</title>
</head>
<body>
<fieldset class="fieldsetBubble">
        <img src="/vos/Content/dialog.png" alt="Logo" width="162" height="142">
        <label class="labelStyling2">
            Dialog
        </label>
</fieldset>
    <br>
    <br>
    <?php $view();?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <label class="labelStyling">Made By Mehdi Sahri</label>
    </footer>
</body>
</html>
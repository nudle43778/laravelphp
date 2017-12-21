<?php
    function invokeActionMethod($entity, $action)
    {
        $namespace = "RedMind\Dialog";
        // voer de actiemethode van de controller uit
        $controllerName = "{$namespace}\\Controller\\{$entity}Controller";
        $actionMethod = new \ReflectionMethod($controllerName, $action);
        if (!class_exists($controllerName, true)) {
            return false;
        } else {
            $reflection = new \ReflectionClass($controllerName);
            $controller =  $reflection->newInstance();
            return $actionMethod->invoke($controller);
        }
    }
    
    setlocale(LC_ALL, 'nlb');
    require __DIR__ . '/vendor/autoload.php';
    $uc = 'Home/Index';
    if (isset($_REQUEST['uc'])) {
        $uc = $_REQUEST['uc'];
    }
    $route = explode('/', $uc);
    $entity = $route[0];
    $action = $route[1];
    $view = invokeActionMethod($entity, $action);

?>
<style>
    <?php include('css/index.css')?>
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
    <footer>
        
    </footer>
</body>
</html>
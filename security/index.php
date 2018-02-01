<?php
function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name 
    // info over secure en httponly https://geekflare.com/httponly-secure-cookie-apache/    
    $secure = true;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    var_dump($cookieParams);
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
    $cookieParams = session_get_cookie_params();
    var_dump($cookieParams);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
}

require __DIR__ . '/vendor/autoload.php';
// include('vendor/modernways/identity/src/ISession.php');
// include('vendor/modernways/identity/src/Session.php');
$noticeBoard = new \RedMind\Dialog\Model\NoticeBoard();
$session = new \ModernWays\Identity\Session($noticeBoard, 'Test', true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // Set session variables
    $_SESSION["favcolor"] = "red";
    $_SESSION["favanimal"] = "dog";
    
    ?>
    // <?php
        print_r($_SESSION);
    // // Echo session variables that were set on previous page
    // echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    // echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    // ?>
</body>
</html>
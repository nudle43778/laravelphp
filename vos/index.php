<?php
// Linux
setlocale(LC_ALL, 'nlb');
//Windows
//setlocale(LC_ALL, 'nld_nld');

// initialiseert de classes, implementeert de namespaces (niet van anormapart maar van composer)
include __DIR__ . '/vendor/autoload.php';
$notice = new RedMind\Dialog\Model\Notice();
$model = new RedMind\Dialog\Model\NoticeBoard();
$model->setTitle('Mijn prikbord');
$notice->setStart(date('Y-m-d H:i:s'));
$notice->setSubject('Mijn eerste notitie');
$notice->setCode('Je onthoudt me toch niet.');
$notice->setMessage('Voor het eerst gebruikt in Red Mind');
$notice->setEnd( date('Y-m-d H:i:s'));
$model->pin($notice); 


?>

<style>
    <?php include ('css/index.css');?>
</style>
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
            //var_dump($model);
            include ('vendor/redmind/dialog/src/View/NoticeBoard.php');
        ?>
    </fieldset>
    <a href="notice/insert">Inserten</a>
    <a href="notice/update">Updaten</a>
    <a href="notice/delete">Deleten</a>
    <a href="notice/selectOne">Een selecteren</a>
    <a href="notice/selectAll">Allemaal selecteren</a>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <button class="buttonStyle" name="uc" type="submit" value="notice/insert">Inserten</button>
    <button class="buttonStyle" name="uc" type="submit" value="notice/update">Updaten</button>
    <button class="buttonStyle" name="uc" type="submit" value="notice/delete">Deleten</button>
    <button class="buttonStyle" name="uc" type="submit" value="notice/selectOne">Een selecteren</button>
    <button class="buttonStyle" name="uc" type="submit" value="notice/selectAll">Allemaal selecteren</button>
    </form>
    
    <pre>
        <?php var_dump($_SERVER); ?>
    </pre>
</body>
</html>
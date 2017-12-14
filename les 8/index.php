<style>
<?php include ('css/index.css') ?>
</style>
<?php
include ('Model/Person.php');
include ('Model/INotice.php');
include ('Model/Notice.php');
include ('Model/INoticeBoard.php');
include ('Model/NoticeBoard.php');
$notice = new ModernWays\Dialog\Model\Notice();
$model = new ModernWays\Dialog\Model\NoticeBoard();
$model->setTitle('Modern Ways Prikbord');
$person = new Person();
if (isset($_POST['FirstName']) && isset($_POST['LastName'])) {
    $notice->setStart(date('Y-m-d H:i:s'));
    $person->setVoornaam($_POST['FirstName']);
    $person->setFamilienaam($_POST['LastName']);
    $person->voegToeAanDeLijst($person);
    $notice->setMessage("Naam: {$_POST['FirstName']} {$_POST['LastName']}");
    $notice->setCode('Je onthoudt me toch niet.');
    $notice->setSubject('Nieuwe persoon toegevoegd');
    $notice->setEnd( date('Y-m-d H:i:s'));
    $model->pin($notice);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leren werken met klassen in PHP</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset class="fieldsetBubble">
        <legend class="legendMiddle">Gegevens</legend>
    <div class>
        <label for="firstName">Voornaam</label>
        <input type="text" id="FirstName" name="FirstName" value="<?php echo $person->getVoornaam();?>">
    </div>
    <div class>
        <label for="LastName">Familienaam</label>
        <input type="text" id="LastName" name="LastName" value="<?php echo $person->getFamilienaam();?>">
    </div>
    </fieldset>
    <br>
    <br>
    <button class="buttonStyle" type="submit" value="register" name="action">Verzenden</button>
</form>
<aside>
    <?php
    foreach ($person->getLijst() as $item) {
        echo $item->getVoornaam(), ' ', $item->getFamilieNaam(), '<br>';
    }
    ?>
</aside>
<?php
include('View/NoticeBoard.php');
?>
</body>
</html>
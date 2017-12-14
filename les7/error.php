<?php
function checkPositiveInteger($number) {
    if ($number < 0) {
        throw new Exception('Getal moet groter zijn dan 0');
    }
}

function checkInteger($number) {
    if (filter_var($number, FILTER_VALIDATE_INT) == false) {
        throw new Exception('Je moet een geheel getal intypen');
    }
}

if (isset($_POST['getal'])) {
    try{
    checkInteger($_POST['getal']);
    checkPositiveInteger($_POST['getal']);
    }
    catch(Exception $e){
        echo $e->getMessage;
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foutafhandeling in PHP</title>
    <link rel="icon" href="~/les7/Content/error.png">
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div>
        <label for="getal">Voer een positief getal in </label>
        <input id="getal" name="getal" type="text"/>
    </div>
    <button name='uc' type="submit">Verzenden</button>
</form>
</body>
</html>
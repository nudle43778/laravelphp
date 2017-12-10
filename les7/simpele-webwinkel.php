<?php
if (isset($_COOKIE['Producten'])){
    $product = $_COOKIE['Producten'];
    $nogEenProduct = $product.", ".$_POST['Product'];
    setcookie('Producten', $nogEenProduct, time() + (60 * 60 * 24 * 7));
}else{
    $eersteProduct = $_POST['Product'];
    setcookie('Producten', $eersteProduct, time() + (60 * 60 * 24 * 7));
}

$cart = var_dump($_COOKIE['Producten']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Webwinkel</h1>
<form action="simpele-webwinkel.php" method="post">
    <fieldset>
        <legend>Product</legend>
        <select name="Product" id="Product">
            <option value="Boek">Boek</option>
            <option value="Computer">Computer</option>
            <option value="Boterham">Boterham</option>
            <option value="Gsm">Gsm</option>
        </select>
    </fieldset>
    <button type="submit">Leg in winkelmandje</button>
</form>
<div class="box"> </div>
<?php



?>
</body>
</html>



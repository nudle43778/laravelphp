<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les 3 - Hello World</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php
        $getal = 100;
        echo 'Je hebt €' . $getal;
        echo "<br>Je hebt € {$getal}";
        $nogEenGetal = '100';
        if ($getal === $nogEenGetal) {
            echo '<br>$getal heeft dezelde waarde als $nogEenGetal';
        }
        $voornaam = 'Jan';
        $naam .= 'Janssens';
        echo "<br>Je naam is $naam";
        
        $colors = array("red", "green", "blue", "yellow"); 
        echo '<br>Kleuren in de array';
        foreach ($colors as $item) {
            echo "<br>kleur: $item";
        }
        
        function total($lijst) {
            $total = 0;
            foreach ($lijst as $item) {
                $total += $item;
            }
            return $total;
        }
        
        $getallen = array(1, 2, 3, 4, 5);
        $total = total($getallen);
        echo "<br>Het totaal van de getallen is {$total}";
    ?>
</body>
</html>
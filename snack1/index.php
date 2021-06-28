<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php  
$partite = [
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "puntiCasa" => 55,
        "puntiOspite" => 60
    ],
    [
        "casa" => "Milano",
        "ospite" => "Cremona",
        "puntiCasa" => 74,
        "puntiOspite" => 66
    ],
    [
        "casa" => "Trieste",
        "ospite" => "Bologna",
        "puntiCasa" => 88,
        "puntiOspite" => 82
    ],
    [
        "casa" => "Reggio Emilia",
        "ospite" => "Venezia",
        "puntiCasa" => 65,
        "puntiOspite" => 71
    ],
    [
        "casa" => "Brindisi",
        "ospite" => "Varese",
        "puntiCasa" => 108,
        "puntiOspite" => 84
    ]
]; 

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack #1</title>
</head>
<body>
        <?php
            for ($i = 0; $i < count($partite); $i++) {
                echo "<p>".$partite[$i]["casa"]." - ".$partite[$i]["ospite"]." | ".$partite[$i]["puntiCasa"]."-".$partite[$i]["puntiOspite"]."</p>";
            }
        ?>
    
</body>
</html>
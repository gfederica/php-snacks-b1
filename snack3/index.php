<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php
$array = [];

while (count($array) < 15) {
    $number = rand(1, 100);
    if (!in_array($number, $array)) {
    $array[] = $number;
    }
    $i++;
};

var_dump($array);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
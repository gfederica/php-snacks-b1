<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = intval($_GET["age"]);
// se l'input è una stringa, intval restituirà 0 che viene interpretato come un numero dalla condizione "is_int"
// quindi occorre aggiungere un'altra condizione




if (strlen($name) > 3 && strpos($mail, ".") !== false && strpos($mail, "@") !== false && is_int($age) && $age > 0) {
    echo "Accesso Riuscito";
} else {
    echo "Accesso negato";
};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack #2 </title>
</head>
<body>
    
</body>
</html>
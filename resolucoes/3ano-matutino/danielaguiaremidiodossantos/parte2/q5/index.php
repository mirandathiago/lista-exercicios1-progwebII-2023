<?php

$numero = $_GET['number'];

if($numero % 2 == 1)
 echo "$numero é ímpar";
else
 echo "$numero é par";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">

    <title>formulario</title>

</head>
<body>

<form action="index.php" method="get">
<h1>sorteio do número par ou impar</h1> 

    <br><input type="number" name= "number"></br>
    <br><input type="submit" name="number" value="0 a 10" ></br>
 
        <button>jogar</button>

 </form> 
 
</body>
</html>
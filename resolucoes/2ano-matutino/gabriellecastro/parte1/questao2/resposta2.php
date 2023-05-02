<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>CALCULAR</title>
</head>

<body>

    <?php
    $n1 = $_POST["num1"] ?? 0;
   
   
   
    $multiplicacao =  $n1 * 2;
    $divisao = $n1 / 2;
    $resto = $n1 % 2;
    ?>

   
    <h2>O resultado da multiplicação é: <?=$multiplicacao?></h2>
    <h2>O resultado da divisão é: <?=$divisao?></h2>
    <h2>O resto da divisão é: <?=$resto?></h2>
</body>

</html>
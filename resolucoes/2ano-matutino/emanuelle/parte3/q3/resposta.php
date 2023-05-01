<!--3- João deseja saber quantos números pares existem em um intervalo. 
Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e,
utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:Quantidade de números pares: 6-->

<?php
    $num1 = $_POST["num1"] ;
    $num2 = $_POST["num2"] ;
   $quant = 0;

    for($i = $num1; $i <= $num2; $i++){
        if($i %2 ==0){
        $quant++;
        }
    }


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Intervalo</title>
</head>

<body>
   
    <h2>A quantidade de números pares é: <?=$quant?> </h2>
    
</body>

</html>
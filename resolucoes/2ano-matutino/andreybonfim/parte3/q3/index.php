<?php
 /*
   3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao 
   usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, 
   calcule a quantidade de números pares nesse intervalo.
*/

    $inicio = $_POST["inicio"] ?? 0;
    $final = $_POST["final"] ?? 0;
    $i ?? 0;
    $soma = 0 ?? 0;

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares</title>
</head>
<body>
    
    <form action="index.php"  method="post">  
        <label> Diga o início:
            <input type="number" name="inicio">
        </label>
        <br>
        <label> Diga o final:
            <input type="number" name="final">
        </label>
        <br>
        <button>Enviar</button>
        <br>
        <br>
        <?php

        for($i = $inicio; $i < $final; $i++){
            if($i % 2 == 0){
                $soma++;
            }
        }
        echo "A quantidade de números pares é de {$soma}.";
        ?>
    </form>
    
</body>
</html>
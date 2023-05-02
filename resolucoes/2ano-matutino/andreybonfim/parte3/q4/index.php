<?php
 /*
   4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. 
   Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
*/

    $num = $_POST["num"] ?? 0;
    $i;
    $soma = 0;

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma entre o Intervalo</title>
</head>
<body>
    
    <form action="index.php"  method="post">  
        <label> Diga o número:
            <input type="number" name="num">
        </label>
        <br>
        <button>Enviar</button>
        <br>
        <br>
        <?php

        for($i = 0; $i <= $num; $i++){
            $soma = $soma + $i;
        }
        echo "A soma entre eles é de: {$soma}.";
        ?>
    </form>
    
</body>
</html>
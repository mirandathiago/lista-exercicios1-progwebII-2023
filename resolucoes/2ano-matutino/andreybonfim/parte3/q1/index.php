<?php
 /*
   1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. 
   Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 
    O fatorial é representado por:
    n! = n x (n – 1) x (n – 2) x (n – 3)!
*/

    $num = $_POST["fatorial"] ?? 0;
    $i;
    $fatorial = 1;

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    
    <form action="index.php"  method="post">  
        <label> Diga o número fatorial:
            <input type="number" name="fatorial">
        </label>
        <br>
        <button>Enviar</button>
        <br>
        <br>
        <?php

        for($i = 1; $i <= $num; $i++){
        $fatorial = $fatorial *$i;
        }

        echo "O fatorial de {$num} é {$fatorial}.";
        ?>
    </form>
    
</body>
</html>
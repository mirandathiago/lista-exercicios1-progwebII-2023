<?php
 /*
    6- Desenvolva um formulário em PHP que permita ao usuário inserir os valores dos três lados de um triângulo. O programa deve verificar se é possível formar um triângulo 
    com os valores informados e, caso seja possível, indicar o tipo de triângulo formado.

    Para que seja possível formar um triângulo, a soma dos dois lados menores deve ser maior que o lado maior. Caso contrário, não é possível formar um triângulo.
    Após a verificação, o programa deve indicar o tipo de triângulo formado, baseado nos valores informados, utilizando a seguinte lógica:
    Equilátero: triângulo com três lados iguais;
    Isósceles: triângulo com dois lados iguais;
    Escaleno: triângulo com todos os lados diferentes.
*/

    $lado1 = $_POST["lado1"] ?? 0;
    $lado2 = $_POST["lado2"] ?? 0;
    $lado3 = $_POST["lado3"] ?? 0;


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulos</title>
</head>
<body>
    
    <form action="index.php"  method="post">  
        <label> Insira o lado 1:
            <input type="number" name="lado1">
        </label>
        <br>
        <label> Insira o lado 2:
            <input type="number" name="lado2">
        </label>
        <br>
        <label> Insira o lado 3:
            <input type="number" name="lado3">
        </label>
        <br>
        <button>Enviar</button>
        <br>
        <br>
        <?php

        if($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1){
            echo "Os 3 lados formam um triangulo.";
            if($lado1 == $lado2 && $lado1 == $lado3){
            echo " É um triângulo equilátero!";
            }else if($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
            echo " É um triângulo isósceles!";
            }else{
            echo " É um triângulo escaleno!";
        }
        }else{
        echo "Não é possível formar um triângulo.";
        }

        ?>
    </form>
    
</body>
</html>
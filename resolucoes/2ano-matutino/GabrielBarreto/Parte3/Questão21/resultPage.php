<!--1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 
O fatorial é representado por:
n! = n x (n – 1) x (n – 2) x (n – 3)!
Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura condicional para verificar esta situação.
Entrada: 3
Saída: 6 
-> Cálculo realizado: 3 x 2 x 1

-->
<?php

$numero = $_GET['numero'] ?? 2;
$fatorial = 1;
if ($numero == " ") {
    $numero = "Fatorial não informado";
} else if($numero <= 170) {
    
    for ($i = $numero; $i >= 1; $i--) {
        $fatorial *= $i;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto com um desconto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <?php
        if($numero > 170){
            $fatorial = "Infinito";
        }
        ?>
        <h1>!<?= $numero ?> = <?= $fatorial ?></h1>
        <p>O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1.</p>
        <br>
        <div>
            <?php
           
        if($numero > 170){
            echo "Area de Calculo:<br> Infinito. Número grande de mais para calculo";
            $fatorial = "Infinito";
        }else if($numero == 0){
            echo "O fatorial de 0 (segundo as leis matemáticas) = ".$fatorial;
            
        }else{
            echo "Area de Calculo:<br>";
            for ($i = $numero; $i >= 1; $i--) {
                if($i >1){
                    echo "{$i} X ";
                }else if($i == 1){
                    echo "{$i}";
                }
            }
            echo " = ".$fatorial;
        }
            ?>
        </div>
       
        <script src = "script.js">   
        </script>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../../Parte3/Questão22/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
</body>

</html>
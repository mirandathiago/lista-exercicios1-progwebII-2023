<?php
/*
1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores 
até chegar ao número 1. Desenvolva um programa que receba como entrada através de um formulário um número
inteiro e calcule o seu fatorial utilizando o comando FOR. 
O fatorial é representado por:
n! = n x (n – 1) x (n – 2) x (n – 3)!
Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura condicional para verificar esta situação.
Entrada: 3
Saída: 6 
->Cálculo realizado: 3 x 2 x 1
*/
    $n1 = $_POST["numero 1"];
    $n2 = $_POST["numero 2"];
    $n3 = $_POST["numero 3"];

    if ($n1 <= $n2 && $n1 <= $n3) {
        $menor = $n1;
      }else if ($n2 <= $n1 && $n2 <= $n3) {
        $menor = $n2;
      }else{
        $menor = $n3;
      }
    
    
    if ($n1 >= $n2 && $n1 >= $n3) {
        $maior = $n1;
      }else if ($n2 >= $n1 && $n2 >= $n3) {
        $maior = $n2;
      }else{
        $maior = $n3;
      }
        
?>
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h2>Maior e menor número</h1>
    </header>
    <div class="container">
        <div class="box Lista">
            <h2>Entre em contato </h2>
            <form action="index.php" method="post">
                <label>Digite o primeiro número:
                    <input type="number" id="numero1" name="numero1" required>
                </label>
                <label>Digite o segundo número:
                    <input type ="number" id="numero2" name="numero2" required> 
                </label>
                <label>Digite o terceiro número:
                    <input type ="number" id="numero3" name="numero3" required> 
                </label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>      
    </div>
</body>
</html>
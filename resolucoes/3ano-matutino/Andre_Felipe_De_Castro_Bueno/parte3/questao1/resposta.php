<?php 
/* 
1- O fatorial de um número é calculado pela multiplicação desse
número por todos os seus antecessores até chegar ao número 1.
Desenvolva um programa que receba como entrada através de um
formulário um número inteiro e calcule o seu fatorial utilizando o
comando FOR.
O fatorial é representado por:
n! = n x (n – 1) x (n – 2) x (n – 3)!
Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura
condicional para verificar esta situação.
Entrada: 3
Saída: 6
-> Cálculo realizado: 3 x 2 x 1
*/
//CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO;

$num = $_POST["num"] ?? 0;
$fatorial = 1;
for($i = 1; $i <= $num; $i++) {
    $fatorial *= $i;
}
$msg = "O fatorial de {$num} é: {$fatorial}";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
       <h1><?= $msg ?></h1>
    </div>
</body>
</html>
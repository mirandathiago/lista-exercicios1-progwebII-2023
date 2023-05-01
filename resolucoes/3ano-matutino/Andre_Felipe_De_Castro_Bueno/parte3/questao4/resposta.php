<?php
/* 
4- Joãozinho está estudando matemática e precisa saber qual é o
resultado da soma dos números de 1 a N. Crie um formulário que
permita ao usuário informar um número inteiro N e, utilizando um
laço de repetição do tipo for, calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5
Exemplo de saída: Soma dos números de 1 a 5: 15
*/
$num1 = $_POST["num1"] ?? 1;
$num2 = $_POST["num2"] ?? 0;
$soma = 0;
for($i = $num1; $i <= $num2; $i++) {
    if($num1 < $num2){
         $soma += $i;
    }
}
$msg = "A soma dos números de {$num1} a {$num2} é {$soma}";
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
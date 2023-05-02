<?php 
/* 
3- João deseja saber quantos números pares existem em um intervalo.
Crie um formulário que permita ao usuário informar os dois números
que delimitam o intervalo e, utilizando um laço de repetição do tipo
for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6

//CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO;

*/
$num1 = $_POST["num1"] ?? 0;
$num2 = $_POST["num2"] ?? 0;
$pares = 0;
for($i = $num1; $i <= $num2; $i++) {
    if($i % 2 == 0){
        $pares++;
    }
}
$msg = "A quantidade de números pares no intervalo de {$num1} a {$num2} é {$pares}";

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
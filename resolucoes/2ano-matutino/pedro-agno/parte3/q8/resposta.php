<?php
/*8- O Instituto Nacional de Estatística precisa de um programa que calcule em quantos anos a população de uma
cidade A irá ultrapassar a população de uma cidade B, considerando suas respectivas taxas de crescimento. 
O programa deve solicitar ao usuário o número atual de habitantes e a taxa anual de crescimento de cada cidade
 através de um formulário. Caso a população de A já seja maior do que a população de B, o programa deve 
 informar que a cidade A já tem mais habitantes do que a cidade B e encerrar. Já se a taxa de crescimento
  de A for menor do que a taxa de crescimento de B, o programa deve informar que a cidade A não alcançará o
   número de habitantes da cidade B com essa taxa de crescimento.

O programa deve exibir o número de anos necessários para que a população de A ultrapasse a população de B e
também a população de cada cidade ao final desse período. O usuário deverá informar os valores através de um
 formulário e a solução deve utilizar alguma estrutura de repetição para realizar os cálculos necessários.
Entrada: número de habitantes da cidade A: 80000, taxa anual de crescimento da cidade A (%): 3, número de
habitantes da cidade B: 200000, taxa anual de crescimento da cidade B (%): 1.5*/

$num1 = $_POST["numerohabitantesA"];
$taxa1 = $_POST["taxaA"];

$num2 = $_POST["numerohabitantesB"];
$taxa2 = $_POST["taxaB"];

$taxa1 = $taxa1/100;
$taxa2 = $taxa2/100;
$anos = 0;
$msg = "";

if ($num1 >= $num2) {
    $msg = "O número de habitantes da cidade A já é maior ou igual ao da cidade B.";
} elseif ($taxa1 < $taxa2) {
    $msg = "Cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.";
} else {

while($num1 < $num2){
	$num1 += $num1 * $taxa1;
	$num2 += $num2 * $taxa2;
	$anos++;
}
$msg = "foram necessários {$anos} anos para a população da cidade A ser maior que a cidade B";
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde"><?php echo "{$msg}" ?></p>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
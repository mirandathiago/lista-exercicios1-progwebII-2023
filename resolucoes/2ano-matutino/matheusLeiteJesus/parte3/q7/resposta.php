<!--Um caixa eletrônico precisa calcular a quantidade mínima de cédulas necessárias para entregar um determinado valor solicitado pelo cliente. Crie um programa que receba um valor inteiro de um formulário e calcule o menor número de notas possíveis para decompor o valor informado. Considere que as notas disponíveis são de R$100, R$50, R$20, R$10, R$5, R$2 e R$1. Ao final, mostre o valor lido e a quantidade de cada tipo de nota necessária para completar o valor. 
Exemplo de entrada: 254
Exemplo de saída:
Valor informado: R$ 254
2 nota(s) de R$100
1 nota(s) de R$50
0 nota(s) de R$20
0 nota(s) de R$10
0 nota(s) de R$5
2 nota(s) de R$2
0 nota(s) de R$1

Dica: Utilize um comando de repetição para verificar a quantidade de cada nota necessária para decompor o valor informado, e vá subtraindo esse valor do valor total até que ele seja zerado. Lembre-se de utilizar um contador para representar a quantidade de notas de cada cédula. Isso pode ser feito utilizando variáveis separadas para cada cédula. Será necessário utilizar uma estrutura condicional para determinar qual variável deve ser incrementada em cada iteração da repetição.



-->

<?php
	$dinheiro = 0;
	$cem = 0;
	$cinq = 0;
	$vinte = 0;
	$dez = 0;
	$cinco = 0;
	$dois = 0;
	$um = 0;

	$dinheiro = $_GET["dinheiro"] ?? 0;

	while ($dinheiro>=100) {
		$cem += 1;
		$dinheiro -= 100;
	}
	while($dinheiro>=50){
		$cinq += 1;
		$dinheiro -= 50;
	}
	while ($dinheiro >= 20) {
		$vinte += 1;
		$dinheiro -= 20;
	}
	while ($dinheiro >= 10) {
		$dez += 1;
		$dinheiro -= 100;
	}
	while ($dinheiro >= 5) {
		$cinco += 1;
		$dinheiro -= 5;
	}
	while($dinheiro >= 2){
		$dois += 1;
		$dinheiro -= 2;
	}
	while ($dinheiro >= 1) {
		$um += 1;
		$dinheiro -= 1;
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
		<h1>Formulário Caixa Eletrônico</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<!-- <p>A resposta será exibida aqui.</p> -->
			<!-- <p class="alerta-vermelho">Mensagem de alerta aqui</p> -->
			<p class="alerta-verde"><?=$cem?> nota(s) de R$100<br><?=$cinq?> nota(s) de R$50<br><?=$vinte?> nota(s) de R$20<br><?=$dez?> nota(s) de R$10<br><?=$cinco?> nota(s) de R$5<br><?=$dois?> nota(s) de R$2<br><?=$um?> nota(s) de R$1</p>
			<!-- <p class="alerta-amarelo">Mensagem de alerta aqui</p> -->
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
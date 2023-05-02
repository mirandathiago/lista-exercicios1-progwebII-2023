<!--O Instituto Nacional de Estatística precisa de um programa que calcule em quantos anos a população de uma cidade A irá ultrapassar a população de uma cidade B, considerando suas respectivas taxas de crescimento. O programa deve solicitar ao usuário o número atual de habitantes e a taxa anual de crescimento de cada cidade através de um formulário. Caso a população de A já seja maior do que a população de B, o programa deve informar que a cidade A já tem mais habitantes do que a cidade B e encerrar. Já se a taxa de crescimento de A for menor do que a taxa de crescimento de B, o programa deve informar que a cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.

O programa deve exibir o número de anos necessários para que a população de A ultrapasse a população de B e também a população de cada cidade ao final desse período. O usuário deverá informar os valores através de um formulário e a solução deve utilizar alguma estrutura de repetição para realizar os cálculos necessários.
Entrada: número de habitantes da cidade A: 80000, taxa anual de crescimento da cidade A (%): 3, número de habitantes da cidade B: 200000, taxa anual de crescimento da cidade B (%): 1.5
Saída: Serão necessários 63 anos para que a população da cidade A ultrapasse a da cidade B.
-->

<?php
	//Inicializando variáveis:
	$popa = 0;
	$popb = 0;
	$cresca = 0;
	$crescb = 0;
	$taxacida = 0;
	$taxacidb = 0;
	$anos = 0;
	$msng = "";

	//Cidade A:
	$popa = $_GET["popa"] ?? 50000;
	$cresca = $_GET["cresca"] ?? 5;

	//Cidade B:
	$popb = $_GET["popb"] ?? 80000;
	$crescb = $_GET["crescb"] ?? 3;

	//Convertendo valores:
	$taxacida = $cresca/100;
	$taxacidb = $crescb/100;

	if ($popa > $popb) {
		$msng = "População da cidade A já é maior que a da cidade B.";
	}else{
		do {
			$popa += $popa * $taxacida;
			$popb += $popb * $taxacidb;
			$anos += 1;
		} while ($popb > $popa);

		$msng = "População da cidade A superou a da cidade B em";
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
		<h1>Formulário de Crescimento Populacional</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<!-- <p>A resposta será exibida aqui.</p> -->
			<!-- <p class="alerta-vermelho">Mensagem de alerta aqui</p> -->
			<p class="alerta-verde"><?=$msng?> <?=$anos?> anos, população da cidade A = <?=round($popa,2)?>, população da cidade B = <?=round($popb,2)?>.</p>
			<!-- <p class="alerta-amarelo">Mensagem de alerta aqui</p> -->
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
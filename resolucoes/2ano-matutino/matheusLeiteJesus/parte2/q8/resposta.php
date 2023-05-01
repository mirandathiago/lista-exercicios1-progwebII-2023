<?php

	$nome = $_GET["nome"] ?? "";
	$peso = $_GET["peso"] ?? 50;
	$altura = $_GET["altura"] ?? 170;

	$IMC = $peso / ($altura*$altura);

	if ($IMC<18.5) {
		$msgn = "abaixo do peso";
	}elseif ($IMC>=18.5 && $IMC<=24.9) {
		$msgn = "peso normal";
	}elseif ($IMC>=25 && $IMC<=29.9) {
		$msgn = "sobrepeso";
	}elseif ($IMC>=30 && $IMC<=34.9) {
		$msgn = "obesidade grau 1";
	}elseif($IMC>=35 && $IMC<=39.9){
		$msgn = "obesidade grau 2";
	}else{
		$msgn = "obesidade grau 3";
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
		<h1>Formulário de Índice de Massa Corporal(IMC)</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<!-- <p>A resposta será exibida aqui.</p> -->
			<!-- <p class="alerta-vermelho">Mensagem de alerta aqui</p> -->
			<p class="alerta-verde">O seu IMC é de <?=round($IMC,2)?> e sua classificação é <?=$msgn?>.</p>
			<!-- <p class="alerta-amarelo">Mensagem de alerta aqui</p> -->
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
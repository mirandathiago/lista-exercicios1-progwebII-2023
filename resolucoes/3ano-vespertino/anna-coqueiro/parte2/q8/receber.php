<?php
	$peso=$_POST["peso"];
	$altura=$_POST["altura"];

	$altura2=$altura*$altura;
	$imc= ($peso)/($altura2);

	if($imc <= 18.5){
		$situacao="Abaixo do peso";
	}else if($imc > 18.5 && $imc <= 24.9){
		$situacao="Peso normal";
	}else if($imc >= 25 && $imc <= 29.9){
		$situacao="Sobrepeso";
	}else if($imc >= 30 && $imc <= 34.9){
		$situacao="Obesidade grau 1";
	}else if($imc >= 35 && $imc <= 39.9){
		$situacao="Obesidade grau 2";
	}else if($imc >= 40){
		$situacao="Obesidade grau 3";
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
		<h1>Calculadora de IMC</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Seu IMC é <?=number_format($imc,1)?></p>
			<p class="alerta-amarelo">Você está na faixa de <?=$situacao?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
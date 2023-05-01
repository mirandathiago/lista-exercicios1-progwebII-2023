<?php
	$alt = $_POST["alt"];
	$peso = $_POST["peso"];

	$IMC = $peso / pow($alt,2);

	if($IMC < 18.5){
		$mensagem = "Abaixo do peso";
	}if($IMC >= 18.5 && $IMC < 24.9){
		$mensagem = "Peso normal";
	}if($IMC >= 25 && $IMC < 29.9){
		$mensagem = "Sobrepeso";
	}if($IMC >= 30 && $IMC < 34.9){
		$mensagem = "Obesidade Grau 1";
		$classe = "alerta-verde";
	}if($IMC >= 35 && $IMC < 39.9){
		$mensagem = "Obesidade Grau 2";
		$classe = "alerta-amarelo";
	}if($IMC >= 40){
		$mensagem = "Obesidade Grau 3";
		$classe = "alerta-vermelho";
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
		<h1>Formulário de IMC</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Indice de Massa Corporal</h2>
			<p class = "<?=$classe?>"><?=$mensagem?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
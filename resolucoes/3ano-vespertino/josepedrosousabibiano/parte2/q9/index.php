<?php
	$clima = $_GET["clima"] ?? "";

	switch($clima){
		case 1:
			$mensagem = "Com o clima ensolarado, recomendamos ir ao Clube!";
			break;
		case 2:
			$mensagem = "Com o clima ameno, recomendamos ir ao Parque!";
			break;
		case 3:
			$mensagem = "Com o clima chuvoso, recomendamos ir ao Cinema!";
			break;
		case 4:
			$mensagem = "Com o clima nublado, recomendamos ir ao Museu!";
			break;
		case 5:
			$mensagem = "Com o clima tempestuoso, recomendamos ficar em Casa!";
			break;
		default:
			$mensagem = "Recomendamos você selecionar uma opção de clima!";
			break;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 9</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Para onde vou?</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Clima</h2>
			<br>
			<form action="index.php" method="get">
			<label>Selecione o clima atual:</label>
			<select name="clima">
				<option value="">Escolha um clima</option>
				<option value="1">Ensolarado</option>
				<option value="2">Ameno</option>
				<option value="3">Chuvoso</option>
				<option value="4">Nublado</option>
				<option value="5">Tempestuoso</option>
			</select>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sugestão</h2>
			<br>
			<p class="alerta-verde"><?=$mensagem?></p>
		</div>
	</div>
</body>
</html>
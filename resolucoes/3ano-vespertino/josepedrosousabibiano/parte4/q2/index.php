<?php
	$texto = $_GET["nomes"] ?? "";
	$nomes = explode("\n", $texto);

	$sort = rand(0, (count($nomes) - 1));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sorteador de Nomes</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Sorteio</h2>
			<form action="index.php" method="get">
				<label>Insira os nomes (por linha):
					<textarea id="mensagem" name="nomes" required></textarea>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<br>
			<p>A pessoa sorteada foi... </p>
			<p class="alerta-vermelho"><?=$nomes[$sort]?></p>
		</div>
	</div>
</body>
</html>
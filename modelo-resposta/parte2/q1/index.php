<?php
	$n1 = $_GET["n1"];
	$n2 = $_GET["n2"];
	$n3 = $_GET["n3"];

	if($n1 > $n2)
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Comparação de Valores</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Números</h2>
			<form action="index.php" method="get">
				<label>Número 1:
					<input type="number" id="nome" name="n1" required>
				</label>

				<label>Número 2:
					<input type="number" id="nome" name="n2" required>
				</label>

				<label>Número 3:
					<input type="number" id="nome" name="n3" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Maior Número:</p>
			<p class="alerta-vermelho">Mensagem de alerta aqui</p>
			<p>Menor Número:</p>
			<p class="alerta-verde">Mensagem de alerta aqui</p>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
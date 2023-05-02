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
		<h1> Calculando o preço com Desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculando com 10% de desconto</h2>



	<form action="index.php" method= "get">

				<label>Preço Original do Produto:
					<input type="number" id="number" name="valor" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Preço com desconto:</h2>

		<?php

		$valor = $_GET["valor"]??50;
		$desconto = $valor *0.1; 
		$valoratual = $valor - $desconto;


		echo "<p> O valor de {$valor}R$ com desconto de 10% fica: {$valoratual}R$</p>"
		?>



		</div>
	</div>
</body>
</html>
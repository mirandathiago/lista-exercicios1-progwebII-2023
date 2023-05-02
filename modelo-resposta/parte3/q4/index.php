<?php $n = $_POST["n"] ?? 1; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Soma de 1 a N</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Número</h2>
			<br>
			<form action="index.php" method="post">
			<label>Insira um número:
				<input type="number" id="nome" name="n" min=1 required>
			</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Soma dos números inteiros de 1 a <?=$n?></h2>
			<br>
			<p class="alerta-verde">

				<?php
					$soma = 0;

					for($i = 1; $i <= $n; $i++){
						$soma += $i;
					}

					echo $soma;
				?>

			</p>
		</div>
	</div>
</body>
</html>
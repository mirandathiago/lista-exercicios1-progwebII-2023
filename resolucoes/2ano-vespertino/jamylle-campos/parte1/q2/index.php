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
		<h1>Dobro e metade de um número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira abaixo</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input type="number" id="num" name="num" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$num=$_POST["num"] ?? 0;
				$dobro=2*$num;
				$metade=$num/2;
				echo "Dobro: ".$dobro." Metade: ".$metade. " .";

			?>
			
		</div>
	</div>
</body>
</html>
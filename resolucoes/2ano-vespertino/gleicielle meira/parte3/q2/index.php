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
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira o número:</h2>
			<form action="index.php" method="post">
				<label>Numero:
					<input type="number" id="numero" name="numero" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$numero = $_POST["numero"] ?? 0;

				if($_SERVER["REQUEST_METHOD"] == "POST"){

					echo "<h3>Tabuada do número $numero:<br></h3>";

					$i = 1;
					while ($i <= 10) {
						$resultado = $numero * $i;
						echo "<p class='alerta-verde'>{$numero} x {$i} = {$resultado}<br></p>";
						$i++;
					}
				}

			?>

		</div>
	</div>
</body>
</html>
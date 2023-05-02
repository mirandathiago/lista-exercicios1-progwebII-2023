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
		<h1>Calculo de fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite um número inteiro:</h2>
			<form action = "index.php" method = "post">
				<label>Numero:
					<input type="number" id="numero" name="numero" required>
				</label>
				<button name="enviar"> CALCULAR FATORIAL </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

        $numero = $_POST ["numero"] ?? 0;
		$fatorial = 1;

		echo "<p class = 'alerta-verde'>{$numero}! = ";

		for($numero; $numero >=1; $numero--){

			echo $numero;

			if ($numero > 1) {
				echo " x ";
			} else {
				echo " = ";
			}
			
			$fatorial *= $numero;

		}

		echo "{$fatorial}</p>";
}

			?>
		</div>
	</div>
</body>
</html>
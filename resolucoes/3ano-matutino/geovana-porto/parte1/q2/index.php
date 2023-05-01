<?php

	$numero = $_POST["numero"] ?? 0;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$dobro = $numero * 2;
	$metade = $numero / 2;
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
		<h1>Formulário números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dobro e metade do número</h2>
			<form action= "index.php" method = "post">
				<label>Número:
					<input type="number" name="numero" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			echo "Dobro: $dobro  e Metade:   $metade";
			}
?>
		</div>
	</div>
</body>
</html>
<?php


$nota1 = $_POST["nota1"]?? 0;
$nota2 = $_POST["nota2"]?? 0;
$nota3 = $_POST["nota3"]?? 0;


$nota1 = $nota1 * 2;
$nota2 = $nota2 * 3;
$nota3 = $nota3 * 5;




$mediafinal = ($nota1 + $nota2 + $nota3) / 10;



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
		<h1>Formulário de notas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Notas de provas</h2>
			<form action = "index.php" method = "post">

				<label>Nota 1:
				<input type="number" id="nota1" name="nota1" step="0.1" required>
				</label>

				<label>Nota 2:
				<input type="number" id="nota2" name="nota2" step="0.1" required>
				</label>

				<label>Nota 3:
					<input type="number" id="nota3" name="nota3" step="0.1" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<hr>
			<br>

			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			echo "Media final: $mediafinal";
			}
			?>
		</div>
	</div>
</body>
</html>
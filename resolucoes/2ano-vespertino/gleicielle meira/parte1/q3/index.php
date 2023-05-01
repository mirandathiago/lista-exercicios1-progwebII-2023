<?php

$nota1 = $_POST["nota1"] ?? 0;
$nota2 = $_POST["nota2"] ?? 0;
$nota3 = $_POST["nota3"] ?? 0;


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calcular média</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calcular média</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form method = "post"  action = "index.php">
				<label> NOTA 1:
					<input type="number" id="nota1" name="nota1" step="0.1" required>
				</label> 

				<label> NOTA 2:
					<input type="number" id="nota2" name="nota2" step="0.1" required>
				</label>

				<label> NOTA 3:
					<input type="number" id="nota3" name="nota3" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>

			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

         $nota1 = $nota1 * 2;
		 $nota2 = $nota2 * 3;
		 $nota3 = $nota3 * 5;
         $media = ( $nota1 + $nota2 + $nota3 ) /10;

		 echo "<p> A média do aluno será de: {$media}</p>";

			?>

		</div>
	</div>
</body>
</html>
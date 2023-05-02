<?php
	$numin = $_POST["numin"] ?? 0;
	$numf = $_POST["numf"] ?? 0;
	$cont = 0;
	for ($i = $numin; $i <= $numf; $i++) { 
		if ($i % 2 == 0) {
			$cont++;
		}
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
		<h1>Tem quantos Numero Pares?</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Qual intevalo verificar?</h2>
			<form action="index.php" method="post">
				<label>Insira o inicio do intervalo:
					<input type="number" id="numin" name="numin" required>
				</label>
				<label>Insira o fim do intervalo:
					<input type="number" id="numf" name="numf" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					echo "<h3>A quantidade de numeros pares existentes no intervalo de {$numin} - {$numf} é :<br> {$cont}</h3>";
				}
			?>
		</div>
	</div>
</body>
</html>
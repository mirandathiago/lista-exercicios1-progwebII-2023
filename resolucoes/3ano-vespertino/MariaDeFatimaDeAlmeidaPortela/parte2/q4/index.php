<?php
	$xA = $_POST["xA"] ?? " ";
	$xB = $_POST["xB"] ?? " ";
	$xC = $_POST["xC"] ?? " ";
	$delta = pow($xB,2) - 4 * $xA * $xC;
	$x1 = (-$xB + sqrt($delta))/(2 * $xA);
	$x2 = (-$xB - sqrt($delta))/(2 * $xA);
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
		<h1>Calcular Bashkara</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os Dados:</h2>
			<form action="index.php" method="post">
				<label>Valor de A:
					<input type="number" id="nome" name="xA" required>
				</label>
				<label>Valor de B:
					<input type="number" id="nome" name="xB" required>
				</label>
				<label>Valor de C:
					<input type="number" id="nome" name="xC" required>
				</label>
				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "<p class='alerta-verde'>x1 = $x1 | x2 = $x2</p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
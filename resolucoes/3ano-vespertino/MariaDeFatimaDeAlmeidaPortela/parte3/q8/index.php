<?php
	$ppA = $_POST["ppA"] ?? 1;
	$ppB = $_POST["ppB"] ?? 1;
	$txA = $_POST["txA"] ?? 1;
	$txB = $_POST["txB"] ?? 1;
	$anos = 0;

	while ($ppA < $ppB) {
		$ppA = $ppA + ($ppA * ($txA/100));
		$ppB = $ppB + ($ppB * ($txB/100));
		$anos++;
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
		<h1>Calculadora populacional</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os dados</h2>
			<form action="index.php" method="post">
				<label>População da cidade A:
					<input type="number" id="nome" name="ppA" required>
				</label>
				<label>Taxa de crescimento da população A :
					<input type="number" id="nome" name="txA" max="100" min="1" step=".1" required>
				</label>
				<label>População da cidade B:
					<input type="number" id="nome" name="ppB" required>
				</label>
				<label>Taxa de crescimento da população B:
					<input type="number" id="nome" name="txxB" max="100" min="1" step=".1" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
				echo "<p class='alerta-verde'>A população da cidade A ultrapassará a populção da cidade B em <b>$anos</b> anos.</p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
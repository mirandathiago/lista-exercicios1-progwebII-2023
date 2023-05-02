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
		<h1>CALCULANDO SEU IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>INFORME</h2>
			<form action="index.php" method="post">
				<label>Peso em kg
					<input type="number" step="0.01" id="peso" name="peso" value=42>
				</label>

				<label>Altura em m
					<input type="number" step="0.01" id="altura" name="altura" value="1.6">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				
				$peso = $_POST["peso"]??42;
				$altura = $_POST["altura"]??1.6;

				$imc = $peso / ($altura ** 2);
				$imc = round($imc, 2);

				echo "<p>Seu IMC é $imc, você está na faixa de </p>";

				if($imc < 18.5) {
					echo "<p>abaixo do peso.</p>";
				} elseif($imc >= 18.5 && $imc <= 24.9) {
					echo "<p>peso normal.</p>";
				} elseif($imc >= 25 && $imc <= 29.9) {
					echo "<p>sobrepeso.</p>";
				} elseif($imc >= 30 && $imc <= 34.9) {
					echo "<p>obesidade grau 1.</p>";
				} elseif($imc >= 35 && $imc <= 39.9) {
					echo "<p>obesidade grau 2.</p>";
				} else {
					echo "<p>obesidade grau 3.</p>";
				}
	
	?>
		</div>
	</div>
</body>
</html>
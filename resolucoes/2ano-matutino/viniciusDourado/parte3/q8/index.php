<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>O Instituto Nacional de Estatística</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>O Instituto Nacional de Estatística</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>O Instituto Nacional de Estatística</h2>
			<form action="index.php" method="get">
				<label>Número atual de habitante da cidade A:
					<input type="number" id="numhab1" name="numhab1" required>
				</label>
				<label>Taxa anual de crescimento da cidade A:
					<input type="number" id="taxa1" name="taxa1" required step=0.1>
				</label>
				<label>Número atual de habitante da cidade B:
					<input type="number" id="numhab2" name="numhab2" required>
				</label>
				<label>Taxa anual de crescimento da cidade B:
					<input type="number" id="taxa2" name="taxa2" required step=0.1>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "GET"){
			$numhab1 = $_GET["numhab1"] ?? 0;
			$taxa1 = $_GET["taxa1"] ?? 0;
			$numhab2 = $_GET["numhab2"] ?? 0;
			$taxa2 = $_GET["taxa2"] ?? 0;
			$anos = 0;
			// Converte as taxas de crescimento para decimal
			$taxa1 = $taxa1 / 100;
			$taxa2 = $taxa2 / 100;

			if($numhab1 >= $numhab2){
				echo "<p>A cidade A já tem mais ou o mesmo número de habitantes do que a cidade B </p>";
			}else {
	

				if($taxa1 < $taxa2){
					echo"<p>A cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.</p>";
				}else{
				while($numhab1 < $numhab2){
					$numhab1 += $numhab1 * $taxa1;
					$numhab2 += $numhab2 * $taxa2;
					$anos++;
				}
				echo"<p>Serão necessários {$anos} anos para que a população da cidade A ultrapasse a da cidade B.</p>";
			}
			}
		}
			?>
	</div>
</body>
</html>
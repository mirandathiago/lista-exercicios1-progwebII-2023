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
		<h1>Números pares em um intervalo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite o intervalo</h2>
			<form  action = "index.php" method= "get">
				
				<label>Primeiro número:
					<input type="number" id="num1" name="num1" required>
				</label>

				<label>Último número:
					<input type="number" id="num2" name="num2" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php

		$inicio_intervalo = $_GET["num1"];
		$fim_intervalo = $_GET["num2"];
		$quant=0;

		for($i= $inicio_intervalo; $i <= $fim_intervalo; $i++){
			if($i%2==0){
			$quant++;
			}
		}

		echo "<p>A quantidade de números pares é {$quant}</p>";


	


?>
		</div>
	</div>
</body>
</html>
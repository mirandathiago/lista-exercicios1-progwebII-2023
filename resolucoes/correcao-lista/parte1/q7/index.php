<?php

	$celsius = $_POST["celsius"] ?? "";
	
	

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
		<h1>Questão 7 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>7- Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. Crie um formulário que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit e exiba na tela.</h2>
			
			<form action="index.php" method="post">
				<label>Graus Celsius:
					<input type="number" id="celsius" name="celsius" required step="0.1" value="<?=$celsius?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					
					$fahrenheit = ($celsius * (9/5) ) + 32; //F = (C * 9/5) + 32
					echo "<p class='alerta-verde'>A temperatura {$celsius}º celcius corresponde a  {$fahrenheit}º em Fahrenheit</p>";

				}

			?>

		</div>
	</div>
</body>
</html>
<?php


$peso = $_POST ["peso"] ?? 1;
$altura = $_POST ["altura"] ?? 1 ;
$imc = $peso / ($altura ** 2);

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
		<h1>Calculadora de IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os dados:</h2>
			<form action = "index.php" method = "post">
				<label>Peso: 
					<input type="number" id="peso" name="peso" value="50" required>
				</label>

				<label>Altura: 
					<input type="number" id="altura" name="altura" step="0.01" value="1.55" required>
				</label>

				<button name="enviar"> CALCULAR IMC </button>
			</form>
		</div>
		<div class="box resposta">
			<?php

		if($_SERVER["REQUEST_METHOD"]=="POST"){

			if($imc < 18.5){

			$faixa = "abaixo do peso";

			} else if ($imc >= 18.5 && $imc < 25){

				$faixa = "peso normal";

			} else if ($imc >= 25 && $imc < 30){

			$faixa = "sobrepeso";
			}

			else if ($imc >= 30 && $imc < 35){

				$faixa = "obesidade grau 1";
			}

			else if ($imc >= 35 && $imc < 40){

				$faixa = "obesidade grau 2";
			}
			else{

				$faixa = "obesidade grau 3";
			}


			echo "<p> Seu IMC é {$imc}, você está na faixa de: {$faixa} </p>";
		}
			?>


		</div>
	</div>
</body>
</html>
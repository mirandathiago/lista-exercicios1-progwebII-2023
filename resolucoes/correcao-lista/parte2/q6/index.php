<?php

	$ladoA = $_POST["ladoA"] ?? "";
	$ladoB = $_POST["ladoB"] ?? "";
	$ladoC = $_POST["ladoC"] ?? "";


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
		<h1>Questão 6 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>6- Desenvolva um formulário em PHP que permita ao usuário inserir os valores dos três lados de um triângulo. O programa deve verificar se é possível formar um triângulo com os valores informados e, caso seja possível, indicar o tipo de triângulo formado.</h2>
			
			<form action="index.php" method="post">
				<label>Lado A:
					<input type="number" id="ladoA" name="ladoA" required value="<?=$ladoA?>">
				</label>
				<label>Lado B:
					<input type="number" id="ladoB" name="ladoB" required value="<?=$ladoB?>">
				</label>
				<label>Lado C:
					<input type="number" id="ladoC" name="ladoC" required value="<?=$ladoC?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){


					if($ladoA + $ladoB > $ladoC && 
					   $ladoB + $ladoC > $ladoA && 
					   $ladoA + $ladoC > $ladoB){

						if($ladoA == $ladoB && $ladoB == $ladoC){
							echo "<p class='alerta-verde'>Triângulo Equilatero</p>";
						}else if($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC){
							echo "<p class='alerta-verde'>Triângulo Isóceles</p>";
						}else{
							echo "<p class='alerta-verde'>Triângulo Escaleno</p>";
						}


					}else{
						echo "<p class='alerta-vermelho'>Os valores passados não formam um triangulo</p>";
					}


				}


			?>
		</div>
	</div>
</body>
</html>
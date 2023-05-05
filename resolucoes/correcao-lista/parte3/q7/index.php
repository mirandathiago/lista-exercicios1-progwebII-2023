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
		<h1>Questão 7 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>7- Um caixa eletrônico precisa calcular a quantidade mínima de cédulas necessárias para entregar um determinado valor solicitado pelo cliente. Crie um programa que receba um valor inteiro de um formulário e calcule o menor número de notas possíveis para decompor o valor informado. Considere que as notas disponíveis são de R$100, R$50, R$20, R$10, R$5, R$2 e R$1. Ao final, mostre o valor lido e a quantidade de cada tipo de nota necessária para completar o valor.</h2>

			<form action="index.php" method="post">
				
				<label>Valor Solicitado:
					<input type="number" id="valor" name="valor" required value="<?=$_POST["valor"] ?? ""?>">
				</label>
				

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST"){

					$valor = $_POST["valor"];

					$cedula100 = 0;
					$cedula50 = 0;
					$cedula20 = 0;
					$cedula10 = 0;
					$cedula5 = 0;
					$cedula2 = 0;
					$cedula1 = 0;

					while($valor > 0){
						if($valor >= 100){
							$valor = $valor - 100;
							$cedula100++;
						}else if($valor >= 50){
							$valor = $valor - 50;
							$cedula50++;
						}else if($valor >= 20){
							$valor = $valor - 20;
							$cedula20++;
						}else if($valor >= 10){
							$valor = $valor - 10;
							$cedula10++;
						}else if($valor >= 5){
							$valor = $valor - 5;
							$cedula5++;
						}else if($valor >= 2){
							$valor = $valor - 2;
							$cedula2++;
						}else{
							$cedula1 = $valor;
							$valor = 0;
						}
					}
					
					echo "<p class='alerta-verde'>Valor informado: R$ {$_POST["valor"]}</p>";
					echo "<p class='alerta-verde'>{$cedula100} nota(s) de R$100</p>";
					echo "<p class='alerta-verde'>{$cedula50} nota(s) de R$50</p>";
					echo "<p class='alerta-verde'>{$cedula20} nota(s) de R$20</p>";
					echo "<p class='alerta-verde'>{$cedula10} nota(s) de R$10</p>";
					echo "<p class='alerta-verde'>{$cedula5} nota(s) de R$5</p>";
					echo "<p class='alerta-verde'>{$cedula2} nota(s) de R$2</p>";
					echo "<p class='alerta-verde'>{$cedula1} nota(s) de R$1</p>";


				}

			?>


		</div>
	</div>
</body>
</html>

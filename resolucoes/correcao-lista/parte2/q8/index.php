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
		<h1>Questão 8 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>8-  O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.Crie um formulário que permita ao usuário informar o peso e a altura. Com base nesses dados, calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: abaixo do peso (IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9), obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).
			O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em quilogramas e altura é a altura em metros elevada ao quadrado.
			</h2>

			<form action="index.php" method="get">
				<label>Peso:
					<input type="number" id="peso" name="peso"
					 step="0.1" required value="<?=$_GET["peso"] ?? "" ?>">
				</label>
				<label>Altura:
					<input type="number" id="altura" name="altura" 
					step="0.01" required value="<?=$_GET["altura"] ?? "" ?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				if(isset($_GET["enviar"])){

					$peso = $_GET["peso"];
					$altura = $_GET["altura"];

					//IMC = peso / (altura^2)

					$imc = $peso / ($altura**2);
					$imc = number_format($imc,1);

					if($imc < 18.5){
						echo "<p class='alerta-amarelo'>O seu imc é de {$imc} e você está abaixo do peso ideal</p>";
					}else if($imc >= 18.5 && $imc < 25){
						echo "<p class='alerta-verde'>O seu imc é de {$imc} e você está com o peso ideal</p>";
					}else if($imc >= 25 && $imc < 30){
						echo "<p class='alerta-amarelo'>O seu imc é de {$imc} e você está com sobrepeso</p>";
					}else if($imc >= 30 && $imc < 35){
						echo "<p class='alerta-amarelo'>O seu imc é de {$imc} e você está com Obesidade Grau I</p>";
					}else if($imc >= 35 && $imc < 40){
						echo "<p class='alerta-vermelho'>O seu imc é de {$imc} e você está com Obesidade Grau II</p>";
					}else{
						echo "<p class='alerta-vermelho'>O seu imc é de {$imc} e você está com Obesidade Grau III</p>";
					}


				}


			?>
		</div>
	</div>
</body>
</html>
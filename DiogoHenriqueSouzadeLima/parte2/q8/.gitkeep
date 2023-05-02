8-  O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.Crie um formulário que permita ao usuário informar o peso e a altura. Com base nesses dados, calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: abaixo do peso (IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9), obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).
O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em quilogramas e altura é a altura em metros elevada ao quadrado.
Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.
Exemplo de entrada e saída:
Entrada: Peso: 70 kg, Altura: 1.70 m
Saída: Seu IMC é 24.22, você está na faixa de peso normal.
Entrada: Peso: 90 kg, Altura: 1.75 m
Saída: Seu IMC é 29.39, você está na faixa de sobrepeso.

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de IMC</title>
</head>
<body>
	<h1>Calculadora de IMC</h1>
	<form method="POST">
		<label for="peso">Peso (em kg):</label>
		<input type="number" name="peso" id="peso" required><br><br>

		<label for="altura">Altura (em metros):</label>
		<input type="number" name="altura" id="altura" step="0.01" required><br><br>

		<input type="submit" value="Calcular IMC">
	</form>

	<?php
		if(isset($_POST["peso"]) && isset($_POST["altura"])){
			$peso = $_POST["peso"];
			$al = $_POST["altura"];

			$imc = $peso / ($al ** 2);
			$faixa = "";

			if($imc < 18.5){
				$faixa = "abaixo do peso";
			}
			elseif($imc >= 18.5 && $imc <= 24.9){
				$faixa = "com peso normal";
			}
			elseif($imc >= 25 && $imc <= 29.9){
				$faixa = "com sobrepeso";
			}
			elseif($imc >= 30 && $imc <= 34.9){
				$faixa = "com obesidade grau 1";
			}
			elseif($imc >= 35 && $imc <= 39.9){
				$faixa = "com obesidade grau 2";
			}
			else{
				$faixa = "com obesidade grau 3";
			}

			echo "<p>Seu IMC é " . number_format($imc, 2) . ", você está na faixa " . $faixa . ".</p>";
		}
	?>
</body>
</html>
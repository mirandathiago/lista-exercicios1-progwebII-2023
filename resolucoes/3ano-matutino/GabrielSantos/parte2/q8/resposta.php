<?php 

	/* 
	 * 8-  O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.Crie um formulário que permita ao usuário informar o peso e a altura. Com base nesses dados, calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: abaixo do peso (IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9), obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).
	 
	 ? O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em quilogramas e altura é a altura em metros elevada ao quadrado.
	 ? Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.

	 > Entrada: Peso: 70 kg, Altura: 1.70 m
	 > Saída: Seu IMC é 24.22, você está na faixa de peso normal.

	 > Entrada: Peso: 90 kg, Altura: 1.75 m
	 > Saída: Seu IMC é 29.39, você está na faixa de sobrepeso.


	*/

	$peso = $_POST["peso"] ?? 50;
	$altura = $_POST["altura"] ?? 1.5;
	$imc = number_format($peso / ($altura * $altura), 2);

	if ($imc < 18.5) {
		$status = "abaixo do peso";
	}elseif ($imc <= 24.9) {
		$status = "peso normal";
	}elseif ($imc <= 29.9) {
		$status = "sobrepeso";
	}elseif ($imc <= 34.9) {
		$status = "obesidade grau 1";
	}elseif ($imc <= 39.9) {
		$status = "obesidade grau 2";
	}else{
		$status = "obesidade grau 3";
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>
				<?="Para o peso {$peso} e altura {$altura}, o IMC é {$imc} <br> Seu status é {$status}."?>
			</p>
			
            <a href="index.php" class="index.php">Voltar</a>
		</div>
	</div>
</body>
</html>
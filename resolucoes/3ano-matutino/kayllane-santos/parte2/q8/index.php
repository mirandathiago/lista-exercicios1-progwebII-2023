<?php
	/*
	Calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: abaixo do peso (IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9), obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).
	O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em quilogramas e altura é a altura em metros elevada ao quadrado.
	Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.
	*/

	$peso = $_POST["peso"] ?? 40;
	$altura = $_POST["altura"] ?? 1.56;
	$imc = $peso/($altura**2);

	$imc = number_format($imc, 2);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo de IMC</h1>
	</header>
	<div class="container">
		<!-- Crie um formulário que permita ao usuário informar o peso e a altura. -->
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="POST">
				<label>Seu Peso:
					<input type="number" name="peso" step="0.01" value="<?=$peso?>" required>
				</label>

				<label>Sua Altura:
					<input type="number" name="altura" step="0.01" value="<?=$altura?>" required>
				</label>

				<button name="enviar"> Enviar </button>

			</form>
		</div>	
		
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];

			if($metodo == "POST"){
				if($imc < 18.5){
					echo "<p class='alerta-amarelo'>Seu IMC é {$imc}. Abaixo do peso.</p>";
				}else if($imc >= 18.5 && $imc <= 24.9){
					echo "<p class='alerta-verde'>Seu IMC é {$imc}. Peso normal.</p>";
				}else if($imc >= 25 && $imc <= 29.9){
					echo "<p class='alerta-azul'>Seu IMC é {$imc}. Sobrepeso.</p>";
				}else if($imc >= 30 && $imc <= 34.9){
					echo "<p class='alerta-rosa'>Seu IMC é {$imc}. Obesidade Grau 1.</p>";
				}else if($imc >= 35 && $imc <= 39.9){
					echo "<p class='alerta-roxo'>Seu IMC é {$imc}. Obesidade Grau 2.</p>";
				}else{
					echo "<p class='alerta-vermelho'>Seu IMC é {$imc}. Obesidade Grau 3</p>";
				}
			}else{
				echo "<p>Aguardando a Operação</p>";
			}
			?>
            
		</div>
	</div>
</body>
</html>
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
		<h1>Caixa Eletrônico</h1>
	</header>
	<div class="container">
		<!-- Um caixa eletrônico precisa calcular a quantidade mínima de cédulas necessárias para entregar um determinado valor solicitado pelo cliente. Crie um programa que receba um valor inteiro de um formulário e calcule o menor número de notas possíveis para decompor o valor informado. Considere que as notas disponíveis são de R$100, R$50, R$20, R$10, R$5, R$2 e R$1. Ao final, mostre o valor lido e a quantidade de cada tipo de nota necessária para completar o valor. -->
		<div class="box formulario">
			<form action="index.php" method="POST">
				<label>Digite um valor inteiro:
					<input type="number" name="valor" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>	
		<div class="box resposta">
			<h3>Resultado: </h3>
			<?php
				$numero = $_POST["valor"] ?? 0;
				$nota100 = 0;
				$nota50 = 0;
				$nota20 = 0;
				$nota10 = 0;
				$nota5 = 0;
				$nota2 = 0;
				$nota1 = 0;

				$metodo = $_SERVER["REQUEST_METHOD"];

				$i = 0;

				if($metodo == "POST"){
					while($numero > 0){
						if($numero >= 100){ 
							$numero -= 100;
							$nota100++;
						}else if($numero >= 50){
							$numero -= 50;
							$nota50++;
						}else if($numero >= 20){
							$numero -= 20;
							$nota20++;
						}else if($numero >= 10){
							$numero -= 10;
							$nota10++;
						}else if($numero >= 5){
							$numero -= 5;
							$nota5++;
						}else if($numero >= 2){
							$numero -= 2;
							$nota2++;
						}else if($numero == 1){
							$numero -= 1;
							$nota1++;
						}
					}
			

					echo "<p class='alerta-azul'>{$nota100} nota(s) de 100.</p>";
					echo "<p class='alerta-azul'>{$nota50} nota(s) de 50.</p>";
					echo "<p class='alerta-azul'>{$nota20} nota(s) de 20.</p>";
					echo "<p class='alerta-azul'>{$nota10} nota(s) de 10.</p>";
					echo "<p class='alerta-azul'>{$nota5} nota)(s) de 5.</p>";
					echo "<p class='alerta-azul'>{$nota2} nota(s) de 2.</p>";
					echo "<p class='alerta-azul'>{$nota1} nota(s) de 1.</p>";
				}else{
					echo "<p>Aguardando a Operação</p>";
				}

			?>
			
            
		</div>	
	</div>
</body>
</html>
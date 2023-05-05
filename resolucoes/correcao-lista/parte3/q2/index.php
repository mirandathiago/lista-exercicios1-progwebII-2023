

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
		<h1>Questão 2 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.

			</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input type="number" id="num" name="num" required value="<?=$_POST["num"] ?? ""?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

			 if($_SERVER["REQUEST_METHOD"] == "POST"){

				$num = $_POST["num"] ?? 0;
				$m = 0;

				while($m <= 10){
					$resultado = $m * $num;
					echo "<li> {$m} x {$num} = {$resultado}</li>";
					$m++;
				}




			 }
				

			?>


		</div>
	</div>
</body>
</html>

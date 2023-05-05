

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
		<h1>Questão 1 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 
				O fatorial é representado por:<br>
				n! = n x (n – 1) x (n – 2) x (n – 3)!
			</h2>
			<form action="index.php" method="get">
				<label>Número:
					<input type="number" id="num" name="num" required value="<?=$_GET["num"] ?? ""?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				if(isset($_GET["num"])){

					$num = $_GET["num"] ?? 0;
				    $fatorial = 1;
					

					echo "<p class='alerta-verde'>{$num}! = ";
					for($i = $num; $i >= 1; $i--){
						echo $i;
						echo $i>1 ? " x " : " = ";
						$fatorial = $fatorial * $i;
					}

					echo "{$fatorial}</p>";


				}


			?>


		</div>
	</div>
</body>
</html>

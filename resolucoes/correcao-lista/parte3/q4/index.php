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
		<h1>Questão 4 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.</h2>

			<form action="index.php" method="post">
				
				<label>Número até quando realizar a soma:
					<input type="number" id="num" name="num" required value="<?=$_POST["num"] ?? ""?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

			 $metodo = $_SERVER["REQUEST_METHOD"];

			 if($metodo == "POST"){

				
				$num = $_POST["num"] ?? 0;
				$soma = 0; 
				

				for($i = 1; $i <= $num; $i++){
					echo "<p>{$i}</p>";
					$soma += $i; //$soma = $soma + $i;
				}
				
				echo "<p class='alerta-verde'>A soma de todos os números entre 1 e {$num} é de {$soma}.</p>";



			 }
				

			?>


		</div>
	</div>
</body>
</html>

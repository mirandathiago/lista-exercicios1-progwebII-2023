

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
		<h1>Questão 3 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.</h2>

			<form action="index.php" method="post">
				<label>Valor Inicial do Intervalo:
					<input type="number" id="inicial" name="inicial" required value="<?=$_POST["inicial"] ?? ""?>">
				</label>
				<label>Valor Final do Intervalo:
					<input type="number" id="final" name="final" required value="<?=$_POST["final"] ?? ""?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

			 $metodo = $_SERVER["REQUEST_METHOD"];

			 if($metodo == "POST"){

				$inicial = $_POST["inicial"] ?? 0;
				$final = $_POST["final"] ?? 0;
				$somaPares = 0; 
				$quantPares = 0;

				for($i = $inicial; $i <= $final; $i++){
					if($i % 2 == 0){
						$somaPares = $somaPares + $i;
						$quantPares++;
					}
				}
				
				echo "<p class='alerta-verde'>A soma de todos os números pares entre {$inicial} e {$final} é de {$somaPares} tendo a quantidade de {$quantPares} números pares neste intervalo.</p>";



			 }
				

			?>


		</div>
	</div>
</body>
</html>

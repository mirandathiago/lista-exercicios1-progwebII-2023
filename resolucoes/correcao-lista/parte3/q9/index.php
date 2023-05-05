<?php

	$brigadeiros = $_POST["brigadeiros"] ?? "";
	$cajuzinhos = $_POST["cajuzinhos"] ?? "";
	$msg = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$mdc = 1;
		$cont = 2;
		$menor = $brigadeiros > $cajuzinhos ? $cajuzinhos : $brigadeiros;
       //       2       12
		while($cont <= $menor){
			      //12                          //18  
			if($brigadeiros % $cont == 0 && $cajuzinhos % $cont == 0){
				$mdc = $cont;
			}

			$cont++;

		}

		$msg = "<p class='alerta-verde'>A quantidade de doces por Prato é de: {$mdc}</p>";
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
		<h1>Questão 9 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>9- Joana está preparando kits de doces para distribuir entre alguns convidados. Há brigadeiros e cajuzinhos. Ela quer separá-los em pratos de modo a ocupar a menor quantidade de pratos mas, que todos os pratos tenham a mesma quantidade de doces e sem misturá-los. A quantidade de doces que Joana deverá colocar em cada prato será definida através do cálculo do Máximo Divisor Comum (MDC). O MDC (Maior Divisor Comum) de dois números inteiros positivos é o maior número que pode dividir ambos os números sem deixar o resto. Por exemplo, o MDC entre 12 e 18 é 6, pois 6 é o maior número que pode dividir tanto 12 quanto 18 sem deixar o resto. Escreva um programa que recebe através de um formulário o número de brigadeiros e o número de cajuzinhos que serão feitos e retorne a quantidade de pratos que serão utilizados.</h2>

			<form action="index.php" method="post">
				
				<label>Brigadeiros:
					<input type="number" id="brigadeiros" name="brigadeiros" required value="<?=$brigadeiros?>">
				</label>
				<label>Cajuzinhos:
					<input type="number" id="cajuzinhos" name="cajuzinhos" required value="<?=$cajuzinhos?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?=$msg?>


		</div>
	</div>
</body>
</html>

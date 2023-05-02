<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>n!</h2>
			<br>
			<form action="index.php" method="post">
			<label>Insira o valor do lado n:
				<input type="number" id="nome" name="n" min=0 required>
			</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Solução</h2>
			<br>
			<p class="alerta-verde">

			<?php
				$n = $_POST["n"] ?? 0;
				$calc = 1;

				echo "{$n}! = ";

				if($n == 0){
					echo "1";
				}else{
					for($i = $n; $i > 0; $i--){
						if ($i == 1){
							echo "{$i}";
						}else{
							echo "{$i} x ";
						}
						
						$calc *= $i;
					}
				}

				echo " = {$calc}";
			?>

			</p>
		</div>
	</div>
</body>
</html>
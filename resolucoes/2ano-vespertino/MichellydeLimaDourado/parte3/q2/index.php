
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
		<h1>Questão 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tabuada</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input type="number" id="num" name="num" required min="0">
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>

		<div class="box resposta">
			<?php
			$m = $_SERVER["REQUEST_METHOD"];
			if($m == "POST"){
				$numero = $_POST["num"] ?? 7;
				$n = 0;
				while($n <= 10){
					$resultado = $numero * $n;
					echo "<p>{$numero} * {$n} = {$resultado} </p>";
					$n++;
				}
			}
			?>
		</div>
	</div>
</body>
</html>
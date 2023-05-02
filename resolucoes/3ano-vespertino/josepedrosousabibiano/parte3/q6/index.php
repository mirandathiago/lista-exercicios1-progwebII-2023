<?php
	$s = $_POST["t"] ?? 0;
	$h = 0;
	$m = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 6</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Conversor de Tempo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Segundos</h2>
			<br>
			<form action="index.php" method="post">
			<label>Tempo (em segundos):
				<input type="number" id="nome" name="t" min=0 required>
			</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Tempo convertido</h2>
			<br>
			<p class="alerta-amarelo">

				<?php
					while($s >= 3600){
						$s -= 3600;
						$h += 1;
					}

					while($s >= 60){
						$s -= 60;
						$m += 1;
					}

					echo $date = "$h:$m:$s";
				?>

			</p>
		</div>
	</div>
</body>
</html>
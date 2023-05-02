<?php $n = $_POST["n"] ?? 0; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tabuada (1 ao 10)</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fator</h2>
			<br>
			<form action="index.php" method="post">
			<label>Insira um número:
				<input type="number" id="nome" name="n" min=0 required>
			</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Tabuada do <?=$n?></h2>
			<br>
			<p class="alerta-verde">

				<?php
					$i = 1;

					while($i < 11){
						$mult = $i*$n;

						echo "$n x $i = $mult";

						if($i != 10){
							echo "<br>";
						}

						$i++;
					}
				?>

			</p>
		</div>
	</div>
</body>
</html>
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
		<h1>Fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite um número</h2>
			<form>
				<label>Número:
					<input type="number" id="num" name="num" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php


		$num = $_GET["num"];
		$resultado= 1;

		for($i = $num; $i>1;$i--){
			$resultado*=$i;
		}

		echo "<p>{$resultado}</p>";

		

?>
		
		</div>
	</div>
</body>
</html>
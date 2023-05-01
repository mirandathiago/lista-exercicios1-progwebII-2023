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
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha um Número</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input type="number" id="num" name="num" placeholder="Digite um número" required>
				</label>

				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			
			$num = $_POST["num"] ?? 0;
			$mult = 1;

			$metodo = $_SERVER["REQUEST_METHOD"];

			if ($metodo == "POST") {	
			while ($mult <= 10) {
				$result = $num * $mult;
				echo "{$num} x {$mult} = {$result} <br>" ;
				$mult ++;
				}
			}else {
				echo "<p>Aguardando consulta...</p>";
			};
			?>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
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
		<h1>Soma de "n" números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe um número</h2>
			<form action="index.php" method="post">
				<label>
					<input type="number" id="n" name="n" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				$n = $_POST["n"] ?? 1;
				$soma = 0;

				if ($metodo == "POST") {

					for ($i=1; $i <= $n ; $i++) { 
						$soma += $i;
					}
					echo "<p>Soma dos números de 1 a $n = $soma</p>";
				} else {
					echo "<p>Aguardando</p>";
				}
				
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
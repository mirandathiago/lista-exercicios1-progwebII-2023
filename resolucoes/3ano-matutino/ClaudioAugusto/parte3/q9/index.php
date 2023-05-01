<?php

	$b = $_POST["briga"] ?? 1;
	$c = $_POST["caju"] ?? 1;

	$fator = 2;
	$mdc = 1;
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
		<h1>MMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os dados:</h2>
			<form action="index.php" method="post">
				<label>Quantidade de Brigadeiros:
					<input type="number" id="briga" name="briga" required>
				</label>

				<label>Quantidade de Cajuzinhos:
					<input type="number" id="caju" name="caju" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				if ($metodo == "POST") {
					echo "<p>$b $c</p>";
				} else {
					echo "<p>Aguardando</p>";
				}
				
			
			
			?>
			<p class="alerta-verde">Mensagem de alerta aqui</p>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
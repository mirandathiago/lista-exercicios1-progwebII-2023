<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body><h1>Produtos Incriveis...</h1>
	</header>
    <div class="container">
		<div class="box formulario">
	<form method="post">
		<label for="duracao"><h3>Digite o tempo de duração (em segundos):</h3></label>
		<input type="number" id="duracao" name="duracao" min="1" required>
        <br>
        <br>
        <button name="enviar"> Enviar </button>
	</form>
</div>
    <div class="box resposta">

	<?php
		// Recebe o tempo de duração do formulário
		if (isset($_POST['duracao'])) {
			$duracao = $_POST['duracao'];

			// Faz a conversão de segundos para horas, minutos e segundos utilizando uma estrutura de repetição
			$horas = 0;
			$minutos = 0;
			$segundos = 0;

			while ($duracao >= 3600) {
				$horas++;
				$duracao -= 3600;
			}

			while ($duracao >= 60) {
				$minutos++;
				$duracao -= 60;
			}

			$segundos = $duracao;

			// Exibe o resultado da conversão
			echo "<h3>A duração do evento é de $horas hora(s), $minutos minuto(s) e $segundos segundo(s).</h3>";
		}
	?>
    </div>
    </div>
</body>
</html>
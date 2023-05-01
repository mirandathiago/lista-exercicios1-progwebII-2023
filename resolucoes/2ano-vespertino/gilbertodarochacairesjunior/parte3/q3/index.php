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
		<h1>Formulário de Intervalo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Intervalo</h2>
			<form action="index.php" method="post">
				<label for="numero1">Numero Inicial</label>
				<input type="number" name="numero1">
				<label for="numero2">Numero Final</label>
				<input type="number" name="numero2">
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<h3>Numero de Numeros pares entre
					<?= $_POST['numero1'] ?> e
					<?= $_POST['numero2'] ?>
				</h3>
				<p class="alerta-verde">
					<?php
					$total = 0;
					for ($i = $_POST['numero1']; $i <= $_POST['numero2']; $i++) {
						if ($i % 2 == 0) {
							$total++;
						}
					}
					echo $total;
					?>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>
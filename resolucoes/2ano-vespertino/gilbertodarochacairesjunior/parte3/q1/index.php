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
		<h1>Formulário de Fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fatorial</h2>
			<form action="index.php" method="post">
				<label for="numero">Numero Inicial</label>
				<input type="number" name="numero">
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<p class="alerta-verde">
					<?php
					if ($_POST['numero'] == 0) {
						echo 1;
					} else {
						$total = 1;
						for ($i = $_POST['numero']; $i > 0; $i--) {
							$total *= $i;
						}
						echo $total;
					}
					?>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>
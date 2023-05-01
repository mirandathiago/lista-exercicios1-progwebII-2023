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
		<h1>Formulário de Numero</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Numero á ser contado</h2>
			<form action="index.php" method="post">
				<input type="number" name="numero">
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				echo '<h2>Soma de Todos os Numero de 1 a ' . $_POST['numero'] . '</h2>';
			} else {
				echo '<h2>Soma de Todos os Numero de 1 a N</h2>';
			}

			?>
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<p class="alerta-verde">
					<?php
					$total = 0;
					for ($i = 0; $i <= $_POST['numero']; $i++) {
						$total += $i;
					}
					echo $total;
					?>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>
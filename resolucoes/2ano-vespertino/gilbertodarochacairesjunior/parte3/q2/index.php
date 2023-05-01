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
		<h1>Formulário de Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tabuada</h2>
			<form action="index.php" method="post">
				<label for="numero1">Numero Inicial</label>
				<input type="number" name="numero1">
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<p class="alerta-verde">
					<?php
					$i = 0;
					while ($i <= 10) {
						echo "{$_POST['numero1']} x {$i} = " . $_POST['numero1'] * $i;
						echo '<br>';
						$i++;
					}
					?>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>
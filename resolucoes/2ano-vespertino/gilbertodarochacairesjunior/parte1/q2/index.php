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
			<h2>Numero</h2>
			<form action="index.php" method="post">
				<label for="uso">Insira um numero</label>
				<input type="number" name="uso">
				<button> Enviar </button>
				<!-- Poderia apenas usar o required para não conseguir enviar o formulario sem preencher -->
			</form>
		</div>
		<div class="box resposta">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<p class="alerta-verde">
					<?php
					echo "Dobro : " . 2 * $_POST['uso'] . '<br>';
					echo "Metade: " . $_POST['uso'] / 2;
					?>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>
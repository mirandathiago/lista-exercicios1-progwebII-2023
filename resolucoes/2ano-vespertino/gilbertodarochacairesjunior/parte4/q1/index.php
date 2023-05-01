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
		<h1>Formulário de Frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Frutas</h2>
			<form action="index.php" method="post">
				<fieldset>
					<legend>Selecione suas frutas favoritas:</legend>
					<div>
						<input type="checkbox" id="banana" name="frutas[]" value="banana">
						<label for="banana">Banana</label>
					</div>
					<div>
						<input type="checkbox" id="morango" name="frutas[]" value="morango">
						<label for="morango">Morango</label>
					</div>
					<div>
						<input type="checkbox" id="uva" name="frutas[]" value="uva">
						<label for="uva">Uva</label>
					</div>
					<div>
						<input type="checkbox" id="abacaxi" name="frutas[]" value="abacaxi">
						<label for="abacaxi">Abacaxi</label>
					</div>
					<div>
						<input type="checkbox" id="laranja" name="frutas[]" value="laranja">
						<label for="laranja">Laranja</label>
					</div>
				</fieldset>
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Frutas escolhidas</h2>
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<p class="alerta-verde">
					<?php

					foreach ($_POST['frutas'] as $fruta) {
						echo ucfirst($fruta) . "\n";
					}
					?>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>
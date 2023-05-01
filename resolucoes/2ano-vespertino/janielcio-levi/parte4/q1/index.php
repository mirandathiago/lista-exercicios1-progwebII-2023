<?php
	$frutas = $_POST["frutas"] ?? [];
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
		<h1>Pesquisa Social</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Quais são as suas frutas favoritas?</h2>
			<form action="index.php" method="post">
			<fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="banana" name="frutas[]" value="Banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="Morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="frutas[]" value="Uva">
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="frutas[]" value="Abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="frutas[]" value="Laranja">
				  <label for="laranja">Laranja</label>
				</div>
				<div>
				  <input type="checkbox" id="maca" name="frutas[]" value="Maçã">
				  <label for="maçã">Maçã</label>
				</div>
				<div>
				  <input type="checkbox" id="pera" name="frutas[]" value="Pera">
				  <label for="pera">Pera</label>
				</div>
				<div>
				  <input type="checkbox" id="abacate" name="frutas[]" value="Abacate">
				  <label for="abacate">Abacate</label>
				</div>
				<div>
				  <input type="checkbox" id="acai" name="frutas[]" value="Acai">
				  <label for="acai">Açai</label>
				</div>
				<div>
				  <input type="checkbox" id="goiaba" name="frutas[]" value="Goiaba">
				  <label for="goiaba">Goiaba</label>
				</div>
				<div>
				  <input type="checkbox" id="jabuticaba" name="frutas[]" value="Jabuticaba">
				  <label for="jabuticaba">Jabuticaba</label>
				</div>
				<div>
				  <input type="checkbox" id="manga" name="frutas[]" value="Manga">
				  <label for="manga">Manga</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Suas escolhas foram:</h2>
			<?php

				if ($_SERVER["REQUEST_METHOD"] == "POST"){

					foreach ($frutas as $fruta) {
						echo "<h3>{$fruta}</h3>";
					}

				}
			?>
		</div>
	</div>
</body>
</html>
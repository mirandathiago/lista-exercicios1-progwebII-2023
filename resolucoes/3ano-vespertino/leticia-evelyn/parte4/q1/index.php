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
			<h2>Selecione suas frutas favoritas:</h2>

			<form action="index.php" method="GET">
				
			   <fieldset>
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
			  </fieldset>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Frutas escolhidas:</h2>
			

			<?php 
			
			$frutas = $_GET["frutas"] ?? [];

			foreach ($frutas as $fruta){
				echo "<li>{$fruta}</li>";
			}


			?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
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
		<h1>Questão 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="index.php" method="post">

			   <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
					<input type="checkbox" id="maca" name="frutas[]" value="Maçã" >
					<label for="maca">Maçã</label>
				</div>
				<div>
					<input type="checkbox" id="goiaba" name="frutas[]" value="Goiaba" >
					<label for="goiaba">Goiaba</label>
				</div>
				<div>
					<input type="checkbox" id="acerola" name="frutas[]" value="Acerola" >
					<label for="acerola">Acerola</label>
				</div>
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
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$frutas = $_POST["frutas"] ?? [];
					if(count($frutas) < 5){
						echo "<p class='alerta-vermelho'>Selecione no minímo 5 opções</p>";
					}else{
						foreach($frutas as $a){
							echo "<p>{$a}</p>";
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
<?php

$frutas = $_GET["frutas"] ?? "";

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
		<h1>Formulário de Frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Frutas</h2>
			<form action="index.php" methood="get">

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
				  <input type="checkbox" id="pera" name="frutas[]" value="pera">
				  <label for="pera">Pera</label>
				</div>
				<div>
				  <input type="checkbox" id="abacate" name="frutas[]" value="abacate">
				  <label for="abacate">Abacate</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="frutas[]" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
		<?php
		
		if(isset($_GET["enviar"])){
		if (!empty($frutas)) {
			foreach($frutas as $fruta){
				echo "<li> {$fruta} </li>";
			}
		}else{
			echo "Não há frutas selecionadas";
		
	}
}
?>

		</div>
	</div>
</body>
</html>
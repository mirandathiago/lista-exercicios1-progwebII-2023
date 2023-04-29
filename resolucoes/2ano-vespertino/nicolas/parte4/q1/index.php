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
		<h1>Frutas Preferidas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="get">
			  <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="pitaya" name="frutas[]" value="pitaya">
				  <label for="banana">Pitaya</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="pessego" name="frutas[]" value="pêssego">
				  <label for="uva">Pêssego</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="frutas[]" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="abacate" name="frutas[]" value="abacate">
				  <label for="laranja">Abacate</label>
				</div>
			  </fieldset>
				
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
            
            $frutas = $_GET["frutas"] ?? [];

            foreach($frutas as $fruta){
                echo "<h3>{$fruta}</h3>";
            }

            
            
            ?>
		</div>
	</div>
</body>
</html>

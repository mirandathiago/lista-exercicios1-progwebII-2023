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
		<h1>Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="get">
			  <fieldset>
				<legend>Escolha suas frutas preferidas:</legend>
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
				  <input type="checkbox" id="ameixa" name="frutas[]" value="Ameixa">
				  <label for="ameixa">Ameixa</label>
				</div>
				<div>
				  <input type="checkbox" id="melancia" name="frutas[]" value="Melancia">
				  <label for="melancia">Melancia</label>
				</div>
				<div>
				  <input type="checkbox" id="maca" name="frutas[]" value="Maçã">
				  <label for="maca">Maçã</label>
				</div>
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

            <?php

            $frutas = $_GET["frutas"] ?? [];

            foreach($frutas as $fruta){
                echo "<li>{$fruta}</li>";
            }

?>			
		</div>
	</div>
</body>
</html>
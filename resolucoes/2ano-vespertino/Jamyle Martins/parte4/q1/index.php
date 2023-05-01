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
			
			<form action="index.php" methodo="GET">
			  <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="maca" name="frutas[]" value="maçã"><!--checkbox pode multiplas vezes -->
				  <label for="maca">Maçã</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="morango"><!--toda vez que voce encontrar um campo que tem multiplos valores tem que transforma ele em um array, por isso colocamos um [] em frutas-->
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="manga" name="frutas[]" value="manga">
				  <label for="uva">Manga</label>
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
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php
            $frutas = $_GET["frutas"] ?? [];//é para resgatar o valor do campo
			// vai pegar de um a um do array frutas e coloca em fruta
			foreach($frutas as $fruta){
                echo "<h3> {$fruta}</h3>";
            }
            ?>
		</div>
	</div>
</body>
</html>
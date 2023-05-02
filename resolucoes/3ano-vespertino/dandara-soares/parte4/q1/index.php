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
		<h1> Suas Frutas Preferidas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="exemplo2.php" method="get">
			  <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="mamão" name="frutas[]" value="mamão">
				  <label for="mamão">mamão</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="limão" name="frutas[]" value="limão">
				  <label for="limão">limão</label>
				</div>
				<div>
				  <input type="checkbox" id="maça" name="frutas[]" value="maça">
				  <label for="maça">maça</label>
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

            $frutas = $_GET["frutas"] ?? [];

            foreach($frutas as $fruta){
                echo "<li>{$fruta}</li>";
            }

            //var_dump($frutas);





?>
			
		</div>
	</div>
</body>
</html>
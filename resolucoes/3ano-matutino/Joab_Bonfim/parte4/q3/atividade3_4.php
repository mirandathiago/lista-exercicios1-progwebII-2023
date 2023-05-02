<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Atividades</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css_comum.css">
</head>
<body>
	<header>
		<h1>Atividade 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="atividade3_4.php" method="get">
			  <fieldset>
				<legend>Selecione os sabores para a sua pizza:</legend>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  <label for="frango">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="nordestina" name="sabores[]" value="nordestina">
				  <label for="nordestina">Nordestina</label>
				</div>
				<div>
				  <input type="checkbox" id="Maria Bonita" name="sabores[]" value="Maria Bonita">
				  <label for="Maria Bonita">Maria Bonita</label>
				</div>
				<div>
				  <input type="checkbox" id="JK" name="sabores[]" value="JK">
				  <label for="JK">JK</label>
				</div>
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sabores de Pizza Escolhidos:</h2>
            <?php

            $sabores = $_GET["sabores"] ?? [];

            foreach($sabores as $sabores){
                echo "<h3>{$sabores}</h3>";
            }

            ?>
		</div>
	</div>
</body>
</html>
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
		<h1>Sabores de pizza</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="questao3_4.php" method="get">
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
				  <input type="checkbox" id="dombasilience" name="sabores[]" value="dombasilience">
				  <label for="dombasilience">Dombasilience</label>
				</div>
				<div>
				  <input type="checkbox" id="nordestina" name="sabores[]" value="nordestina">
				  <label for="nordestina">Nordestina</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php

            $sabores = $_GET["sabores"] ?? [];

            foreach($sabores as $sabores){
                echo "<h4>{$sabores}</h4>";
            }



            ?>
		</div>
	</div>
</body>
</html>
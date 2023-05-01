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
				<legend>Selecione o sabor de pizza que deseja:</legend>
				<div>
				  <input type="checkbox" id="marguerita" name="sabores[]" value="marguerita">
				  <label for="marguerita">Marguerita</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="baiana" name="sabores[]" value="baiana">
				  <label for="baiana">Baiana</label>
				</div>
				<div>
				  <input type="checkbox" id="queijo" name="sabores[]" value="queijo">
				  <label for="queijo">Queijo</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
			  </fieldset>
				
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
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

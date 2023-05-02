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
		<h1>Pizzaria Seu Sabor</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Selecione os sabores da sua pizza:</h2>

			<form action="index.php" method="GET">
				
			   <fieldset>
				<div>
				  <input type="checkbox" id="frangocomcatupiry" name="sabores[]" value="Frango com Catupiry">
				  <label for="Frango com Catupiry">Frango com Catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="carneseca" name="sabores[]" value="Carne Seca">
				  <label for="Carne Seca">Carne Seca</label>
				</div>
				<div>
				  <input type="checkbox" id="camarão" name="sabores[]" value="Camarão">
				  <label for="Camarão">Camarão</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="Calabresa">
				  <label for="Calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="bacon" name="sabores[]" value="Bacon">
				  <label for="Bacon">Bacon</label>
				</div>
			  </fieldset>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sabores escolhidos:</h2>
			

			<?php 
			
			$sabores = $_GET["sabores"] ?? [];

			foreach ($sabores as $sabor){
				echo "<li>{$sabor}</li>";
			}


			?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
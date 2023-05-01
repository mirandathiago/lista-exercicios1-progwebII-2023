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
		<h1>Selecionador de Sabores de Pizza</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="post">
			   <fieldset>
				<legend>Formulário de Sabores de Pizza</legend>
				<div>
				  <input type="checkbox" id="Calabresa" name="sabores[]" value="Calabresa">
				  <label for="Calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="Carne Seca" name="sabores[]" value="Carne Seca">
				  <label for="Carne Seca">Carne Seca</label>
				</div>
				<div>
				  <input type="checkbox" id="Frango com Catupiry" name="sabores[]" value="Frango com Catupiry">
				  <label for="Frango com Catupiry">Frango com Catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="Marguerita" name="sabores[]" value="Marguerita">
				  <label for="Marguerita">Marguerita</label>
				</div>
				<div>
				  <input type="checkbox" id="Quatro Queijos" name="sabores[]" value="Quatro Queijos">
				  <label for="Quatro Queijos">Quatro Queijos</label>
				</div>
				<div>
				  <input type="checkbox" id="Portuguesa" name="sabores[]" value="Portuguesa">
				  <label for="Portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="Beijinho" name="sabores[]" value="Beijinho">
				  <label for="Beijinho">Beijinho</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
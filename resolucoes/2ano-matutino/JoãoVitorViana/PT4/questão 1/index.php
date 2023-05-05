<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário Frutas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Frutas</h2>
			<form action="resposta.php" method="post">
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="pitaia" name="frutas[]" value="pitaia">
				  <label for="pitaia">Pitáia</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="frutas[]" value="uva">
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="melao" name="frutas[]" value="melao">
				  <label for="melao">Melão</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="frutas[]" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>
			  </fieldset>
			  <br>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
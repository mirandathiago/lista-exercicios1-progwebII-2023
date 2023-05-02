
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
		<h1>Frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Frutas</h2>
			<form action="resposta.php" method="post">
				<legend>Selecione suas frutas:</legend>
				<div>
				  <input type="checkbox" id="banana" name="frutas[]" value="banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="maça" name="frutas[]" value="maça">
				  <label for="morango">Maçã</label>
				</div>
				<div>
				  <input type="checkbox" id="manga" name="frutas[]" value="manga">
				  <label for="uva">Manga</label>
				</div>
				<div>
				  <input type="checkbox" id="kiwi" name="frutas[]" value="kiwi">
				  <label for="abacaxi">Kiwi</label>
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
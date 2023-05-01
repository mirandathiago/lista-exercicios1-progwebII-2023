<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Frutinhas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Frutinhas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="post">
				<fieldset>
					<legend>Selecione suas frutas favoritas:</legend>
						<div>
							<!-- O name foi tratado como uma array para que o php possa selecionar mais de um valor caso for o caso (name="frutas[]"). -->
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
				</fieldset>

					<button name="enviar"> Enviar </button>
				</form>
		</div>		
	</div>
</body>
</html>

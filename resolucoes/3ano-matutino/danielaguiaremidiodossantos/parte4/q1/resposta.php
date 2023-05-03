<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>quitanda</title>
	<link href="https://fonts.googleapis.com/css?family"rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>seleçao de frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="receber1.php" method="post">
				<fieldset>
					<legend>faça sua seleçao de frutas:</legend>
						<div>
							
							<input type="checkbox" id="maça" name="frutas[]" value="maça">
							<label for="maça">maça</label>
						</div>
						<div>
							<input type="checkbox" id="morango" name="frutas[]" value="Morango">
							<label for="morango">Morango</label>
						</div>
						<div>
							<input type="checkbox" id="mamao" name="frutas[]" value="mamao">
							<label for="mamao">mamao</label>
						</div>
						<div>
							<input type="checkbox" id="pera" name="frutas[]" value="pera">
							<label for="pera">pera</label>
						</div>
						<div>
							<input type="checkbox" id="laranja" name="frutas[]" value="Laranja">
							<label for="laranja">Laranja</label>
						</div>
				</fieldset>
					<button name="despaxar"> despaxar </button>
				</form>
		</div>		
	</div>
</body>
</html>
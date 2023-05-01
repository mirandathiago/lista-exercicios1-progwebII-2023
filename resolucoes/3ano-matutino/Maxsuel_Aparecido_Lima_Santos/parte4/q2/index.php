<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sorteio de Pessoas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sorteio de Pessoas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="post">
				<fieldset>
					<legend>Insira o nome de várias pessoas:</legend>
					<textarea name="nomes" rows="10"></textarea>
				</fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
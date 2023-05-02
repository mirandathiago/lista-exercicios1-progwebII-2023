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
		<h1>Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
        <form action="receber.php" method="post">
		<h2>Marque a caixa das frutas que você mais gosta. </h2>
        <input type="checkbox" name="frutas[]" value="tangerina">Tangerina<br>
        <input type="checkbox" name="frutas[]" value="graviola">Graviola<br>
        <input type="checkbox" name="frutas[]" value="limao">Limão<br>
        <input type="checkbox" name="frutas[]" value="cajá">Cajá<br>
        <input type="checkbox" name="frutas[]" value="banana">Banana<br>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>
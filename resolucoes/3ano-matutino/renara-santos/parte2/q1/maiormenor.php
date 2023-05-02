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
		<h1>Verificar maior e menor número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Digite 3 números diferentes e veja o maior e o menor entre eles! </h2>
			<form action="receber.php" method="post">
			<p>Número 1:</p>
			<input type="number" name="numero1">
			<p>Número 2:</p>
            <input type="number" name="numero2">
			<p>Número 3:</p>
            <input type="number" name="numero3">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>
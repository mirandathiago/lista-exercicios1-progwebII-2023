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
		<h1>Numero de Pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Digite um intervalo de numeros para receber a quantidade de numeros pares entre eles! </h2>
			<form action="receber1.php" method="post">
			<p>Começo do intervalo:</p>
			<input type="number" name="comeco">
			<p>Fim do intervalo:</p>
            <input type="number" name="fim">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>

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
		<h1>Pizzaria Narita</h1>
	</header>
	<div class="container">
		<div class="box formulario">
        <form action="receber.php" method="post">
		<h2>Escolha o sabor de sua pizza! </h2>
        <input type="checkbox" name="pizza[]" value="4queijos">Quatro Queijos<br>
        <input type="checkbox" name="pizza[]" value="chocolate">Chocolate<br>
        <input type="checkbox" name="pizza[]" value="lombo">Lombo<br>
        <input type="checkbox" name="pizza[]" value="cogumelo">Cogumelos<br>
        <input type="checkbox" name="pizza[]" value="calabresa">Calabresa<br>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>
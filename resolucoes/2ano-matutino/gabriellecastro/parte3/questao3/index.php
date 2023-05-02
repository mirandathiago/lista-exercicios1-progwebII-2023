<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para descobrir quantidade de números pares em 1 intervalo</h1>
		
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Intervalo numérico: </h2>
			<form action="resposta.php" method="post">
				<label>Informe o inicio do intervalo:
					<input type="number" id="num1" name="num1" required>
				</label>
				<label>Informe o fim do intervalo:
					<input type="number" id="num2" name="num2" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
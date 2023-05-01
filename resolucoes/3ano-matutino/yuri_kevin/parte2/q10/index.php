
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
		<h1>Questão 10 Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dia útil ou sextou?</h2>
			<form action = "resposta.php" method = "get">
				<select name ="escolha">
				<option value="Domingo">1</option>
				<option value="Segunda-feira">2</option>
				<option value="Terça-feira">3</option>
				<option value="Quarta-feira">4</option>
				<option value="Quinta-feira">5</option>
				<option value="Sexta-feira">6</option>
				<option value="Sabádo">7</option>

				</select>
				<button name="enviar"> Enviar </button>
			
			</form>
		</div>		
	</div>
</body>
</html>
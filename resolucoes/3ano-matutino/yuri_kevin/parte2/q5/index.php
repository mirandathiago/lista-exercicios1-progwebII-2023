
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
		<h1>Questão 5 Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Par ou Ímpar de cria</h2>
			<form action = "resposta.php" method = "get">
				<label>Digite o número de 0 a 10:
					<input type="number" name="num" min = "0" max = "10" required>
				</label>
				<select name ="escolha" required>
				<option value="par">Par</option>
				<option value="impar">Impar</option>
				</select>
				<button name="enviar"> Enviar </button>
			
			</form>
		</div>		
	</div>
</body>
</html>
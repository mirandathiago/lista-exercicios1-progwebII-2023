
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
		<h1>Questão 7 Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Caixa Eletrônico</h2>
			<form action = "resposta.php" method = "get">
				<label>Digite o valor a ser sacado:
					<input type="number" name="numero" min = "1" required>
				</label>
				<button name="enviar"> Enviar </button>
			
			</form>
		</div>		
	</div>
</body>
</html>
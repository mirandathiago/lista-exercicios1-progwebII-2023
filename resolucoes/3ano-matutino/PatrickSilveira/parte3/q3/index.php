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
		<h1>Números Pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha os campos baixo para saber a quantidade de números pares existente no intervalo informado:</h2>
			<form action="resposta.php" method="post">
				<label>Início do intervalo:
					<input type="number" id="inicio" name="inicio" required>
				</label>

				<label>Fim do intervalo:
					<input type="number" id="final" name="final" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
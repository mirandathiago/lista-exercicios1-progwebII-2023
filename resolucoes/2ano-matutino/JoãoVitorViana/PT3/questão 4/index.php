<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Soma dos Número Até 'N'</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="post">
				<label>Informe o valor:
					<input type="number" id="valor1" name="valor1" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
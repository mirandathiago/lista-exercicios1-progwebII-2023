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
		<h1>Formulário de Desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite o valor!(10% de desconto será aplicado)</h2>
			<form action="resposta.php" method="post">
				<label>Valor
					<input type="text" id="valor" name="valor" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
				<label>numerohabitantesA:
					<input type="number" id="nome" name="numerohabitantesA" required>taxaA
					<input type="number" id="nome" name="taxaA" required>numerohabitantesB
					<input type="number" id="nome" name="numerohabitantesB" required>taxaB
					<input type="number" id="nome" name="taxaB" required>
			</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
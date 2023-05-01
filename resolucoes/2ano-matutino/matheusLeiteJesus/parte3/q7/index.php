
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
		<h1>Formulário Caixa Eletrônico</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Caixa Eletrônico</h2>
			<form action="resposta.php" method="get">
				
				<label>Informe a quantia que deseja sacar:
					<input type="number" id="dinheiro" name="dinheiro" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>
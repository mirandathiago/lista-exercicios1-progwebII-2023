<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Informe o Nome para Receber uma Mensagem</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite o Nome:</h2>
			<form action="resposta.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>
				<button name="mensagem"> Gerar Mensagem </button>
			</form>
		</div>		
	</div>
</body>
</html>
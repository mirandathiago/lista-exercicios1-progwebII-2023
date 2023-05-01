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
		<h1>Formulário de Pagamento</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os Dados do Emprestimo</h2>
			<form action="resposta.php" method="post">
				<label>Valor a pagar:
					<input type="number" id="valordiv" name="valordiv" required>
				</label>

				<label>Taxa de juros:
					<input type="number" id="taxa" name="taxa" required>
				</label>

				<label>Pagamento mensal:
					<input type="number" id="pagmensal" name="pagmensal" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
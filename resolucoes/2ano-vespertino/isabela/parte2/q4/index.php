<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para esquação de 2 grau</h1>
		<!-- criei o form utilizando o método post e enviando  o preço informado para o php-->
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe as seguintes questões</h2>
			<form action="resposta.php" method="post">
				<label>O valor de A:
					<input type="number" id="A" name="A" required>
				</label>
				<label>O valor de B:
					<input type="number" id="B" name="B" required>
				</label>
				<label>O valor de C:
					<input type="number" id="C" name="C" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
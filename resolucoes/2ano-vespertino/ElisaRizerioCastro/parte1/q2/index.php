<!DOCTYPE html>
<!--Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.-->

<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<title>Formulário</title>
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário para descobrir o dobro e a metade de 1 número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Cadastro do número</h2>
				<form action="resposta.php" method ="post">
					<label>Informe 1 número:
						<input type="number" id="nome" name="n" required>
					<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
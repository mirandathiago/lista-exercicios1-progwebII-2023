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
		<h1>Formulário de Maior e Menor Número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Diga tres números</h2>
			<form action="resposta.php" method="post">
				<label>Num 1:
					<input type="number"  name="n1" required> 

				<label>Num 2:
					<input type="number"  name="n2" required>
				</label>

				<label>Num 3:
					<input type="number" name="n3" required>
				</label>

			
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
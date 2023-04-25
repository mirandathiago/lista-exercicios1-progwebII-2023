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
		<h1>Formulário de Distância</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
				<label>Distância em Km:
					<input type="number"  name="distancia" required>
				</label>

				<label>Tempo em h:
					<input type="number"  name="tempo" required>
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
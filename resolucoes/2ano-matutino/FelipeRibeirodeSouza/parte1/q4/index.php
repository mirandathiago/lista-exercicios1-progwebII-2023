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
		<h1>Quantidade de Combustível necessária para viagem:</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite as informações requisitadas:</h2>
			<form action="resposta.php" method="post">
				<label>Distância a ser percorrida em quilometros:
					<input type="number" id="distância" name="distancia" required step="0.1" value="1">
				</label>

				<label>Consumo médio de combustivel em Km/litro:
					<input type="number" id="consumo" name="consumo" required required step="0.1" value="1">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
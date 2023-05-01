
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
		<h1>Formulário da Agenda de João</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Determine o dia</h2>
			<form action="resposta.php" method="get">
				
				<label> Determine o número do dia da semana:
					<select name="dia">
						<option></option>
						<option value="1">Dia 1</option>
						<option value="2">Dia 2</option>
						<option value="3">Dia 3</option>
						<option value="4">Dia 4</option>
						<option value="5">Dia 5</option>
						<option value="6">Dia 6</option>
						<option value="7">Dia 7</option>
					</select>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>
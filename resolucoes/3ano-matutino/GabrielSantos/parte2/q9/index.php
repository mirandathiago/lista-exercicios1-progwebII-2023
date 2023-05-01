
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Passeio do dia</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>ROLÊ DE HOJE</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha corretamente as informações abaixo:</h2>
			<form action="resposta.php" method="post">
				<label for="opcao">Como está o clima hoje?</label>
					<select id="opcao" name="opcao">
						<option value="ensolarado">Ensolarado</option>
						<option value="ameno">Ameno</option>
						<option value="chuvoso">Chuvoso</option>
						<option value="nublado">Nublado</option>
						<option value="tempestuoso">Tempestuoso</option>
					</select>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
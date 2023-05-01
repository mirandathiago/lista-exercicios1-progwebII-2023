<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Local Adequado</h1>
	</header>
	<div class="container">
		<!-- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ela precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. -->
		<div class="box formulario">
			
			<form action="resposta.php" method="GET">
			<h2>Informe</h2>
			<label>Como está o clima hoje:
					<select name="clima" required>
						<option></option>
						<option value="1">Ensolarado</option>
						<option value="2">Ameno</option>
						<option value="3">Chuvoso</option>
						<option value="4">Nublado</option>
						<option value="5">Tempestuoso</option>
					</select>
			   </label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
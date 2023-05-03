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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="get"> 

			    <label>Nome:
					<input type="text"  name="nome" required>
				</label>

				<label>Clima Ensolarado:
					<input type="text"  name="ensolarado" required>
				</label>

				<label>Clima Ameno:
					<input type="text"  name="ameno" required>
				</label>

				<label>Clima Chuvoso:
					<input type="text"  name="chuvoso" required>
				</label>

				<label>Clima Nublado:
					<input type="text"  name="nublado" required>
				</label>

				<label>Clima Tempestuoso:
					<input type="text"  name="tempestuoso" required>
				</label>

				<label>O Clima é:
					<select name="clima">
					<option <?=$clima=="" ? "selected" : "1" ?> value="ensolarado"></option>
					<option <?=$clima=="" ? "selected" : "2" ?> value="ameno"></option>
					<option <?=$clima=="" ? "selected" : "3" ?> value="chuvoso"></option>
					<option <?=$clima=="" ? "selected" : "4" ?> value="nublado"></option>
					<option <?=$clima=="" ? "selected" : "5" ?> value="tempestuoso"></option>
					</select>
				</label>

				

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
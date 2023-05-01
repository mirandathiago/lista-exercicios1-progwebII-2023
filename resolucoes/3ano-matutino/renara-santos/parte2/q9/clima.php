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
		<h1>Locais e Clima</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Fale como está o clima hoje! </h2>
			<form action="receber.php" method="post">
			<p>Clima:</p>
			<select name="clima" id="clima">
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
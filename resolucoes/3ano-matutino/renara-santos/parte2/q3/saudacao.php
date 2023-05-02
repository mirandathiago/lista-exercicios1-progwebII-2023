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
		<h1>Saudação</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fale O Seu Nome Por Favor! </h2>
			<form action="receber.php" method="post">
			    <p>Seu Nome:</p>
                <input type="name" name="nome"><br></br>
			    <button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>

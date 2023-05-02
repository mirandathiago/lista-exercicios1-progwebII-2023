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
		<h1>Tabuada de um número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Digite o número que você quer saber a tabuada! </h2>
			<form action="receber.php" method="post">
                    <input type="number" name="numero"><br></br>
			        <button name="enviar"> Enviar </button>
			    </form>
		</div>
	</div>
</body>
</html>

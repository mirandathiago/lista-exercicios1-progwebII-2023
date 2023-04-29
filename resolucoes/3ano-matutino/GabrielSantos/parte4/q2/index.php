
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sorteio</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>SORTEAR UMA PESSOA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha corretamente as informações abaixo:</h2>
			<form action="resposta.php" method="post">
				<label>Escreva cada nome das pessoas em uma linha:</label>
				<textarea id="texto" name="texto" rows="13" cols="50"></textarea><br>
				

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
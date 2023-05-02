<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./index.php">
</head>
<body>
	<header>
		<h1>Calculadora de Velocidade Media</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="receber1.php" method="get">
                <h2>Digite o tempo em horas que voce quer percorrer a distancia em km</h2>
			<p>Tempo:</p>
                <input type="number" name="tempo">
                <p>Distancia:</p>
            <input type="number" name="distancia">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>

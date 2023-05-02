<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de Velocidade Media</h1>
	</header>

		<div class="box resposta">
			<h2>Resposta</h2>
            
            <?php
			$distancia = $_GET['distancia'] ?? 0 ;
			$tempo = $_GET['tempo'] ?? 0;
			$velocidademedia = $distancia / $tempo; 

			echo "A velocidade média para completar a distância nesse tempo é $velocidademedia km /h<br>";

			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
</body>
</html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Transformador de Celsius para Fahrenheit</h1>
	</header>

		<div class="box resposta">
			<h2>Resposta</h2>
            
            <?php
			$celsius = $_POST['celsius'] ?? 0 ;
			$fahrenheit = ($celsius*9/5) +32; 

			echo "A temperatura em celsius é $celsius e em fahreinheit é $fahrenheit<br>";

			?>
			<a href="temp.php" class="link">Voltar</a>
		</div>
</body>
</html>
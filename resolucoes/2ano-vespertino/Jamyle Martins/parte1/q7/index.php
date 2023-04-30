
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
		<h1>Calculadora em PHP</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora</h2>
			<form action="index.php" method="post">
				<label>entre com a temperatura em Celsius:
					<input type="number" name="temp">
				</label>
				
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			 <?php 

		$temp = $_POST["temp"] ?? 0;//é para resgatar o valor do campo

		$fah= ($temp * 1.8) + 32;//calculo para transformar de celsius para fahrenheit
                 
            echo "<h2> A  temperatura em Fahrenheit: {$fah}°F"
             ?>
		</div>
	</div>
</body>
</html>

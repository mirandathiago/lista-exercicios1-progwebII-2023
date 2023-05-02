?>
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
		<h1>Calculadora de Litros por KM </h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dados:</h2>
			<form action="mediaconsumo.php" method="get">
				<label>Quilometros Andados (KM):
					<input type="number" name="kmandados" value="<?=$kmandados?>" required>
				</label>

				<label>Consumo Médio de Combustível:
					<input type="number" name="consumomedio" value="<?=$consumomedio?>" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
<?php
	$celsius = $_GET["celsius"] ?? 100;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 7</title>
</head>
<body>
    <header>
	    <h1>Converter temperatura</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe a temperatura</h2> <br>

			<form action="index.php" method="get">
				<label>Temperatura em °C: 
                    <input type="number" name="celsius" step="0.01" value="<?=$celsius?>" required>
                </label>
                <button>Enviar</button>
			</form>
		</div>	
		
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$fahrenheit = ($celsius * 9 / 5) + 32;
			?>
			<h2><?=$fahrenheit?> °F</h2>
		</div>
	</div>
</body>
</html>
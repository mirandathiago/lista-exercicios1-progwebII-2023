<?php
	$kwh=$_POST["kwh"] ?? 0;
	$valor=0;
	if ($kwh <= 100) {
		$valor = $kwh * 0.5;
	} elseif ($kwh <= 200) {
		$valor = $kwh  * 0.7;
	} else {
		$valor = $kwh * 0.87;
	}

	if ($valor < 20) {
		$valor = 20;
	}


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
		<h1>Consumo de Energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha o seguinte campo</h2>
			<form action="index.php" method="post">
				<label>Qual o valor de consumo de energia em kWh?:
					<input type="number" id="kwh" name="kwh" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "Valor da conta de energia: R$ " . number_format($valor, 2, ",", ".");
			?>
		</div>
	</div>
</body>
</html>
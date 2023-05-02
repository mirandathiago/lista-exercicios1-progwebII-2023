<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dívida</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tempo para pagar uma dívida</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$divida = $_POST["divida"] ?? 0;
			$juros = $_POST["juros"] ?? 0;
			$pago = $_POST["pago"] ?? 0;
			$juros = $juros / 100;
			$meses = 0;

			while($divida > 0){
				$divida += ($divida * $juros) - $pago;
				$meses ++;
			}
			echo "<p>Serão necessários {$meses} meses para quitar a dívida.</p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
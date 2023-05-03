<?php
	$divida = $_POST["divida"] ?? 5000;
	$juros = $_POST["juros"] ?? 2;
	$valorpago = $_POST["valor"] ?? 200;

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$i = 0;

				while( $divida > 0){
					$divida -= $valorpago;
					$divida += ($divida * ($juros/100));
					$i++;
				}
			?>
			<p>Serão necessários <?=$i?> meses para quitar a dívida.</p>
		</div>
	</div>
</body>
</html>
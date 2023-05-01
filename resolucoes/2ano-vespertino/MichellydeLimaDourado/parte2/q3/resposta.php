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
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				
				date_default_timezone_set('America/Bahia');
				$data = date('H');
				$nome = $_GET["nome"];

				
				if($data >= '05' && $data <= '12'){
					echo "<p>Bom dia {$nome}!</p>";
				} else if($data >= '13' && $data <= '18'){
					echo "<p>Boa tarde {$nome}!</p>";
				}else if($data > '18' && $data <= '23'){
					echo "<p>Boa noite {$nome}!</p>";
				}else{
					echo "<p>Vá dormir! É de madrugada {$nome}!</p>";
				}

			?>
		</div>
	</div>
</body>
</html>
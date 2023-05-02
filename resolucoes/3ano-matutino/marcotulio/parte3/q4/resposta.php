<?php
	$numero = $_POST["numero"] ?? 5;
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
		<h1>Calculadora de Soma de Números</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Fórmulário de de Soma de Números</h2>
			<?php
				$somanumeros = 0;
				for($i=1;$i<=$numero;$i++){
					$somanumeros += $i;
				}
				echo "Soma dos números de 1 a ". $numero . ": " . $somanumeros;
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
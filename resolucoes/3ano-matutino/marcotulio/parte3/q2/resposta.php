<?php
	$numero = $_POST["numero"] ?? 7;
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
		<h1>Calculadora de Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de Tabuada</h2>
			<?php
				$resultado = 1;
				$i = 1;
				echo "Tabuada do número 7: <br>";
				while($i <= 4){
					$resultado = $numero * $i;
					echo "{$numero} x {$i} = {$resultado} <br>";
					$i++;
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
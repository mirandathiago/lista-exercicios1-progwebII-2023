<?php
	$numero=$_POST["numero"] ?? 0;
	$dobro=2*$numero;
	$metade=$numero/2;
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
		<h1>Dobro e metade de um número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Vamos calcular</h2>
			<form action="index.php" method="post">
				<label>Insira um número:
					<input type="number" id="numero" name="numero" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                echo "<p> Dobro: {$dobro} | Metade: {$metade}</p>"
            ?>
			
		</div>
	</div>
</body>
</html>
<?php
 
	$numero= $_POST["numero"] ?? 10; 
	$dobro= $numero * 2; 
	$metade= $numero / 2; 

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
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="index.php" method="post">
				<label>Numero:
					<input type="number"  name="numero" required>
				</label>

			

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<p class="alerta-verde"> O numero inicial é <?=$numero?> e o seu dobro é <?=$dobro?> e sua metade é igual a <?=$metade?></p>
			
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
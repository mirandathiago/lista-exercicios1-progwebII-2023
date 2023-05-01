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
			<h2>Somas dos  Números de 1 a n</h2>
			<form action="formulario-resposta.php" method="post">
				<label>valor de N:
					<input type="number"  name="numero" required>
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Soma dos Números</h2>
			
			<?php

			$n = $_POST["numero"] ?? 0;
			$cont = 1;
			$sm = 0;

			for($cont; $cont <= $n; $cont++){
				$sm = $sm +  $cont;
			}

			echo "<p class='alerta-verde'>A soma dos numeros de 1 a {$n} er: {$sm}.</p>";
			
			?>

		</div>
	</div>
</body>
</html>
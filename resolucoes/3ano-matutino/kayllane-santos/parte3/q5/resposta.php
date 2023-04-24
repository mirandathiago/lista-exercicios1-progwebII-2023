<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo Dívida</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				//calcule em quantos meses a dívida será paga e apresente o resultado ao usuário utilizando o comando WHILE.
				$valor = (float) $_POST["valor"] ?? 0;
				$taxa = (float) $_POST["taxa"] ?? 0;
				$valormensal = (float) $_POST["valormensal"] ?? 0;
				$meses = 0;

				while($valor > 0){
					$valor += $valor * $taxa;
					$valor -= $valormensal;
					$meses++;

				}

				echo "<p class='alerta-azul'>Serão necessários {$meses} meses para quitar a dívida. </p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
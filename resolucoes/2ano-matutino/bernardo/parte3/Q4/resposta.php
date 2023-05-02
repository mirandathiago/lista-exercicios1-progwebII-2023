<!DOCTYPE html>
<html>
<head>
<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <form>
		<div class="box resposta">
			<h2>Soma dos Números</h2>

			<?php

			$n = $_POST["num1"] ?? 0;
			$soma = 0;
			for($cont=1; $cont <= $n; $cont++){
				$soma = $soma +  $cont;
			}

			echo "<p>A soma dos numeros de 1 a {$n} é: {$soma}.</p>";

			?>


	</div>
    </form>
    </div>
</body>
</html>
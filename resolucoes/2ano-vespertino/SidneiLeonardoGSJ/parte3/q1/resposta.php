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
		<h1>Fatorial de um Número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$val1 = $_POST["val1"] ?? 0;
				$fatorial = 1;

				echo "<h2 class='alerta-verde'> ".$val1."! = ";
				for($i = 1; $i <= $val1; $i++){//for para achar seus antecessores
					$fatorial = $fatorial*$i;//parte que multiplica o número pelos antecessores
					echo $i;
					if($i < $val1){
						echo " x ";
					}
				}
				echo " = ".$fatorial."</h2>";

			?>
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
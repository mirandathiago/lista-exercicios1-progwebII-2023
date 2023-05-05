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
				if($_SERVER["REQUEST_METHOD"] == "POST"){

					$pessoas = $_POST["pessoas"] ?? "";
					$pessoas = explode("\n",$pessoas);
					
					$quant = count($pessoas);

					echo "<h3>Foram cadastradas {$quant} pessoas para o sorteio.</h3>";
					foreach($pessoas as $pessoa){
						echo "<li> {$pessoa} </li>";
					}

					$sorteado = array_rand($pessoas);

					echo "<p class='alerta-verde'>Sorteado: {$pessoas[$sorteado]}</p>";

				}


			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
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
		<h1>Questão 10</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="post">
				
				<label>Número de linhas:
					<input type="number" id="linhas" name="linhas" required min="0">
				</label>

				<button name="enviar"> Enviar </button>
			</form>

		</div>

		<div class="box resposta">
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$linhas = $_POST["linhas"] ?? 5;
					for($i = 1; $i <= $linhas; $i++){
						for($a = 1; $a <= $i; $a++){
							echo " * ";
						}
						echo "<br>";
					}
				}
			?>	
		</div>
	</div>
</body>
</html>
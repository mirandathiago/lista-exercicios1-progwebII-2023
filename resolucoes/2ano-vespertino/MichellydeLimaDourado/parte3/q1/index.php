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
				<label>Número:
					<input type="number" id="num" name="num" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
		<div class="box resposta">
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$numero = $_POST["num"];
					if($numero == 0){
						echo "<p>O fatorial de {$numero} é igual a 1</p>";
					}else{
						$resultado = 1;
						for($n = 1; $n <= $numero; $n++){
							
							$resultado = $resultado * $n;
							
						}
						echo "<p> O fatorial de {$numero} é igual a {$resultado}</p>";
					}


				}
			?>
		</div>
	</div>
</body>
</html>
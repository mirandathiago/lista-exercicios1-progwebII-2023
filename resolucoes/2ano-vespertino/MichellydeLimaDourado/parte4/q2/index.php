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
		<h1>Questão 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="index.php" method="post">
				
				<label>Nomes:
					<textarea id="nomes" name="nomes" required></textarea>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php
				
				$metodo = $_SERVER["REQUEST_METHOD"];

				if($metodo == "POST"){
					$nomes = explode("\n",$_POST["nomes"]) ?? [];
					
					$nn = count($nomes);
					$numero = rand(0,$nn - 1);
					echo "<p>Os nomes disponiveis são:<br>";
					foreach($nomes as $nome){
						echo "{$nome}<br>";
					}
					echo "</p><h3>Nome sorteado foi: {$nomes[$numero]}</h3>";

					
				}
			?>
		</div>
	</div>
</body>
</html>
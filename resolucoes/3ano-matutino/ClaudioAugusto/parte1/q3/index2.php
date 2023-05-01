<?php

	$nota1 = $_POST["nota1"] ?? "";
	$nota2 = $_POST["nota2"] ?? "";
	$nota3 = $_POST["nota3"] ?? "";


	


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
		<h1>Formulário de Média</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe as Nota das Provas</h2>
			<form action="index2.php" method="post">
			<label>Nota Prova 1:
					<input type="number" id="nota1" name="nota1" step="0.1" max="10" value="<?=$nota1?>" required>
				</label>

				<label>Nota Prova 2:
					<input type="number" id="nota2" name="nota2" step="0.1" max="10" value="<?=$nota2?>" required>
				</label>

				<label>Nota Prova 3:
					<input type="number" id="nota3" name="nota3" step="0.1" max="10" value="<?=$nota3?>" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Média Final</h2>
			<p>
				<?php
				$metodo = $_SERVER["REQUEST_METHOD"];	

				if ($metodo == "POST") {
					$media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;
					echo "<p>{$media}</p>";
				}else{
                    echo "<p> Aguardando a operação </p>";
                }
				
				?>
		
			</p>

            <a href="index2.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
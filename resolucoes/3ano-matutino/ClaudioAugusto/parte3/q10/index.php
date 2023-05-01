<?php
$linhas = $_POST["linhas"]?? "";
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
		<h1>* Asteriscos *</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os dados</h2>
			<form action="index.php" method="post">
				<label>Nº Linhas:
					<input type="number" id="linhas" name="linhas" value="<?=$linhas?>" placeholder="Aguardando" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$metodo = $_SERVER["REQUEST_METHOD"];

				$linhas = $_POST["linhas"]?? 0;

				if ($metodo == "POST") {
					
					for ($i = 0; $i <= $linhas; $i++) { 
					for ($j = 1; $j <= $i ; $j++) { 
						echo "*";
					};
					echo "<br>";
				};
				} else {
					echo "<p>Aguardando</p>";
				};
								
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>QUESTÃO 10 / PARTE 3</title>
	<style type="text/css">
		.pattern {
			font-family: monospace;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<?php
		if (isset($_POST['num_linhas'])) {
			$num_linhas = $_POST['num_linhas'];

			if (filter_var($num_linhas, FILTER_VALIDATE_INT) && $num_linhas > 0) {
				echo "<h2>Padrão de Asteriscos</h2>";
				echo "<p class='pattern'>";

				for ($i = 1; $i <= $num_linhas; $i++) {
					for ($j = 1; $j <= $i; $j++) {
						echo "* ";
					}
					echo "<br>";
				}

				echo "</p>";
			} else {
				echo "<h2>Número inválido!</h2>";
			}
		}
	?>
	<a href="index.php"> Voltar </a>
</body>
</html>
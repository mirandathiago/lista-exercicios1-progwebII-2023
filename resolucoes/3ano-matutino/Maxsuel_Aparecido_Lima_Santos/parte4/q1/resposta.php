<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['enviar'])) {
			$frutas = isset($_POST['frutas']) ? $_POST['frutas'] : null;
		}
	} else {
		echo "ERRO 404!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Frutinhas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Frutinhas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php
				if ($frutas) {
					echo "<p class='alerta-vermelho'>Frutas selecionadas:</p>";
					echo "<ul>";
					foreach ($frutas as $fruta) {
						echo "<li class='alerta-verde'>" . ucfirst($fruta) . "</li>"; // Define o primeiro caracter como maiúsculo
					}
					echo "</ul>";
				} else {
					echo "<p>Nenhuma fruta selecionada.</p>"; // Se tiver vazio então é nulo, definido pelo isset no código mais acima
				}
			?>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
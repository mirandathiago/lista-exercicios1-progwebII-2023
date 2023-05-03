<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['enviar'])) {
			$frutas = isset($_POST['frutas']) ? $_POST['frutas'] : null;
		}
	} else {
		echo "nao funcionou";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>quitanda</title>
	<link href="https://fonts.googleapis.com/css?family" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>selecao de frutas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php
				if($frutas) {
					echo "<p class='alerta-vermelho'> suas frutas foram selecionadas :</p>";
					echo "<ul>";
					foreach ($frutas as $frutas) {
						echo "<li class='alerta-verde'>". ucfirst ($frutas)."</li>";
					}
					echo "</ul>";
				} else {
					echo "<p> que triste Nenhuma fruta foi selecionada.</p>"; 
				}
			?>

            <a href="receber1.php" class="link">voltando</a>
		</div>
	</div>
</body>
</html>
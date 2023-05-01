<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$valor = isset($_POST["valor"]) ? intval($_POST["valor"]) : null; // Verifica se é inteiro

		if (!is_null($valor)) {
			$cont = 1;
			$tabuada = "<table><tbody>";

			while ($cont <= 10) {
				$resultado = $cont * $valor;
				// .= vai concatenar os valores
				$tabuada .= "<tr><td>{$valor} x {$cont} = </td><td>{$resultado}</td></tr>";
				$cont++;
			}

			$tabuada .= "</tbody></table>";
			$mensagem = $tabuada;
		} else {
			$mensagem = "<p class='alerta-vermelho'>Por favor, informe um número inteiro válido.</p>";
		}
	} else {
		$mensagem = "ERRO 404!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tabuada</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?= $mensagem ?> 
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
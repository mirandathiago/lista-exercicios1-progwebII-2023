<?php
$linhas = $_POST['linhas'] ?? 0;

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	if (!is_numeric($linhas)) {
		$error = 'Por favor insira valores validos';
	} else {
		$linhas = intval($linhas);
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 10</title>
	<link href="https://fonts.googleapis.com/ css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 10</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Asteriscos</h2>
			<form method="post" action="./index.php">
				<label>Quantidade de linhas:
					<input type="number" id="linhas" name="linhas" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor total a ser pago</h2>
			<?php
			if ($error) {
				echo "<p class='alerta-vermelho'>{$error}</p>";
			} else {
				echo "<p class='alerta-verde'>";
				for ($i = 1; $i <= $linhas; $i++) {
					for ($j = 0; $j < $i; $j++) {
						echo "* ";
					}
					echo "<br>";
				}
				echo "</p>";
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>
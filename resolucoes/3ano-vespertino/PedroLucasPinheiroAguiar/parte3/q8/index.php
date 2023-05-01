<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$PopA = $_POST["PopA"] ?? 1;
	$PopB = $_POST["PopB"] ?? 1;
	$TaxA = $_POST["TaxA"] ?? 1;
	$TaxB = $_POST["TaxB"] ?? 1;
	$Yrs = 0;

	while ($PopA < $PopB) {
		$PopA = $PopA + ($PopA * ($TaxA/100));
		$PopB = $PopB + ($PopB * ($TaxB/100));
		$Yrs++;
	}
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
		<h1>Calculadora de População</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os Dados</h2>
			<form action="index.php" method="post">
				<label>População da cidade A:
					<input type="number" id="nome" name="PopA" required>
				</label>
				<label>Taxa Crescimento A:
					<input type="number" id="nome" name="TaxA" max="100" min="1" step=".1" required>
				</label>
				<label>População da cidade B:
					<input type="number" id="nome" name="PopB" required>
				</label>
				<label>Taxa Crescimento B:
					<input type="number" id="nome" name="TaxB" max="100" min="1" step=".1" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
				if($metodo == "POST"){
					echo "<p class='alerta-verde'>A população da cidade A ultrapassará a populção da cidade B em <b>$Yrs</b> anos.</p>";
				} else {
					echo "<p class='alerta-amarelo'>aguardando o envio</p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
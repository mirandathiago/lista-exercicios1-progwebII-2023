<?php
$n1 = $_POST['n1']??0;
$n2 = $_POST['n2']??0;
$n3 = $_POST['n3']??0;

// Verifica o maior número
if ($n1 > $n2 && $n1 > $n3) {
	$maior = $n1;
} elseif ($n2 > $n1 && $n2 > $n3) {
	$maior = $n2;
} else {
	$maior = $n3;
}

// Verifica o menor número
if ($n1 < $n2 && $n1 < $n3) {
	$menor = $n1;
} elseif ($n2 < $n1 && $n2 < $n3) {
	$menor = $n2;
} else {
	$menor = $n3;
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
		<h1>Maior e menor número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira</h2>
			<form action="index.php" method="post">
				<label>Primeiro número:
					<input type="number" id="n1" name="n1" required>
				</label>
				<label>Segundo número:
					<input type="number" id="n2" name="n2" required>
				</label>
				<label>Terceiro número:
					<input type="number" id="n3" name="n3" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "Menor número: $menor e Maior número: $maior";
			?>
		</div>
	</div>
</body>
</html>
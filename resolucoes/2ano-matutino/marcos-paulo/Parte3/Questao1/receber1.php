<?php
/*

    Questão Número 21 da lista, Parte 3.

*/
$numero = $_GET["numero"] ?? 2;
$fatorial = 1;

for ($i = $numero; $i >= 1; $i--) {
	$fatorial = $fatorial * $i;
}

$msg =  $fatorial;

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questao 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<header>
		<h1>Fatorial</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>
				<?php
				for ($i = $numero; $i >= 1; $i--) {
					if ($i > 1) {
						echo "{$i} X ";
					} else if ($i == 1) {
						echo "{$i} = ".$msg;
					}
				}
				?>
			</p>


			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>
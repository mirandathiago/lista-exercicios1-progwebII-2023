
<?php

$nota1 = $_POST["nota1"] ?? "";
$nota2 = $_POST["nota2"] ?? "";
$nota3 = $_POST["nota3"] ?? "";

$peso1 = 2;
$peso2 = 3;
$peso3 = 5;

$n1 = ($nota1 * $peso1);
$n2 = ($nota2 * $peso2);
$n3 = ($nota3 * $peso3);
$media = ($n1 + $n2 + $n3) / ($peso1 + $peso2 + $peso3);

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
		<h1>Parte-1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Notas</h2>
			<form method="post" action="index.php">
				<label>Nota1:
					<input type="text" name="nota1"  required >
				</label>
				<label>Nota2:
					<input type="text" name="nota2" required >
				</label>
                <label>Nota3:
					<input  type="text" name="nota3" required  >
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Media final: <?=$media?>.</p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
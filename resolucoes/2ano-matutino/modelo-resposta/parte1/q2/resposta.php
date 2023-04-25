<?php
	$n1 = $_POST["numero"] ?? 0;
	$db = $n1 * 2;
	$mt = $n1 / 2;

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
		<h1>Formulário de Dobro e Metade</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-vermelho">O dobro de <?=$n1?> er: <?=$db?></p>
			<p class="alerta-verde">A metade <?=$n1?> de er: <?=$mt?></p>
			
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
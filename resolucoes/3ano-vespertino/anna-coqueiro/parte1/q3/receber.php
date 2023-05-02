<?php
	$nota1=$_GET["nota1"];
	$nota2=$_GET["nota2"];
	$nota3=$_GET["nota3"];

	$media=($nota1*2 + $nota2*3 + $nota3*5) / 10;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estiloif.css">
</head>
<body>
	<div class="container">
		<div class="box resposta">
			<h1>Média final do aluno</h1>
			<p> A média final do aluno é <?=number_format($media,2)?></p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
<?php
    $nota1 = $_GET["nota1"] ?? 0;
    $nota2 = $_GET["nota2"] ?? 0;
    $nota3 = $_GET["nota3"] ?? 0;

    $mediafinal = ($nota1 + $nota2 + $nota3) / 3;

    if($mediafinal >= 6){
        $ap = "Aprovado, Parabéns!";
    }else{
        $ap = "Reprovado"; 
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
		<h1>Calculadora de Média</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Rsultado</h2>
			<h1>A soma das notas <?=$nota1?> + <?=$nota2?> + <?=$nota3?> tem o resultado da média de <?=$mediafinal?> - <?=$ap?></h1>
        
			<a href="principal.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
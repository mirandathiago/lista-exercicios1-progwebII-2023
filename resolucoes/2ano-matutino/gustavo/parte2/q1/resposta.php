<?php
	$n1 = $_POST["n1"] ?? 0;
	$n2 = $_POST["n2"] ?? 0;
	$n3 = $_POST["n3"] ?? 0;

	if($n1>$n2 && $n1>$n3){
		$maior=$n1; 
	}else if($n2>$n3){
		$maior=$n2;
	}else{
		$maior=$n3;
	}

	if($n1<$n2 && $n1<$n3){
		$menor=$n1; 
	}else if($n2<$n3){
		$menor=$n2;
	}else{
		$menor=$n3;
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
		<h1>Formulário de Maior e Menor Número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Maior Número</p>
			<p class="alerta-verde"><?=$maior?></p>
			<p>Menor Número</p>
			<p class="alerta-verde"><?=$menor?></p>
	
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
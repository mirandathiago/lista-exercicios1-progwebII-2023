<?php
	$n1 = $_GET["num1"] ?? 1;
	$n2 = $_GET["num2"] ?? 2;
	$n3 = $_GET["num3"] ?? 3;

	if($n1 == $n2 && $n1 == $n3){
		$mensagem = "Todos os numeros são iguais";
	}if($n1 > $n2 && $n1 > $n3){
		if($n2 > $n3){
			$mensagem = "Menor número: $n3 || Maior número: $n1";
		}else{
			$mensagem = "Menor número: $n2 || Maior número: $n1";
		}
	}

	if($n2 > $n1 && $n2 > $n3){
		if($n1 > $n3){
			$mensagem = "Menor número: $n3 || Maior número: $n2";
		}else{
			$mensagem = "Menor número: $n1 || Maior número: $n2";
		}
	}

	if($n3 > $n1 && $n3 > $n2){
		if($n1 > $n2){
			$mensagem = "Menor número: $n2 || Maior número: $n3";
		}else{
			$mensagem = "Menor número: $n1 || Maior número: $n3";
		}
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
		<h1>Maior e Menor</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Ordem</h2>
			<p><?=$mensagem?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
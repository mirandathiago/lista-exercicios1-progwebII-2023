<?php 
	$escolha = $_GET["escolha"] ?? "par";
	$num = $_GET["num"] ?? 2;
	$num2 = rand(0, 10);

	echo $num2;
	echo $escolha;
	
	$soma = $num + $num2;
	
	if($soma % 2 == 0){
		$guardar = "par";
	}
	else{
		$guardar = "impar";
	}
	if($escolha == $guardar){
		$vencedor = "Usuário";
	}
	else{
		$vencedor = "Computador";
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
		<h1>Impar ou Par</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>O usuário escolheu <?=$escolha?> e o número <?=$num?>. O computador sorteou o número <?=$num2?>, e a soma deles é <?=$soma?>.  <?=$soma?> é <?=$guardar?> e o <?=$vencedor?> venceu.
</p>
		</div>
	</div>
</body>
</html>
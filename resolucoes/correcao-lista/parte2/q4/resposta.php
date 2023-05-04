<?php

   $mensagem = "";

   if(!isset($_GET["numA"]) || !isset($_GET["numB"]) || !isset($_GET["numC"]) ){
		$mensagem = "<p class='alerta-vermelho'>Um dos números não foi passado</p>";
   }else if(!is_numeric($_GET["numA"]) && !is_numeric($_GET["numB"]) && !is_numeric($_GET["numC"])){
		$mensagem = "<p class='alerta-vermelho'>Algum dos valores não é um número</p>";
   }else if(empty($_GET["numA"]) || empty($_GET["numB"]) || empty($_GET["numC"]) ){
	$mensagem = "<p class='alerta-vermelho'>Algum dos valores não foi passado</p>";
   }else{

		$numA = $_GET["numA"] ?? 0;
		$numB = $_GET["numB"] ?? 0;
		$numC = $_GET["numC"] ?? 0;



		$delta = ($numB ** 2) - 4 * $numA * $numC;

		if($delta < 0){
			$mensagem = "<p class='alerta-amarelo'>Essa Equação não possui raízes reais</p>";
		}else if( $delta == 0){
			$raiz1 = -$numB / (2*$numA);
			$mensagem = "<p class='alerta-verde'>Essa Equação possui apenas uma raiz e o valor dela é {$raiz1}</p>";
		}else{
			$raiz1 = (-$numB + sqrt($delta)) / (2*$numA);
			$raiz2 = (-$numB - sqrt($delta)) / (2*$numA);
			$mensagem = "<p class='alerta-verde'>Essa Equação possui duas raizes e o valor delas são {$raiz1} e {$raiz2}</p>";
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?=$mensagem?>
			<a href="index.php?numA=<?=$numA?>&numB=<?=$numB?>&numC=<?=$numC?>" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
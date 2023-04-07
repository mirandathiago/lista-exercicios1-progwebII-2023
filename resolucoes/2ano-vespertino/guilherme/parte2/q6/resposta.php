<?php

$a=$_GET["a"];
$b=$_GET["b"];
$c=$_GET["c"];

if($a + $b > $c && $a + $c > $b && $c + $b > $a){
	if($a==$b && $a==$c && $b==$c){
		$mensagem="Estes valores formam um triângulo equilátero, pois tem os três lados iguais";
	}
	else if($a==$b || $a==$c || $b==$c){
		$mensagem="Estes valores formam um triângulo isóceles, pois tem dois lados iguais";
	}
	else{
		$mensagem="Estes valores formam um triângulo escaleno, pois tem os três lados diferentes";
	}
}
else{
	$mensagem="Esses valores não formam um triângulo";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 6</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>TRIGONOMETRIA</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p><?=$mensagem?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
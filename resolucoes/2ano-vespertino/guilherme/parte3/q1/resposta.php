<?php

$numero=$_GET["num"];
$ntxt=$numero;
$r=$numero*($numero-1);

if($r==0){
	$r=1;
}
else{
	for($i=2; $i<$numero; $i++){
		$r=$r*($numero-$i);
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>FATORIAL</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>O fatorial de <?=$ntxt?> é <?=$r?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
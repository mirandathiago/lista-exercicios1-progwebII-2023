<?php

    $n1=$_POST['n1']?? 1;
    $n2=$_POST['n2']?? 2;
    $n3=$_POST['n3']?? 3;


    $maior = $n1;
    $menor = $n1;

  if($n2>$maior){
		$maior = $n1;

	} if($n3 > $maior){
		$maior = $n3;

	} if($n2 < $menor){
		$menor = $n2;

	} if($n3 < $menor){
		$menor = $n3;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>estrutura condicional</title>
	<link href="estilo.css" rel="stylesheet">  
</head>
<body>
	<header>
		<h1>estrutura condicional</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>conclusao</h2>
			<p class="alerta-verde">maior numero: <?= $maior ?></p>
			<p class="alerta-amarelo">Menor numero: <?= $menor ?></p>
            <a href="receber1.php" class="link">voltando</a>
		</div>
	</div>
</body>
</html>
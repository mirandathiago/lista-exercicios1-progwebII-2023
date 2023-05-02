<?php
    /*
    4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. 
	Crie um formulário que permita ao usuário informar um número inteiro N e, 
	utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
			Exemplo de entrada:
			N: 5
			Exemplo de saída: Soma dos números de 1 a 5: 15


    */

    $n = $_POST["n"];
	$soma = 0;

	for($i=1; $i<=$n; $i++){
		$soma += $i;
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
		<h1>Somador</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Soma dos números de 1 a <?="{$n}"?>:</h2>
			<p><?="{$soma}"?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
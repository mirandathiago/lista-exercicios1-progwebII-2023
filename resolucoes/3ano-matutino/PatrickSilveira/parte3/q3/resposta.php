<?php
    /*
    3- João deseja saber quantos números pares existem em um intervalo. 
	Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e,
	utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.

	Exemplo de entrada:
	Início do intervalo: 3
	Fim do intervalo: 15
	Exemplo de saída:
	Quantidade de números pares: 6

    */

    $inicio = $_POST["inicio"];
    $final = $_POST["final"];

	$qtd=0;

	for($i=$inicio; $i<=$final; $i++){
		if ($i%2 == 0) {
			$qtd++;
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
		<h1>Números Pares</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Quantidade de números pares:</h2>
			<p><?="{$qtd}"?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
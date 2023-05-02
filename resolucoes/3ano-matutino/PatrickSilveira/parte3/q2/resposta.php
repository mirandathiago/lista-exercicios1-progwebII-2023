<?php
    /*
    2- Desenvolva um programa que receba como entrada um número inteiro e 
	calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.

		Entrada: 7
		Saída: 
		Tabuada do número 7:
		7 x 1 = 7
		7 x 2 = 14
		7 x 3 = 21
		7 x 4 = 28

    */

    $n = $_POST["n"];
    $i = 0;
    

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
		<h1>Gerador de Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada de numero <?="{$n}"?>:</h2>
			<?php 
				while($i < 10){
					$i++;
					$resultado = $n * $i;
			?>
			<p><?="{$n}"?> x <?="{$i}"?> = <?="{$resultado}"?></p>
			<?php } ?>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
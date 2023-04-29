<?php 

	/* 
	 * 2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.
	 
	 > Entrada: 7
	 > Saída: 
	 Tabuada do número 7:
	 7 x 1 = 7
	 7 x 2 = 14
	 7 x 3 = 21
	 7 x 4 = 28

	*/

	$num = $_POST["num"] ?? 0;

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
			<p>
				<?="Tabuada do número {$num} <br>"?>

				<?php
					for ($i=0; $i < 11; $i++) { 
						$mult = $num * $i;
						echo "{$num} x {$i} = {$mult} <br>";
					}
				?>
			</p>
			
            <a href="index.php" class="index.php">Voltar</a>
		</div>
	</div>
</body>
</html>
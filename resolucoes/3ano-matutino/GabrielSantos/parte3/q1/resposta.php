<?php 

	/* 
	 * 1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 
	 
	 ? O fatorial é representado por:
	 ? n! = n x (n – 1) x (n – 2) x (n – 3)!
	 ? Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura condicional para verificar esta situação.

	 > Entrada: 3
	 > Saída: 6 
	 -> Cálculo realizado: 3 x 2 x 1


	*/

	$num = $_POST["num"] ?? 0;
	$fatorial = 1;

	if ($num != 0) {
		for ($i=$num; $i > 0; $i--) { 
			$fatorial *= $i;
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
			<p>
				<?="O fatorial de {$num} é {$fatorial}"?>
			</p>
			
            <a href="index.php" class="index.php">Voltar</a>
		</div>
	</div>
</body>
</html>
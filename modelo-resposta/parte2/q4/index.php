<?php
	$a = $_GET["a"] ?? 1;
	$b = $_GET["b"] ?? 0;
	$c = $_GET["c"] ?? 0;

	if($a == 0){
		$mensagem = "O valor de A não pode ser 0, tente novamente!";
	}else{
		$delta = $b**2 - 4*$a*$c;

	if($delta < 0){
		$mensagem = "A equação não possui raízes reais.";
	}else if($delta > 0){
		$raiz1 = (-$b + sqrt($delta))/(2*$a);
		$raiz2 = (-$b - sqrt($delta))/(2*$a);
		$mensagem = "A equação possui duas raízes reais: {$raiz1} e {$raiz2}";
	}else{
		$raiz = (-$b + sqrt($delta))/(2*$a);
		$mensagem = "A equação possui apenas uma raiz real: {$raiz}";
	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Equação de Grau 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Coeficientes</h2>
			<form action="index.php" method="get">
				<label>Insira o valor de A:
					<input type="number" id="nome" name="a" required>
				</label>

				<label>Insira o valor de B:
					<input type="number" id="nome" name="b" required>
				</label>

				<label>Insira o valor de C:
					<input type="number" id="nome" name="c" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Raízes da Equação Quadrática</h2>
			<br>
			<p><strong>Equação: </strong><?="{$a}x² + {$b}x + {$c} = 0"?></p>
			<p class="alerta-amarelo"><?=$mensagem?></p>
		</div>
	</div>
</body>
</html>
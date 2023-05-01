<?php
	$l1 = $_GET["la"] ?? 1;
	$l2 = $_GET["lb"] ?? 1;
	$l3 = $_GET["lc"] ?? 1;

	if(($l1 < ($l2 + $l3)) && ($l2 < ($l1 + $l3)) && ($l3 < ($l1 + $l2))){
		$alerta = "alerta-verde";

		if($l1 == $l2 && $l2 == $l3){
			$mensagem = "Triângulo é equilátero!";
		}else if(($l1 == $l2) || ($l1 == $l3) || ($l2 == $l3)){
			$mensagem = "Triângulo é isósceles!";
		}else{
			$mensagem = "Triângulo é escaleno!";
		}
	}else{
		$alerta = "alerta-vermelho";
		$mensagem = "Triângulo não existe!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 6</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Triângulo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Lados</h2>
			<br>
			<form action="index.php" method="get">
				<label>Insira o valor do lado a:
					<input type="number" id="nome" name="la" min=1 required>
				</label>

				<label>Insira o valor do lado b:
					<input type="number" id="nome" name="lb" min=1 required>
				</label>

				<label>Insira o valor do lado c:
					<input type="number" id="nome" name="lc" min=1 required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<br>
			<p class="<?=$alerta?>"><?=$mensagem?></p>
		</div>
	</div>
</body>
</html>
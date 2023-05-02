<?php
	$nome = $_GET["nome"] ?? "";
	$idade = $_GET["idade"] ?? 1;
	$peso = $_GET["peso"] ?? 1;
	$altura = $_GET["altura"] ?? 1;
	$genero = $_GET["genero"] ?? 1;

	switch($genero){
		case 1:
			$tmb = 88.36 + (13.4*$peso) + (4.8*$altura) - (5.7*$idade);
			$mensagem = "{$nome}, sua Taxa de Metabolismo Basal é de aproximadamente {$tmb} calorias por dia.";
			break;
		case 2:
			$tmb = 447.6 + (9.2*$peso) + (3.1*$altura) - (4.3*$idade);
			$mensagem = "{$nome}, sua Taxa de Metabolismo Basal é de aproximadamente {$tmb} calorias por dia.";
			break;
		default:
			$mensagem = "Não é possível definir sua TMB.";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 7</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de TMB</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dados</h2>
			<br>
			<form action="index.php" method="get">
				<label>Insira seu nome:
					<input type="text" id="nome" name="nome" required>
				</label>

				<label>Insira a idade (em anos):
					<input type="number" id="nome" name="idade" min=1 required>
				</label>

				<label>Insira o peso (em kg):
					<input type="number" id="nome" name="peso" step=0.01 min=1 required>
				</label>

				<label>Insira a altura (em cm):
					<input type="number" id="nome" name="altura" step=0.01 min=1 required>
				</label>

				<label>Gênero:
				<br>
				<input type=radio name=genero value="1">M
				<br>
				<input type=radio name=genero value="2">F
				<br><br>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<br>
			<p class="alerta-amarelo"><?=$mensagem?></p>
		</div>
	</div>
</body>
</html>
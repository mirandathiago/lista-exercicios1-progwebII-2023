<?php
	$n = $_GET["n"] ?? "";
	$alerta = "alerta-verde";

	switch($clima){
		case 1:
			$alerta = "alerta-amarelo";
			$mensagem = "O domingo não é um dia útil (fim de semana)!";
			break;
		case 2:
			$mensagem = "A segunda-feira é um dia útil!";
			break;
		case 3:
			$mensagem = "A terça-feira é um dia útil!";
			break;
		case 4:
			$mensagem = "A quarta-feira é um dia útil!";
			break;
		case 5:
			$mensagem = "A quinta-feira é um dia útil!";
			break;
		case 6:
			$mensagem = "A sexta-feira é um dia útil!";
			break;
		case 7:
			$alerta = "alerta-amarelo";
			$mensagem = "O sábado não é um dia útil (fim de semana)!";
			break;
		default:
			$alerta = "alerta-vermelho";
			$mensagem = "Inválido!";
			break;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fatoral</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>n!</h2>
			<br>
			<form action="index.php" method="post">
			<label>Insira o valor do lado a:
				<input type="number" id="nome" name="la" min=1 required>
			</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<br>
			<p class="<?=$alerta?>"><?=$mensagem?></p>
		</div>
	</div>
</body>
</html>
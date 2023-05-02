<?php 

$util = $_POST ["util"];

switch($util){
	case "1":
		$dia = "Domingo";
		$i = "<p class='alerta-amarelo'>{$dia} Não é dia útil.</p>";
		
			break;
	case "2":
		$dia = "Segunda";
		$i = "<p class='alerta-verde'> {$dia} É dia útil.</p>";		
		break;
	case "3":
		$dia = "Terça";
		$i = "<p class='alerta-verde'> {$dia} É dia útil.</p>";
		break;
	case "4":
		$dia = "Quarta";
		$i = "<p class='alerta-verde'> {$dia} É dia útil.</p>";
		break;
	case "5":
		$dia = "Quinta";
		$i = "<p class='alerta-verde'> {$dia} É dia útil.</p>";

		break;
	case "6":
		$dia = "Sexta";
		$i = "<p class='alerta-verde'> {$dia} É dia útil.</p>";

		break;
	case "7":
		$dia = "Sábado";
		$i =  "<p class='alerta-amarelo'>{$dia} Não é dia útil.</p>";

		break;
		default:
		$i = "<p class='alerta-vermelho'> Opção inválida. Tente outra vez!</p>";
		break;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>RESULTADO</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>É Dia útil?</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			
			<p> <?=$i?></p>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
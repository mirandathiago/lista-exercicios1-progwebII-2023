<!--João trabalha em uma empresa que funciona de segunda a sexta-feira, mas ele tem um compromisso importante no trabalho que precisa ser realizado em um dia específico da semana. Para ajudá-lo, você deve desenvolver um programa que permita que ele informe o dia da semana em que esse compromisso será realizado e o programa deve informar se é um dia útil, final de semana ou se o dia informado é inválido.

Para isso, crie um formulário com um campo select que permita a escolha do dia da semana (de 1 a 7), e utilize o comando switch para verificar em qual dia da semana foi selecionado e, em seguida, informar se o dia é útil (segunda a sexta-feira), final de semana (sábado e domingo) ou inválido (número menor que 1 ou maior que 7). Considere que Domingo é o dia 1 e Sábado o dia 7.
Exemplo de entrada: Selecionado no campo select o valor 3 (que representa a quarta-feira)
Exemplo de saída: A quarta-feira é um dia útil.

-->

<?php
	$dia = $_GET["dia"] ?? 1;


	switch ($dia) {
		case '1':
			$d = "Domingo";
			$resp = "final de semana";
			break;
		case '2':
			$d = "Segunda-Feira";
			$resp = "dia útil";
			break;
		case '3':
			$d = "Terça-Feira";
			$resp = "dia útil";
			break;
		case '4':
			$d = "Quarta-Feira";
			$resp = "dia útil";
			break;
		case '5':
			$d = "Quinta-Feira";
			$resp = "dia útil";
			break;
		case '6':
			$d = "Sexta-Feira";
			$resp = "dia útil";
			break;
		case '7':
			$d = "Sábado";
			$resp = "final de semana";
			break;
		default:
			$d = "O dia informado";
			$resp = "inválido";
			break;
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
		<h1>Formulário da Agenda de João</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<!-- <p>A resposta será exibida aqui.</p> -->
			<!-- <p class="alerta-vermelho">Mensagem de alerta aqui</p> -->
			<p class="alerta-verde"><?=$d?> é <?=$resp?>.<p>
			<!-- <p class="alerta-amarelo">Mensagem de alerta aqui</p> -->
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
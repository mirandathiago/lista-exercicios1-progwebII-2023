<?php
    /*
    10- João trabalha em uma empresa que funciona de segunda a sexta-feira, mas ele tem um compromisso 
    importante no trabalho que precisa ser realizado em um dia específico da semana. Para ajudá-lo, você
    deve desenvolver um programa que permita que ele informe o dia da semana em que esse compromisso será 
    realizado e o programa deve informar se é um dia útil, final de semana ou se o dia informado é inválido.

    Para isso, crie um formulário com um campo select que permita a escolha do dia da semana (de 1 a 7), 
    e utilize o comando switch para verificar em qual dia da semana foi selecionado e, em seguida, informar 
    se o dia é útil (segunda a sexta-feira), final de semana (sábado e domingo) ou inválido (número menor que
     1 ou maior que 7). Considere que Domingo é o dia 1 e Sábado o dia 7.
    Exemplo de entrada: Selecionado no campo select o valor 3 (que representa a quarta-feira)
    Exemplo de saída: A quarta-feira é um dia útil.

    */

	$sem = $_GET["semana"] ?? ""; //recupera o valor selecionado em semana e vai para a variável sem
	$mensagem = "";

	switch($sem){ //a depender do valor escolhido em semana, sem será um case diferente
		case '1':
			$mensagem = "Final de Semana";
		break;
		case '2':
			$mensagem = "Dia Útil";
		break;
		case '3':
			$mensagem = "Dia Útil";
		break;
		case '4':
			$mensagem = "Dia Útil";
		break;
		case '5':
			$mensagem = "Dia Útil";
		break;
		case '6':
			$mensagem = "Dia Útil";
		break;
		case '7':
			$mensagem = "Final de Semana";
		break;
		default:
			$mensagem = "Dia Inválido";
		break;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Semana</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Semana</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dias Úteis</h2>
			<form action = "index.php" method = "get">				
			<select name="semana">
				<option <?=$sem == "1" ? "selected" : ""?> value = "1">Domingo</option> <?php//sem atribui um case para cada opção do campo semana?>
				<option <?=$sem == "2" ? "selected" : ""?> value = "2">Segunda</option>
				<option <?=$sem == "3" ? "selected" : ""?> value = "3">Terça</option>
				<option <?=$sem == "4" ? "selected" : ""?> value = "4">Quarta</option>
				<option <?=$sem == "5" ? "selected" : ""?> value = "5">Quinta</option>
				<option <?=$sem == "6" ? "selected" : ""?> value = "6">Sexta</option>
				<option <?=$sem == "7" ? "selected" : ""?> value = "7">Sábado</option>
			</select>
			<button>Enviar</button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>	
            <?php
			echo "<h3>{$mensagem}</h3>"
			?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>

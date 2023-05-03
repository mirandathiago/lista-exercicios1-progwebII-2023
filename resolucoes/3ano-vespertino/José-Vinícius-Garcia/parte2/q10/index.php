<?php
/*10- João trabalha em uma empresa que funciona de segunda a sexta-feira,
 mas ele tem um compromisso importante no trabalho que precisa ser realizado
  em um dia específico da semana. Para ajudá-lo, você deve desenvolver um programa 
  que permita que ele informe o dia da semana em que esse compromisso será realizado
   e o programa deve informar se é um dia útil, final de semana ou se o dia informado é inválido.

Para isso, crie um formulário com um campo select que permita a escolha do dia da semana (de 1 a 7),
 e utilize o comando switch para verificar em qual dia da semana foi selecionado e, em seguida, informar 
 se o dia é útil (segunda a sexta-feira), final de semana (sábado e domingo) ou inválido (número menor que
 1 ou maior que 7). Considere que Domingo é o dia 1 e Sábado o dia 7.

*/
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
		<h1>Dias úteis</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>É dia útil?</h2>
			<form action="resposta.php" method="post">
				<label >
				<input type="select" name="util" required value = "1">
				</label>
			
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
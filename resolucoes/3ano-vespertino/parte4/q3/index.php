<?php
/*

3- João deseja saber quantos números pares existem em um intervalo. 
Crie um formulário que permita ao usuário informar os dois números que 
delimitam o intervalo e, utilizando um laço de repetição do tipo for, 
calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6




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
		
	</header>
	<div class="container">
		<div class="box formulario">
    		
		
			<form action= "receber1.php" method="get">

				<label> Início do intervalo
					<input type="number" name="inicio" required step = "1" value = "3">
				</label>
				<label> Fim do intervalo
					<input type="number" name="fim" required step = "1" value = "15" >
				</label>
				


				<button name="enviar"> Enviar </button>
			</form>
			
		</div>		
	</div>
</body>
</html>
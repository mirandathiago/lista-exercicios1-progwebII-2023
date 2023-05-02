<?php
    /*
        Questão Número 23 da lista, Parte 3.

    João deseja saber quantos números pares existem em um intervalo. 
    Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e,
    utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
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
	<title>Questao 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Números pares em um intervalo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action = "receber3.php" method = "get">

				<label>Insira o Valor inicial para o intervalo: 
					<input type="number" name="intervaloA" required>
				</label>

                <label>Insira o Valor final para o intervalo: 
					<input type="number" name="intervaloB" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
<?php
/*

7- Um caixa eletrônico precisa calcular a quantidade mínima de cédulas necessárias para entregar um determinado valor solicitado pelo cliente. Crie um programa que receba um valor inteiro de um formulário e calcule o menor número de notas possíveis para decompor o valor informado. Considere que as notas disponíveis são de R$100, R$50, R$20, R$10, R$5, R$2 e R$1. Ao final, mostre o valor lido e a quantidade de cada tipo de nota necessária para completar o valor. 
Exemplo de entrada: 254
Exemplo de saída:
Valor informado: R$ 254
2 nota(s) de R$100
1 nota(s) de R$50
0 nota(s) de R$20
0 nota(s) de R$10
0 nota(s) de R$5
2 nota(s) de R$2
0 nota(s) de R$1

Dica: Utilize um comando de repetição para verificar a quantidade de cada nota necessária para decompor o valor informado, e vá subtraindo esse valor do valor total até que ele seja zerado. Lembre-se de utilizar um contador para representar a quantidade de notas de cada cédula. Isso pode ser feito utilizando variáveis separadas para cada cédula. Será necessário utilizar uma estrutura condicional para determinar qual variável deve ser incrementada em cada iteração da repetição.



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

			<form action="resposta.php" method="get">

				
				<label> Valor a ser sacado
					<input type="number" name="valor" required value = 254>
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
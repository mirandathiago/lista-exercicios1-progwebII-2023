<?php
/*

8-Maria precisa calcular o valor total que ela irá pagar pela compra de um celular no cartão na loja Magazine PHP. Para ajudá-la, crie um formulário 
que receba o valor do celular e em quantas vezes o produto será dividido, podendo ser de 0 a 12x, sendo que 0 seria a compra à vista. Sabendo que a 
loja Magazine PHP utiliza juros simples em sua cobrança e cobra 4% de juros a cada mês, crie um programa em PHP que receba os dados do formulário e 
calcule o valor total a ser pago por Maria.
Exemplos:
Entrada: Valor do celular: R$ 1.000,00 | Parcelas: 0
Saída: Valor total a pagar: R$ 1.000,00
Entrada: Valor do celular: R$ 1.000,00 | Parcelas: 2
Saída: Valor total a pagar: R$ 1.080,00
Entrada: Valor do celular: R$ 1.000,00 | Parcelas: 12
Saída: Valor total a pagar: R$ 1.480,00





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

				<label>Valor do produto
					<input type="number" name="produto" required step = "0.1" value = "1000">
				</label>
				<label>Parcelas
					<input type="number" name="parcelas" required step = "0.1" value = "0">
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
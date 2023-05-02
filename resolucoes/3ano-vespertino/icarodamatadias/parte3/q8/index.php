<?php
/*

8- O Instituto Nacional de Estatística precisa de um programa que calcule em quantos anos a população de uma cidade A irá ultrapassar a população de uma cidade B, considerando suas respectivas taxas de crescimento. O programa deve solicitar ao usuário o número atual de habitantes e a taxa anual de crescimento de cada cidade através de um formulário. Caso a população de A já seja maior do que a população de B, o programa deve informar que a cidade A já tem mais habitantes do que a cidade B e encerrar. Já se a taxa de crescimento de A for menor do que a taxa de crescimento de B, o programa deve informar que a cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.

O programa deve exibir o número de anos necessários para que a população de A ultrapasse a população de B e também a população de cada cidade ao final desse período. O usuário deverá informar os valores através de um formulário e a solução deve utilizar alguma estrutura de repetição para realizar os cálculos necessários.
Entrada: número de habitantes da cidade A: 80000, taxa anual de crescimento da cidade A (%): 3, número de habitantes da cidade B: 200000, taxa anual de crescimento da cidade B (%): 1.5
Saída: Serão necessários 63 anos para que a população da cidade A ultrapasse a da cidade B.

 

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

				<h3>População atualda cidade A</h3>
				<label> 
					<input type="number" name="populacaoA" required step = "0.1" value = "80000">
				</label>
				<br><br>
				<h3>Taxa de crescimento da cisade A</h3>
				<label> 
					<input type="number" name="taxaA" required step = "0.01" value = "3">
				</label>
				<h3>População atual da cidade B</h3>
				<label> 
					<input type="number" name="populacaoB" required step = "0.1" value = "200000">
				</label>
				<br><br>
				<h3>Taxa de crescimento da cidade B</h3>
				<label> 
					<input type="number" name="taxaB" required step = "0.01" value = "1.5">
				</label>
				


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
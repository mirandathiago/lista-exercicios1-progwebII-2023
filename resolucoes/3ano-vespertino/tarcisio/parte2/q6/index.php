<?php
/*

6- Desenvolva um formulário em PHP que permita ao usuário inserir os valores dos três lados de um triângulo. 
O programa deve verificar se é possível formar um triângulo com os valores informados e, caso seja possível, 
indicar o tipo de triângulo formado.

Para que seja possível formar um triângulo, a soma dos dois lados menores deve ser maior que o lado maior. 
Caso contrário, não é possível formar um triângulo.
Após a verificação, o programa deve indicar o tipo de triângulo formado, baseado nos valores informados, 
utilizando a seguinte lógica:

Equilátero: triângulo com três lados iguais;
Isósceles: triângulo com dois lados iguais;
Escaleno: triângulo com todos os lados diferentes.

Exemplo de entrada/saída:

Entrada: lado1 = 5, lado2 = 5, lado3 = 5
Saída: É possível formar um triângulo equilátero.

Entrada: lado1 = 9, lado2 = 5, lado3 = 3
Saída: Não é possível formar um triângulo.

Entrada: lado1 = 5, lado2 = 6, lado3 = 5
Saída: É possível formar um triângulo isósceles.

Entrada: lado1 = 4, lado2 = 9, lado3 = 8
Saída: É possível formar um triângulo escaleno.



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

			<form action="receber1.php" method="get">

				<label> A
					<input type="number" name="a" required step = "1" value = "3">
				</label>
				<label> B
					<input type="number" name="b" required step = "1" value = "5">
				</label>
				<label> C
					<input type="number" name="c" required step = "1" value = "3">
				</label>
				


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
<!---6- Desenvolva um formulário em PHP que permita ao usuário inserir os valores dos três lados de um triângulo. O programa deve verificar se é possível formar um triângulo 
com os valores informados e, caso seja possível, indicar o tipo de triângulo formado.

Para que seja possível formar um triângulo, a soma dos dois lados menores deve ser maior que o lado maior. Caso contrário, não é possível formar um triângulo.
Após a verificação, o programa deve indicar o tipo de triângulo formado, baseado nos valores informados, utilizando a seguinte lógica:
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
Saída: É possível formar um triângulo escaleno.-->

<!DOCTYPE html>
<html>
<head>
	<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="resposta.php" method="post">

            <h1>Numero dos lados do triangulo :</h1>

   
            <label >lado  1:
                <input type="number" name="num1">
            </label>
            <label>lado  2:
                <input type="number" name="num2">
            </label>
            <label>lado  3:
                <input type="number" name="num3">
            </label>

           
            <button>Mostrar</button>
		</form>
	</div>
</body>
</html>


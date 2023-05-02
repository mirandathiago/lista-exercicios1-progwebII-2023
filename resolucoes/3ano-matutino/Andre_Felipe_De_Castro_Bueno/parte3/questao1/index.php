<?php 
/* 
1- O fatorial de um número é calculado pela multiplicação desse
número por todos os seus antecessores até chegar ao número 1.
Desenvolva um programa que receba como entrada através de um
formulário um número inteiro e calcule o seu fatorial utilizando o
comando FOR.
O fatorial é representado por:
n! = n x (n – 1) x (n – 2) x (n – 3)!
Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura
condicional para verificar esta situação.
Entrada: 3
Saída: 6
-> Cálculo realizado: 3 x 2 x 1
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <form action="resposta.php" method="post">
            <h1></h1>
            <label>
                Insira um número para que seja feita a fatorial:
                <input type="number" name="num" value="0" min="0">
            </label>
            <button>Jogar</button>
		</form>
        
	</div>
</body>
</html>
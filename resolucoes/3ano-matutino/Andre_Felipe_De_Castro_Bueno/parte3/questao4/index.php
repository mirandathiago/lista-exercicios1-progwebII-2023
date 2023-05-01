<?php
/* 
4- Joãozinho está estudando matemática e precisa saber qual é o
resultado da soma dos números de 1 a N. Crie um formulário que
permita ao usuário informar um número inteiro N e, utilizando um
laço de repetição do tipo for, calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5
Exemplo de saída: Soma dos números de 1 a 5: 15
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
                Insira um número:
                <input type="number" name="num1" value="1" min="1">
                Insira outro:
                <input type="number" name="num2" value="" min="0">
            </label>
            <button>Jogar</button>
		</form>
        
	</div>
</body>
</html>
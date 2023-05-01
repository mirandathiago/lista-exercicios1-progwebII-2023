<?php 
/* 
3- João deseja saber quantos números pares existem em um intervalo.
Crie um formulário que permita ao usuário informar os dois números
que delimitam o intervalo e, utilizando um laço de repetição do tipo
for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
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
                <input type="number" name="num1" value="0" min="0">
                Insira outro:
                <input type="number" name="num2" value="0" min="0">
            </label>
            <button>Jogar</button>
		</form>
        
	</div>
</body>
</html>
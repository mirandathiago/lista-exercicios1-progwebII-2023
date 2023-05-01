<?php 
   /* 
   1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
   Entrada: 2 5 1
   Saída: Menor Número: 1 e o Maior Número: 5
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
	<div class="container">
    <form action="resposta.php" method="post">
            <h1></h1>
            <label>
                    Número 1:
                    <input type="number" name="num1" value="" min="" step=0.01>
                    Número 2:
                    <input type="number" name="num2" value="" min="" step=0.01>
                    Número 3:
                    <input type="number" name="num3" value="" min="" step=0.01>
            </label>
            <button>Calcular</button>
		</div>
</form>
</body>
</html>
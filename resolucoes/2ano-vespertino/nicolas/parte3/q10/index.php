<?php

    /*

    Crie um formulário em HTML que solicita ao usuário o número de linhas que deseja exibir no padrão de asteriscos. 
    Em seguida, crie um script PHP que use a técnica de loop aninhado para construir o padrão de asteriscos, 
    com base no número de linhas fornecido pelo usuário.
    O script PHP deve receber o número de linhas do formulário, verificar se o valor recebido é um 
    número inteiro válido e, em seguida, criar o padrão de asteriscos com base no número de linhas fornecido.

    Ao final, exiba o padrão de asteriscos completo na tela, utilizando HTML e CSS para formatar a exibição do padrão.

    Entrada: 5
    Saída: 
    *  
    * *  
    * * *  
    * * * *  
    * * * * * 

    Dica: É necessária a utilização de duas estruturas de repetição uma dentro da outra.

    */

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 10</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Linhas em *</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<form action="receber10.php" method="post">

				<label>Digite o valor do número de linhas que deseja:
                <input type="number" name="nl" min=1 step="1" required> 
				</label>
                
				<button name="enviar"> Calcular </button>
			</form>
		</div>
	</div>
</body>
</html>

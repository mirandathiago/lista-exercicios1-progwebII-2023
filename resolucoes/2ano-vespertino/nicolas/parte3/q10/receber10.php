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
    <div class="box resposta">
	<?php	
    $metodo = $_SERVER["REQUEST_METHOD"]; //  dados do servidopr e da requisição que está ocorrendo no momento.
                
        if($metodo == "POST"){ // verifica se o metodo é post e imrpime a mensagem na tela

            $nl = $_POST["nl"] ?? 1; // recebe do formulario

            for ($i = 1; $i <= $nl; $i++) {// numero de linhas que seram impressas
        
                for ($j = 1; $j <= $i; $j++) {
                    echo "*"; // imprime os asteriscos de acordo a quantidade de linhas
                }
                echo "<br>"; // quebra linha 
            }

        }
        

    ?>
    <a href="questao10.php" class="link">Voltar ao Formulário</a>
    </div>
	</div>
</body>
</html>

<!--Crie um formulário em HTML que solicita ao usuário o número de linhas que deseja exibir no padrão de asteriscos. 
Em seguida, crie um script PHP que use a técnica de loop aninhado para construir o padrão de asteriscos, com base no 
número de linhas fornecido pelo usuário.
O script PHP deve receber o número de linhas do formulário, verificar se o valor recebido é um número inteiro válido e, em seguida, criar o padrão de asteriscos com base no número de linhas fornecido.
Ao final, exiba o padrão de asteriscos completo na tela, utilizando HTML e CSS para formatar a exibição do padrão.
Entrada: 5
Saída: 
*  
* *  
* * *  
* * * *  
* * * * * 

Dica: É necessária a utilização de duas estruturas de repetição uma dentro da outra.
-->

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
		<h1>Formulário de *</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form>
				<label>Tamanho:  <!-- Define um rótulo para o campo de entrada numérica -->
					<input type="number" id="numero" name="numero" required> <!-- Define um campo de entrada numérica obrigatório -->
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                $num = $_GET["numero"] ?? []; // Obtém o valor do campo de entrada numérica e o armazena na variável $num
                for($i = 0; $i < $num; $i++){ // Loop externo que controla o número de linhas do triângulo de asteriscos
                    for ($j = 0; $j <= $i; $j++) { // Loop interno que controla o número de asteriscos em cada linha
                        echo '* '; // Imprime um asterisco e um espaço
                    }
                    echo '<br>';
                }
            ?>
		</div>
	</div>
</body>
</html>
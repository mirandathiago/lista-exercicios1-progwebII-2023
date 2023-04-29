<?php

    /*1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura 
    condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.

    Entrada: 2 5 1
    Saída: Menor Número: 1 e o Maior Número: 5*/

    $num1 = $_POST["num1"] ?? 0; // as variaveis declaradas recebem o valor inserido no formulario e enviado com o metodo post
    $num2 = $_POST["num2"] ?? 0; // se o valor não for atribuido, será 0
    $num3 = $_POST["num3"] ?? 0;

    if($num1 <= $num2 && $num2 <= $num3){ // verificação 

        $msg = "<p class='alerta-verde'>Maior número: {$num3}.<br>Menor número: {$num1}.</p>";

    }
    else if($num2 <= $num1 && $num1 <= $num3){ // verificação

        $msg = "<p class='alerta-verde'>Maior número: {$num3}.<br>Menor número: {$num2}.</p>";

    }
    else if($num3 <= $num1 && $num1 <= $num2){ // verificação 

        $msg = "<p class='alerta-verde'>Maior número: {$num2}.<br>Menor número: {$num3}.</p>";

    }
    else if($num1 <= $num3 && $num3 <= $num2){ // verificação 

        $msg = "<p class='alerta-verde'>Maior número: {$num2}.<br>Menor número: {$num1}.</p>";

    }
    else if($num3 <= $num2 && $num2 <= $num1){ // verificação 

        $msg = "<p class='alerta-verde'>Maior número: {$num1}.<br>Menor número: {$num3}.</p>";

    }
    else if($num2 <= $num3 && $num3 <= $num1){ // verificação 

        $msg = "<p class='alerta-verde'>Maior número: {$num1}.<br>Menor número: {$num2}.</p>";

    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Maior e Menor</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Digite os números inteiros:</h2>
			<form action="index.php" method="post">

				<label>Primeiro número:
					<input type="number" name="num1" required value="<?=$num1?>">
				</label>

                <label>Segundo número:
					<input type="number" name="num2" required value="<?=$num2?>">
				</label>

                <label>Terceiro número:
					<input type="number" name="num3" required value="<?=$num3?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>

        <div class="box resposta">
			<h2>Resultado</h2>
			<?php

                $metodo = $_SERVER["REQUEST_METHOD"]; //  dados do servidopr e da requisição que está ocorrendo no momento.

                if($metodo == "POST"){ // verifica se o metodo é post e imrpime a mensagem na tela

                    echo $msg;

                }else{ // se não for post, é pq aguarda o envio do formulário

                    echo "<p class='alerta-amarelo'>AGUARDANDO O ENVIO DO FORMULÁRIO</p>";

                }

            ?>
		</div>		
	</div>
</body>
</html>

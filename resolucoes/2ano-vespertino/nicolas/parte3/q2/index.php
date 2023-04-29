<?php

    /*
    Desenvolva um programa que receba como entrada um número inteiro e calcule a sua 
    tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.

    Entrada: 7
    Saída: 

    Tabuada do número 7:
    7 x 1 = 7
    7 x 2 = 14
    7 x 3 = 21
    7 x 4 = 28
    */


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Tabuada</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Digite o número que deseja calcular a tabuada:</h2>
			<form action="index.php" method="post">

				<label>Insira um número inteiro:
                <input type="number" name="num" min=1 step="1" required value="<?=$num?>"> 
				</label>
                
				<button name="enviar"> Calcular </button>
			</form>
		</div>

        <div class="box resposta">
			<h2>Resultado</h2>
			<?php

                $metodo = $_SERVER["REQUEST_METHOD"]; //  dados do servidopr e da requisição que está ocorrendo no momento.
                
                if($metodo == "POST"){ // verifica se o metodo é post e imrpime a mensagem na tela

                    $num = $_POST["num"] ?? 1; // recebe formulário
                    $cont = 1; // variavel auxiliar
                    echo "<p class='alerta-verde'>Tabuada do número {$num}:</p><br>"; // mensagem
                
                    while($cont <= 10) { // compila ate a condição ser falsa
                
                        $resp = $num * $cont; // calculo 
                
                        echo "<p>{$num} x {$cont} =  {$resp}</p><br>"; // impressão
                        $cont++; // incrementação
                
                    }
                
                }
                else{ // se não for post, é pq aguarda o envio do formulário

                    echo "<p class='alerta-amarelo'>AGUARDANDO O ENVIO DO FORMULÁRIO</p>"; // mesnagem de aguardo ao envio do formulário

                }

            ?>
		</div>		
	</div>
</body>
</html>

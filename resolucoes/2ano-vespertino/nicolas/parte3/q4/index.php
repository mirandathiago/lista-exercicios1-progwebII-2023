<?php

    /*

    4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. 
    Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, 
    calcule a soma dos números de 1 a N.

    Exemplo de entrada:
    N: 5
    Exemplo de saída: Soma dos números de 1 a 5: 15

    */

    $n = $_POST["n"] ?? 0; // recebe formulario
    $soma = 0; // declaração de variavel auxiliar

		for($i = 1; $i <= $n; $i++) { // numero de vezes que ira compilar
			$soma += $i; // soma de 1 ate n 
		}
		
        $msg = "<p class='alerta-verde'>Soma dos números de 1 a {$n}: {$soma}</p>"; // mensagem

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Soma de 1 a N</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<form action="index.php" method="post">

				<label>Digite o valor de N:
                <input type="number" name="n" min=1 step="1" required value="<?=$n?>"> 
				</label>
                
				<button name="enviar"> Calcular </button>
			</form>
		</div>

        <div class="box resposta">
			<h2>Resultado</h2>
			<?php

                $metodo = $_SERVER["REQUEST_METHOD"]; //  dados do servidopr e da requisição que está ocorrendo no momento.
                
                if($metodo == "POST"){ // verifica se o metodo é post e imrpime a mensagem na tela

                    echo $msg; // imprime a mensagem (saída)

                }
                else{ // se não for post, é pq aguarda o envio do formulário

                    echo "<p class='alerta-amarelo'>AGUARDANDO O ENVIO DO FORMULÁRIO</p>"; // mesnagem de aguardo ao envio do formulário

                }

            ?>
		</div>		
	</div>
</body>
</html>

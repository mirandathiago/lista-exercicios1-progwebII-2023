<?php

    /*
    3- João deseja saber quantos números pares existem em um intervalo. 
    Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, 
    utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.

    Exemplo de entrada:
    Início do intervalo: 3
    Fim do intervalo: 15
    Exemplo de saída:
    Quantidade de números pares: 6

    */

    $inicio = $_POST["inicio"] ?? 0;
	$fim = $_POST["fim"] ?? 0;
	$contador = 0;
    
    if($inicio < $fim){
		for($i=$inicio; $i<=$fim; $i++) {

			if($i%2==0) {

				$contador++;
			}

		}

		$msg = "<p class='alerta-verde'>A quantidade de números pares no intervalo é de: {$contador}.</p>";
    }
    else{
        $msg = "<p class='alerta-vermelho'>O valor inicial tem que ser obrigatoriamente menor que o final! Tente novamente.</p>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Números Pares</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Digite o intervalo desejado:</h2>
			<form action="index.php" method="post">

				<label>Início:
                <input type="number" name="inicio" step="1" required value="<?=$inicio?>"> 
				</label>

                <label>Fim:
                <input type="number" name="fim" step="1" required value="<?=$fim?>"> 
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

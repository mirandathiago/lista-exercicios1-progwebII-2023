<?php

    /*
    5 - Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número de 0 a 10 
    e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, 
    e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha 
    do usuário.
    Exemplos:

    Entrada: Número: 2, Escolha: Par
    Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e o computador venceu.

    Entrada: Número: 3, Escolha: Par
    Saída: O usuário escolheu par e o número 3. O computador sorteou o número 3, e a soma deles é 6. 6 é par e o usuário venceu.
    Dica: Para gerar um número aleatório em PHP pode ser utilizada a função rand(min,max) em que podem 
    ser passados os número mínimo e o máximo que serão gerados.
    */

    $jog1 = $_POST["num"] ?? 0; // recebe do formulario
    $opcao = $_POST["opcao"] ?? ""; // recebe escolha impar ou par do formulário 
    $jog2 = rand(0,10); // função que gera numeros aleatorios, onde pode se determinar o mínimo e o máximo
    $soma = $jog1 + $jog2; // soma os numeros do jogador e sorteado pela máquina
    
    if($soma % 2 == 0){// verifica se é par ou ímpar
        $resp = "par";
    }
    else{
        $resp = "impar";
    }

    if($resp == $opcao){ // verifica se o usuario ganhou ou perdeu

        $msg = "<p class='alerta-verde'>O usuário escolheu {$opcao} e o número {$jog1}. O computador sorteou o número {$jog2}, e a soma deles é {$soma}. {$soma} é {$resp} e o usuário venceu.</p>";
        
    }
    else{

        $msg = "<p class='alerta-vermelho'>O usuário escolheu {$opcao} e o número {$jog1}. O computador sorteou o número {$jog2}, e a soma deles é {$soma}. {$soma} é {$resp} e o computador venceu.</p>";

    }

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 5</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Ímpar ou Par?</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Jogue com a máquina!</h2>
            
			<form action="index.php" method="post">
				<label>Digite um número inteiro de 0 a 10:
                <input type="number" name="num" min="0" max="10" required value="<?=$jog1?>"> 
				</label>
                <label>Escolha Par ou Ímpar:</label>
                <select name="opcao" required>
                <option value="par">Par</option>
                <option value="impar">Ímpar</option>
                </select>

				<button name="enviar"> Jogar </button>
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

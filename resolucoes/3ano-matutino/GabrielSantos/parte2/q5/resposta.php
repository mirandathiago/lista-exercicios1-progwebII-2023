<?php 

	/* 
	 * 5- Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.
	 
	 > Exemplos:
	 > Entrada: Número: 2, Escolha: Par
	 > Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e o computador venceu.

	*/

	$jogador = $_POST["jogador"] ?? 0;
	$opcao = $_POST["opcao"] ?? "par";
	$computador = rand(0, 10);
	$soma = $jogador + $computador;
	
	if ($soma % 2 == 0) 
		$res = "par";
	else
		$res = "impar";
	
	if($opcao == $res)
		$vencedor = "Jogador";
	else
		$vencedor = "Computador";
	
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
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>
				<?=" O jogador escolheu escolheu o número {$jogador} e a opção {$opcao} <br> O computador escolheu o número {$computador} <br> A soma é {$soma} e o número é {$res}. O {$vencedor} venceu!"?>
			</p>
			
            <a href="index.php" class="index.php">Voltar</a>
		</div>
	</div>
</body>
</html>
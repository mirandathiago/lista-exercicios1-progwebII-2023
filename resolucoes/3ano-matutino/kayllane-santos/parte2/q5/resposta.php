<?php
	/* Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.
	Dica: Para gerar um número aleatório em PHP pode ser utilizada a função rand(min,max) em que podem ser passados os número mínimo e o máximo que serão gerados. 
    */

	$numero = $_GET["numero"] ?? 1;
	$escolha = $_GET["escolha"] ?? "Par";
	$sorteado = rand(0, 10);

	$soma = $numero + $sorteado;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Jogo de Par ou Ímpar</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>

			<h3>Você escolheu o número: <?=$numero?> e a opção <?=$escolha?>.<br>
			O número sorteado pelo computador foi <?=$sorteado?>. <br>
			A soma é igual a <?=$soma?></h3>
			<?php
				if($soma % 2 == 0 && $escolha == "Par"){
					echo "<p class='alerta-azul'>Você Venceu!</p>";
				}else if($soma % 2 == 0 && $escolha == "Impar"){
					echo "<p class='alerta-vermelho'>Você Perdeu.</p>";
				}else if($soma % 2 != 0 && $escolha == "Impar"){
					echo "<p class='alerta-azul'>Você Venceu!</p>";
				}else{
					echo "<p class='alerta-vermelho'>Você Perdeu.</p>";
				}
			?>
            <a href="index.php" class="link">Jogar Novamente</a>
		</div>
	</div>
</body>
</html>
<?php
/*5- Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número 
de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear 
um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve
 determinar quem venceu com base na escolha do usuário.
Exemplos:
Entrada: Número: 2, Escolha: Par
Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e 
o computador venceu.
Entrada: Número: 3, Escolha: Par
Saída: O usuário escolheu par e o número 3. O computador sorteou o número 3, e a soma deles é 6. 6 é par e o
 usuário venceu.
Dica: Para gerar um número aleatório em PHP pode ser utilizada a função rand(min,max) em que podem ser passados
 os número mínimo e o máximo que serão gerados. */


 $opcao = $_POST["opcao"] ?? 0;
$numuser = $_POST["numuser"];
$resultado = $numuser + rand(1, 10); // calcula o resultado do jogo
$escolha = ($opcao == "par") ? "par" : "ímpar"; // determina a escolha do usuário

$numeros = rand(1, 10);
$escolha_maquina = ($numeros % 2 == 0) ? "par" : "ímpar"; // determina a escolha da máquina

if (($resultado % 2 == 0 && $escolha == "par") || ($resultado % 2 != 0 && $escolha == "ímpar")) {
  $mensagem = "Você venceu com a opção $escolha e numero $numuser a máquina escolheu $escolha_maquina com 
  o numero $numeros, deu $escolha!!!";
} else {
  $mensagem = "A máquina venceu com a opção $escolha_maquina e numero $numeros e você escolheu $escolha com 
  o número $numuser, deu $escolha_maquina!!!";
}


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
		<h1>Eis o resultado</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<p class="alerta-verde"><?php echo "{$mensagem}" ?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
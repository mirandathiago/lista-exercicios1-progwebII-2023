<!--
5- Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.
Exemplos:
Entrada: Número: 2, Escolha: Par
Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e o computador venceu.
Entrada: Número: 3, Escolha: Par
Saída: O usuário escolheu par e o número 3. O computador sorteou o número 3, e a soma deles é 6. 6 é par e o usuário venceu.
Dica: Para gerar um número aleatório em PHP pode ser utilizada a função rand(min,max) em que podem ser passados os número mínimo e o máximo que serão gerados. 
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
		<h1>Ímpar ou Par</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Ímpar ou Par</h2>
			<form action="resposta.php" method="post">
				<label>Selecione um Número:
					<select name="numero">
						<option></option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
			   </label>
			   <label>Escolha:
					<select name="escolha">
						<option></option>
						<option value="par">Par</option>
						<option value="impar">Ímpar</option>
					</select>
			   </label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
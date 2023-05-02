5- Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.
Exemplos:
Entrada: Número: 2, Escolha: Par
Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e o computador venceu.
Entrada: Número: 3, Escolha: Par
Saída: O usuário escolheu par e o número 3. O computador sorteou o número 3, e a soma deles é 6. 6 é par e o usuário venceu.


<!DOCTYPE html>
<html>
<head>
	<title>Jogo Par ou Ímpar</title>
</head>
<body>
	<h1>Jogo Par ou Ímpar</h1>
	<form method="POST">
		<label for="numero">Escolha um número de 0 a 10:</label>
		<input type="number" name="numero" id="numero" min="0" max="10" required>
		<br>
		<label for="escolha">Escolha Par ou Ímpar:</label>
		<select name="escolha" id="escolha" required>
			<option value="par">Par</option>
			<option value="impar">Ímpar</option>
		</select>
		<br>
		<input type="submit" value="Jogar">
	</form>
	<?php
		if(isset($_POST['numero']) && isset($_POST['escolha'])) {
			$numero = $_POST['numero'];
			$escolha = $_POST['escolha'];

			$compu = rand(0,10);
			$soma = $numero + $compu;

			echo "<p>Você escolheu $escolha e o número $numero. O computador sorteou o número $compu, e a soma deles é $soma. ";

			if($soma % 2 == 0) {
				echo "$soma é par.</p>";
				if($escolha == "par") {
					echo "<p>Você venceu!</p>";
				} else {
					echo "<p>O computador venceu!</p>";
				}
			} else {
				echo "$soma é ímpar.</p>";
				if($escolha == "impar") {
					echo "<p>Você venceu!</p>";
				} else {
					echo "<p>O computador venceu!</p>";
				}
			}
		}
	?>
</body>
</html>
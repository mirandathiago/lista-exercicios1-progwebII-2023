<!DOCTYPE html>
<html>
<head>
	<title>questão 5 / parte 2</title>
</head>
<body>

<h4> QUESTÃO 5/ PARTE 2 </h4> 
<br> 
	<h1>Jogo de Par ou Ímpar</h1>
	<form method="post" action="index.php">
		<label for="numero">Escolha um número de 0 a 10:</label>
		<input type="number" id="numero" name="numero" min="0" max="10" required><br><br>
		<label for="escolha">Escolha entre par ou ímpar:</label>
		<select id="escolha" name="escolha" required>
			<option value="par">Par</option>
			<option value="impar">Ímpar</option>
		</select><br><br>
		<button type="submit" name="jogar">Jogar</button>
	</form>

	<?php
		if(isset($_POST['jogar'])){
			$numero_escolhido = $_POST['numero'];
			$escolha = $_POST['escolha'];
			$numero_sorteado = rand(0, 10);
			$soma = $numero_escolhido + $numero_sorteado;

			echo "<p>Você escolheu $escolha e o número $numero_escolhido. O computador sorteou o número $numero_sorteado, e a soma deles é $soma. ";
			if($soma % 2 == 0){
				echo "$soma é par.</p>";
				if($escolha == 'par'){
					echo "<p>Parabéns, você venceu!</p>";
					
				}else{
					echo "<p>O computador venceu.</p>";
				}
			}else{
				echo "$soma é ímpar.</p>";
				if($escolha == 'impar'){
					echo "<p>Parabéns, você venceu!</p>";
					
				}else{
					echo "<p>O computador venceu.</p>";
					
				}
			}
		}
	?>
	
</body>
</html>
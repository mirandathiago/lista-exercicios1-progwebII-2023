6- A fábrica "Produtos Incríveis" precisa de uma solução para registrar o tempo de duração de sua produção, desde o início até o término. Esses eventos podem ter uma duração muito longa, medida em segundos, o que torna difícil a visualização do tempo total de produção. Para isso, será necessário criar um formulário que permita ao usuário digitar o tempo de duração em segundos de um determinado evento e, em seguida, converter esse tempo em horas, minutos e segundos. Utilize uma estrutura de repetição para fazer a conversão.
Entrada:
Um valor inteiro representando o tempo de duração em segundos do evento. Exemplo de entrada: 56789
Saída: O tempo de duração do evento no formato horas:minutos:segundos. Exemplo de saída: 15:46:29

<!DOCTYPE html>
<html>
<head>
	<title>Convertimento de tempo de duração</title>
</head>
<body>
	<h1>Convertimento de tempo de duração</h1>
	<form method="post">
		<label for="tempo">Tempo de duração (em segundos):</label>
		<input type="number" id="tempo" name="tempo">
		<button type="submit">Converter</button>
	</form>
	<?php
	if(isset($_POST['tempo'])) {
		$tempo = $_POST['tempo'];
		$hor = 0;
		$min = 0;
		$segundos = 0;
		while($tempo >= 3600) {
			$hor++;
			$tempo -= 3600;
		}
		while($tempo >= 60) {
			$min++;
			$tempo -= 60;
		}
		$segundos = $tempo;
		echo "<p>O tempo de duração do evento é: " . $hor . ":" . $min . ":" . $segundos . "</p>";
	}
	?>
</body>
</html>

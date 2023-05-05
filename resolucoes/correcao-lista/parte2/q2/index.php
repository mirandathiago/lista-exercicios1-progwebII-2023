<?php

	$kwh = "";
	$mensagem = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$kwh = $_POST["kwh"] ?? 0;

		if($kwh <= 100){
			$valor = $kwh * 0.5;
		}else if($kwh > 100 && $kwh <= 200){
			$valor = $kwh * 0.7;
		}else{
			$valor = $kwh * 0.87;
		}

		if($valor < 20){
			$valor = 20;
		}

		$mensagem = "<p class='alerta-amarelo'>A conta de energia dará R$ {$valor} para um consumo de {$kwh} killowatts hora</p>";


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
		<h1>Questão 2 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>2- Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:<br>
			Até 100 kWh, o valor é de R$ 0,50 por kWh.<br>
			De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.<br>
			Acima de 200 kWh, o valor é de R$ 0,87 por kWh.<br>
			Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.<br>
			</h2>
			<form action="index.php" method="post">
				<label>Kwh Consumido:
					<input type="number" id="kwh" name="kwh" step="0.1" required value="<?=$kwh?>">
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?=$mensagem?>
		</div>
	</div>
</body>
</html>
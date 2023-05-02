<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body><h1>Calculadora de divida</h1>
	</header>
    <div class="container">
		<div class="box formulario">
	<form method="post">
		<label for="valor_divida"><h3>Valor da dívida:</h3></label>
		<input type="number" id="valor_divida" name="valor_divida" min="1" required>
		<br>
		<label for="taxa_juros"><h3>Taxa de juros mensal (%):</h3></label>
		<input type="number" id="taxa_juros" name="taxa_juros" min="0" max="100" step="0.01" required>
		<br>
		<label for="valor_pago"><h3>Valor mensal a ser pago:</h3></label>
		<input type="number" id="valor_pago" name="valor_pago" min="1" required>
		<br>
		<br>
        <button name="enviar"> Enviar </button>
	</form>
</div>
    <div class="box resposta">
	<?php
		// Recebe os dados do formulário
		if (isset($_POST['valor_divida']) && isset($_POST['taxa_juros']) && isset($_POST['valor_pago'])) {
			$valor_divida = $_POST['valor_divida'];
			$taxa_juros = $_POST['taxa_juros'] / 100;
			$valor_pago = $_POST['valor_pago'];

			// Inicializa o tempo necessário para quitar a dívida
			$tempo = 0;

			// Enquanto a dívida não for zerada, aplica os juros mensais e subtrai o valor pago mensalmente
			while ($valor_divida > 0) {
				$valor_divida += $valor_divida * $taxa_juros;
				$valor_divida -= $valor_pago;
				$tempo++;
			}

			// Exibe o resultado do cálculo
			echo "<h3>Serão necessários $tempo meses para quitar a dívida.</h3>";
		}
	?>
    </div>
    </div>
</body>
</html>
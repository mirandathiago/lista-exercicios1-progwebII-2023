<?php
	/* Como a questão informou que a taxa mínima é válida apenas para valores menores que R$20,00, supus, então, que os valores que 
	* superarem não receberiam esse acréscimo.
	*/

	$n1 = $_GET["n1"] ?? 0;

	if($n1 > 200){
		$valor = $n1*0.87;
		$class = "alerta-vermelho";
	}else if($n1 >= 101 && $n1 <= 200){
		$valor = $n1*0.70;
		$class = "alerta-amarelo";
	}else{
		$valor = $n1*0.50;
		$class = "alerta-verde";

		if($valor < 20.00){
			$valor = 20.00;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Conta de Energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Consumo</h2>
			<form action="index.php" method="get">
				<label>Consumo de Energia Elétrica (em kWh):
					<input type="number" id="nome" name="n1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor</h2>
			<p>O valor a ser pago de acordo com o seu consumo é de </p>
			<p class="<?=$class?>"><?="R$", number_format($valor,2,",",".")?></p>
		</div>
	</div>
</body>
</html>
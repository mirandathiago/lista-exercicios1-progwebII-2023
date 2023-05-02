<?php
	$consumo=$_POST["consumo"] ?? 0;
	$valorapagar = 0;

	if($consumo<=100){
		$valorapagar= ($consumo*0.50)+20;
	}else if($consumo >= 101 && $consumo <=200){
		$valorapagar= (($consumo-100)*0.70) + (100*0.50)+20;
	}else if($consumo > 200){
		$valorapagar = ((100*0.50)+(100*0.70)+(($consumo-200)*0.87))+20;
	}
/*No enunciado dessa questão havia que 250Kwh resultaria em uma conta de 237 reais.
 Porém segundo as regras para calcular o valor a pagar, 237 reais seria o equivalente a 311 KWh
 , e o verdadeiro valor de 250 seria de 183,5  */
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
		<h1>Calculo de pagamento de conta de energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe o consumo de energia desse mês:</h2>
			<form action="index.php" method="post">
				<label>Consumo em kWh
					<input type="number" id="consumo" name="consumo" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo =="POST"){
					echo "<h2>Valor a pagar</h2>";
					echo "<p>O valor a ser pago por {$consumo}kWh é de {$valorapagar}R$</p>";
				}
			?>
            <a href="index.php" class="link">Limpar</a>
		</div>
	</div>
</body>
</html>
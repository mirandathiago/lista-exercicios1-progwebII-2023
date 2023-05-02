<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calcular valor da energia</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calcular valor da energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira seu consumo de energia em kWh (quilowatts-hora)</h2>

			<form action="index.php" method="post">
				<label>Consumo:
					<input type="number" id="idconsumo" name="consumo" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
<?php

$metodo= $_SERVER["REQUEST_METHOD"];
if($metodo=="POST")
{
	$consumo=$_POST["consumo"];
	$min=20;
	$valor=0;

 if($consumo<=0){
		print("Seu consumo foi de {$consumo} kWh e o valor mínimo em reais será de R$ {$min} reais");
	}else if($consumo<=100){

		$valor=($consumo*0.5);
		print("Seu consumo foi de {$consumo} kWh e o valor em reais será de R$ {$valor} reais");

	}else if($consumo<=200){

		$valor=($consumo*0.7);
		print("Seu consumo foi de {$consumo} kWh e o valor em reais será de R$ {$valor} reais");

	}else if($consumo>200){

		$valor=($consumo*0.87);
		print("Seu consumo foi de {$consumo} kWh e o valor em reais será de R$ {$valor} reais");

	}else{
		print("Coloque um valor real do seu consumo");

	}






}else{
			
	 }
			
?>
		</div>
	</div>
</body>
</html>
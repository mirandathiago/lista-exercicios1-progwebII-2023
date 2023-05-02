<?php
/*Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. 
Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). 
Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
Até 100 kWh, o valor é de R$ 0,50 por kWh.
De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. 
Portanto, caso o valor calculado seja inferior a R$ 20,00, 
o valor a ser cobrado deve ser de R$ 20,00.
Exemplo de entrada: Consumo de energia: 250 kWh
Exemplo de saída: Valor da conta de energia: R$ 237,50
 */
	$consumo = $_GET["consumo"] ?? 0;
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
		<h1>Conta de Energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="index.php" method="get">
				<label>Consumo de Energia:
					<input type="number" id="number" name="consumo" step="0.01" required value="<?=$consumo?>">
				</label>
				<button name="enviar"> Enviar </button>
				</div>
		<div class="box resposta">
			<h2>Conta de Energia</h2>
			<?php

				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "GET" && isset($_GET["consumo"])){
					echo "<h3> Valor total a ser pago: </h3>";
					if($consumo > 40 && $consumo <= 100){
						$valor = $consumo * 0.5;
						echo "R$$valor<br>";
					}else if($consumo >100 && $consumo <= 200){
						$valor = $consumo * 0.7;
						echo "R$$valor<br>";
					}else if($consumo > 200){
						$valor = $consumo * 0.87;
						echo "R$$valor<br>";
					}else{
						echo"R$ 20<br>";
					}
		
				}else{
					echo "<p>Aguardando Informação</p>";
				}
			?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>








		
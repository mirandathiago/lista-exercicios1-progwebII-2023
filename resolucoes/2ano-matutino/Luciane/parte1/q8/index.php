<?php
/*
8-Maria precisa calcular o valor total que ela irá pagar pela compra de um celular no cartão na loja
 Magazine PHP. 
 Para ajudá-la, crie um formulário que receba o valor do celular e em quantas vezes o produto 
 será dividido, podendo ser de 0 a 12x, sendo que 0 seria a compra à vista.
  Sabendo que a loja Magazine PHP 
 utiliza juros simples em sua cobrança e cobra 4% de juros a cada mês, crie um programa em PHP que receba os 
dados do formulário e calcule o valor total a ser pago por Maria.

Exemplos:
Entrada: Valor do celular: R$ 1.000,00 | Parcelas: 0
Saída: Valor total a pagar: R$ 1.000,00
Entrada: Valor do celular: R$ 1.000,00 | Parcelas: 2
Saída: Valor total a pagar: R$ 1.080,00
Entrada: Valor do celular: R$ 1.000,00 | Parcelas: 12
Saída: Valor total a pagar: R$ 1.480,00
*/
    $c = $_GET["valor"] ?? 0; //recupera o valor do celular
    $t = $_GET["parcelas"] ?? 0; //recupera o numero de parcelas
	$i = 0.04; //variavel com a taxa de juros
	$j = $c * $i * $t; //calculo dos juros
	$m = $c + $j; //calculo do montante final
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Juros Simples</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Loja Magazine PHP</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de juros</h2>
			<form action = "q8.php" method = "get">				
				<label>Informe o Valor do Celular:
					<input type="number" name="valor" required value = "<?=$c?>">
				</label>
				<label>Informe a quantidade de parcelas:
					<input type="number" name="parcelas" required value = "<?=$t?>">
				</label>		
				<button > Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($t == 0){
					echo "<p>O valor pago a vista será de R$ {$m},00!</p>";
				}else{
					echo "<p>O valor pago ao final de {$t} parcelas será R$ {$m},00!</p>";
				};
            ?>			
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>

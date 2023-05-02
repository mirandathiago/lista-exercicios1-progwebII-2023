<?php
/*Até 100 kWh, o valor é de R$ 0,50 por kWh.
De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
*/
//CÁLCULO DO VALOR 
$kwh = $_POST["kwh"];


	if($kwh <= 100){
		$valorpago = 0.50 * $kwh;
	}else if($kwh>100 && $kwh< 200){
		$valorpago = 0.70 * $kwh;
	}else if($kwh > 200){
		$valorpago = 0.87 * $kwh;
	}	
//VÊ SE O VALOR É MENOR QUE 20 REAIS;
	if($valorpago < 20){
		$valorpago= 20;
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
		<h1>Formulário para descoberta do valor da conta de energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Valor da conta</h2>
			<!-- aq eu criei um bloco php dentro do bloco html para imprimir as respostas dos cálculos realizados no bloco php anterior-->
			<?php echo"<p> O valor de quilowhatts-hora foi de: {$kwh}kwh <br> O valor total da conta de energia foi de: {$valorpago} reais </p>"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
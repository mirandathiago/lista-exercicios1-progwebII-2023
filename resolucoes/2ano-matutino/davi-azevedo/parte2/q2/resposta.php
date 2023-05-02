<?php
/*
2- Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor 
de energia de sua residência. Para ajudá-lo crie um formulário que receba o consumo de energia elétrica 
em kWh (quilowatts-hora). Em seguida, crie um código em PHP que calcule o valor da conta de energia com base 
nas seguintes regras:
Até 100 kWh, o valor é de R$ 0,50 por kWh.
De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja 
inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
Exemplo de entrada: Consumo de energia: 250 kWh
Exemplo de saída: Valor da conta de energia: R$ 237,50
*/

$kwh = $_GET["consumo"];

if($kwh > 0 && $kwh <= 100 ){
	$kwh = ($kwh * 0.50) + 20;
	
}elseif($kwh >= 101 && $kwh <=200){
	$kwh = ($kwh * 0.70) + 20;

}elseif($kwh > 200){
	$kwh = ($kwh * 0.87) + 20;

}elseif($kwh <= 0){
	 $kwh = 20;
	
}

$result = $kwh;

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<p class="alerta-vermelho"><?php echo " O valor da sua conta de energia foi de R$ {$result}"?></p>
			<p class="alerta-amarelo"><?php echo " O valor da sua conta de energia foi de R$ {$result}"?></p>
			<p class="alerta-verde"><?php echo " O valor da sua conta de energia foi de R$ {$result}"?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
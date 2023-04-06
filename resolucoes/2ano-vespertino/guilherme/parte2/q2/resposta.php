<?php

$kwh=$_POST["kwh"] ?? 100;

if($kwh<=100){
	$valor=$kwh*0.50;
	if($valor<20){
		$mensagem="O valor da sua conta de energia é de R$ 0,50 por kWh. Este valor é referênte a taxa mínima, que é de R$20.";
	}
	else{
		$mensagem="O valor da sua conta de energia é de R$ 0,50 por kWh. Dando um total de R$$valor.";
	}
}
else if($kwh>100 && $kwh<=200){
	$valor=$kwh*0.70;
	$mensagem="O valor da sua conta de energia é de R$ 0,70 por kWh. Dando um total de R$$valor.";
}
else{
	$valor=$kwh*0.87;
	$mensagem="O valor da sua conta de energia é de R$ 0,87 por kWh. Dando um total de R$$valor.";
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>CONTA DE ENERGIA</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Valor a ser pago</h2>
			<p><?=$mensagem?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
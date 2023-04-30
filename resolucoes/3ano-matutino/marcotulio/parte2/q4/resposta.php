<?php
	$coeficientea = $_POST["coeficientea"] ?? 2;
	$coeficienteb = $_POST["coeficienteb"] ?? 5;
	$coeficientec = $_POST["coeficientec"] ?? -3;

	// Delta = b^2 - 4*a*c
	// Fórmula de Bhaskara -> x = -b +- sqrt(Delta)/2*a
	$delta = ($coeficienteb)**2 - 4*$coeficientea*$coeficientec;

	if($delta < 0){
		$status = "A equação não possui raízes reais";
		$classe = "alerta-vermelho";
	}else if($delta == 0){
		$x = -($coeficienteb) + sqrt($delta)/(2*$coeficientea);
		$X = number_format($x, 2, ".", ",");
		$status = "A equação possui uma única raíz real. A raíz da equação de segundo grau é: x<sub>1</sub> = {$X}";
		$classe = "alerta-amarelo";
	}else{
		$x1 = (-($coeficienteb) + sqrt($delta))/(2*$coeficientea);
		$x2 = (-($coeficienteb) - sqrt($delta))/(2*$coeficientea);
		$X1 = number_format($x1, 2, ".", ",");
		$X2 = number_format($x2, 2, ".", ",");
		$status = "A equação possui duas raízes reais. As raízes da equação de segundo grau são: x<sub>1</sub> = {$X1} e x<sub>2</sub> = {$X2}";
		$classe = "alerta-verde";
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
		<h1>Calculadora de Raízes de Equação do Segundo Grau</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de Raízes de Equação do Segundo Grau</h2>
			<p class="<?=$classe?>"><?=$status?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
<?php
//criei o bloco php e informei as variáveis recuperando o valor de entrada e informando o valor fixo do descconto de 10% e multipliquei pelo preço de entrada para ter o valor final
	$valor = $_POST["valor"];
	$desconto = (10/100) * $valor ;// cálculo pra saber qual o valor a ser subtraído
	$valorfinal = $valor-$desconto;// cálculo pra saber qual o novo preço
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de cálculo de desconto de 10%</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Preços finais</h2>
			<!-- aq eu criei um bloco php dentro do bloco html para imprimir as respostas dos cálculos realizados no bloco php anterior-->
			<?php echo"<p>O valor de R${$valor} aplicado ao desconto de R${$desconto} foi reajustado para R${$valorfinal}. </p>"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
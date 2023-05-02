<?php

$kwh = $_POST["kwh"] ?? 0;


	if($kwh <= 100){
		$vp = 0.50 * $kwh;
	}else if($kwh>100 && $kwh< 200){
		$vp = 0.70 * $kwh;
	}else if($kwh > 200){
		$vp = 0.87 * $kwh;
	}	

	if($vp < 20){
		$vp= 20;
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
		<h1>Formulário para descobrir a conta de energia a ser paga</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Valor da conta de energia</h2>
			<?php echo"<p> O valor do consumo de energia em quilowhatts-hora é: {$kwh}kwh <br> O Valor Total da conta de energia é: {$vp} reais </p>"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
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
	<?php
	if(isset($_POST['consumo'])){
		$consumo = $_POST['consumo'];
		$valor = 0;

	if($consumo <= 100){
		$valor = $consumo * 0.5;
		}
	elseif($consumo <= 200){
	$valor = 100 * 0.5 + ($consumo - 100) * 0.7;
	}
	else{
	$valor = 100 * 0.5 + 100 * 0.7 + ($consumo - 200) * 0.87;
	}

	if($valor < 20){
	$valor = 20;
}

echo "Valor da conta de energia: R$ " . number_format($valor, 2, ',', '.');
}
?>

	</div>
	</div>
</body>
</html>
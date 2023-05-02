<?php
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];

    $imc = 0;

    $imc = $peso / ($altura ** 2);

    if($imc < 18.5){
        $aviso = "Abaixo do Peso";
    }else if($imc < 25){
        $aviso = "Peso Normal";
    }else if($imc < 30){
        $aviso = "Sobrepeso";
    }else if($imc < 35){
        $aviso = "Obesidade Grau 1";
    }else if($imc < 40){
        $aviso = "Obesidade Grau 2";
    }else if($imc > 40){
        $aviso = "Obesidade Grau 3";
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
		<h1>Calculadora de IMC - (Índice de Massa Corporal)</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>O seu IMC será <?=$imc?> - <?=$aviso?></p>
        
			<a href="principal.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
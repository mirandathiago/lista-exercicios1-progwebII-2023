<?php
    $lado1 = $_POST["lado1"] ?? 7;
    $lado2 = $_POST["lado2"] ?? 5;
    $lado3 = $_POST["lado3"] ?? 3;

    if (($lado1 < $lado2 + $lado3) && ($lado2 < $lado1 + $lado3) && ($lado3 < $lado1 + $lado2)){
        if(($lado1 == $lado2) && (($lado2 == $lado3))){
            $status = "É possível formar um triângulo equilátero.";
            $classe = "alerta-verde";
        }else if(($lado1 == $lado2) || ($lado1 == $lado3) || ($lado2 == $lado3)){
            $status = "É possível formar um triângulo isósceles.";
            $classe = "alerta-verde";
        }else{
            $status = "É possível formar um triângulo escaleno.";
            $classe = "alerta-verde";
        }
    }else{
        $status = "Não é possível formar um triângulo.";
        $classe = "alerta-vermelho";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calculadora de Triângulos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de Triângulos</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de Triângulos</h2>
			<p class="<?=$classe?>"><?=$status?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
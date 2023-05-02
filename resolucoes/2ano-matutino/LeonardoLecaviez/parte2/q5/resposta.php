<?php
    $numero = $_GET["numero"] ?? 0;
    $parimpar = $_GET["parimpar"] ?? "";

    for($i = 0; $i>=0 && $i<=9; $i++){
        $sortear = rand(0,10);
        echo $sortear;
    }

    $somaIP = 0;
    $somaIP = $somaIP + $sortear + $numero;
    echo $somaIP;

    if($sortear % 2 == 0){
        $mensagem = "O número sorteado {$sortear} é Par";
    }else{
        $mensagem = "O número sorteado {$sortear} é Ímpar";
    }

    if($somaIP % 2 == 0){
        $aviso = "é Par";
    }else{
        $aviso = "é Ímpar";
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
		<h1>Verificador Par e Ímpar</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<h1> Voce colocou o número <?=$numero?> - <?=$parimpar?>. Eu sorteei <?=$sortear?> - <?=$mensagem?> e a soma total é <?=$somaIP?>. Então o número <?=$aviso?> </h1>
        
			<a href="EntradaPI.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>

<?php
    $valor = $_GET["valor"];

    $cem = 100;
    $cinquenta = 50;
    $vinte = 20;
    $dez = 10;
    $cinco = 5;
    $dois = 2;
    $um = 1;


    $d = $valor / 100;
    $e = $valor / 50;
    $f = $valor / 20;
    $o = $valor / 10;
    $v = $valor / 5;
    $h = $valor / 2;
    $i = $valor / 1;

    
        if($valor > $cem){
            $d = $valor / 100;
            $mensagem = "{$d} nota(s) de R$100";
        }else if($cem < $cinquenta){
            $e = $valor / 50;
            $mensagem2 = "<hr>{$e} nota(s) de R$50";
        }else if($vinte < $cinquenta){
            $f = $valor / 20;
            $mensagem3 = "<hr>{$f} nota(s) de R$20";
        }else if($dez < $vinte){
            $o = $valor / 10;
            $mensagem4 = "<hr>{$o} nota(s) de R$10";
        }else if($cinco < $dez){
            $v = $valor / 5;
            $mensagem5 = "<hr>{$v} nota(s) de R$5";
        }else if($dois < $cinco){
            $h = $valor / 2;
            $mensagem6 = "<hr>{$h} nota(s) de R$2";
        }else if($um < $dois){
            $i = $valor / 1;
            $mensagem7 = "<hr>{$i} nota(s) de R$1";
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
		<h1>Calculadora de Cédulas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Valor Informado: <?=$valor?> R$
            <br>
            <br>
                <?=$mensagem = "{$d} nota(s) de R$100"?>
                <br>
                <br>
                <?=$mensagem2 = "{$e} nota(s) de R$50"?>
                <br>
                <br>
                <?=$mensagem3 = "{$f} nota(s) de R$20"?>
                <br>
                <br>
                <?=$mensagem4 = "{$o} nota(s) de R$10"?>
                <br>
                <br>
                <?=$mensagem5 = "{$v} nota(s) de R$5"?>
                <br>
                <br>
                <?=$mensagem6 = "{$h} nota(s) de R$2"?>
                <br>
                <br>
                <?=$mensagem7 = "{$i} nota(s) de R$1"?>
                <br>
                <br>
        
        </p>
        
			<a href="cedulas.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
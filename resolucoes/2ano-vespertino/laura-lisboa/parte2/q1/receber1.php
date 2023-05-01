<?php
    $num1 = $_POST["num1"] ?? 0;
    $num2 = $_POST["num2"] ?? 0;
    $num3 = $_POST["num3"] ?? 0;

    $maior = $num1;
    $menor = $num1;

    if($num2>$maior)
    {
        $maior = $num2;
    }
    if($num2<$menor)
    {
        $menor = $num2;
    }
    if($num3>$maior)
    {
        $maior = $num3;
    }
    if($num3<$menor)
    {
        $menor = $num3;
    }
    
    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
	<h1>Calculo de Maior e Menor</h1>
</header>
	<div class="container">
		<div class="box resposta">
            <h2>Calcúlo do Maior e Menor</h2>
            <h3>O menor número é: <?=$menor?></h3>
            <br>
            <h3>O maior número é: <?=$maior?></h3>
            <a href="index.php" class="link">Voltar</a> 
        </div>      
    </div>
</body>
</html>
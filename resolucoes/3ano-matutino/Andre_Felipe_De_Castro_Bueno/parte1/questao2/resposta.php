<?php 
/*
     2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
    Entrada: 4
    Saída: Dobro: 8 e Metade: 2 
*/

    $n1 = $_POST["num1"] ?? 1;
    $n2 = $_POST["num2"] ?? 1;
    $dobro = $_POST["dobro"] ?? 1;
    $metade = $_POST["meta"] ?? 1;

    $n2 = (2);
    $mult = $n1 * $n2;
    $div = $n1 / $n2;

    $dobro = $mult;
    $metade = $div;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">

            <h1><?="O dobro de {$n1} é {$dobro} e a metade é {$metade}."?></h1>
	</div>
</body>
</html>
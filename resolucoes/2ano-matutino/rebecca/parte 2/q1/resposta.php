<?php
    $n1 = $_POST["num1"] ?? 1;
    $n2 = $_POST["num2"] ?? 1;

        //NULL COALESCING -> coalescencia nula = verifica se a variavel existe e caso nao exista atribui um valor

    $soma = $n1 + $n2;//soma
    $sub = $n1 - $n2;//subtracao
    $mult = $n1 * $n2;//multiplicacao
    $div = $n1 / $n2;//divisao
    $resto = $n1 % $n2;//resto
    $expo = $n1 ** $n2;//exponeciacao 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário em PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <h1>Calculadora em PHP</h1>

		<h3><?="{$n1}+{$n2}={$soma}"?></h3>
        <h3><?="{$n1}-{$n2}={$sub}"?></h3>
        <h3><?="{$n1}*{$n2}={$mult}"?></h3>
        <h3><?="{$n1}/{$n2}={$div}"?></h3>
        <h3><?="Resto da divisao = {$n1}/{$n2}={$resto}"?></h3>
        <h3><?="{$n1}<sup>/{$n2}={$expo}"?></h3>

	</div>
</body>
</html>
<?php

$real = $_POST["real"];

$nota100 = 0;
$nota50 = 0;
$nota20 = 0;
$nota10 = 0;
$nota5 = 0;
$nota2 = 0;
$nota1 = 0;

while ($real > 0){
    if ($real >= 100) {
        $real -= 100;
        $nota100++;
    } elseif ($real >= 50) {
        $real -= 50;
        $nota50++;
    } elseif ($real >= 20) {
        $real -= 20;
        $nota20++;
    } elseif ($real >= 10) {
        $real -= 10;
        $nota10++;
    } elseif ($real >= 5) {
        $real -= 5;
        $nota5++;
    } elseif ($real >= 2) {
        $real -= 2;
        $nota2++;
    } elseif ($real >= 1) {
        $real -= 1;
        $nota1++;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="container">
		<div class="box resposta">
		<form action="questao7_3.php"method="post">

        <label>valor em real:
    <input type="number"  name="real" required>
    </label>
    <button>Enviar</button>
    
    <?php
	echo "Valor lido: R$ " . $_POST['real'] . "<br>";
	echo "Quantidade de notas de R$100: " . $nota100 . "<br>";
	echo "Quantidade de notas de R$50: " . $nota50 . "<br>";
	echo "Quantidade de notas de R$20: " . $nota20 . "<br>";
	echo "Quantidade de notas de R$10: " . $nota10 . "<br>";
	echo "Quantidade de notas de R$5: " . $nota5 . "<br>";
	echo "Quantidade de notas de R$2: " . $nota2 . "<br>";
	echo "Quantidade de notas de R$1: " . $nota1 . "<br>";
	?>
    
    </form>
    </div>
	</div>
</body>
</html>


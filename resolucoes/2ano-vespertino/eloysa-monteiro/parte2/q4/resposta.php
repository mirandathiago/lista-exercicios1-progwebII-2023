<?php
    $valor1 = $_POST["valor1"] ?? 0;
    $valor2 = $_POST["valor2"] ?? 0;
    $valor3 = $_POST["valor3"] ?? 0;

    $delta = ($valor2*$valor2) - 4 * $valor1 * $valor3;
    $raiz1 = (-$valor2 + sqrt($delta)) / (2 * $valor1);
    $raiz2 = (-$valor2 - sqrt($delta)) / (2 * $valor1);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário de Idade</title>
	<meta charset="utf-8">
    <link href="estilo.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <?php
         if($delta < 0){
            echo "A equação não possui raiz real!";
         }
         else if($delta == 0){
            echo "A equação possui apenas uma raiz real.";
            echo "<br>";
            echo "A raiz é X = {$raiz1}";
         }
         else if($delta > 0){
            echo "A equação possui duas raízes reais.";
            echo "<br>";
            echo "As raízes são : X1 = {$raiz1} , X2 = {$raiz2}";
         }
         else 
         {
            echo "Valor inválido!";
         }
    ?>
		
	</div>
</body>
</html>
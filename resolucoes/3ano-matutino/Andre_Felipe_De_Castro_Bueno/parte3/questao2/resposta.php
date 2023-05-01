<?php 
/*
2- Desenvolva um programa que receba como entrada um número inteiro
e calcule a sua tabuada de multiplicação utilizando o comando WHILE.
Exiba a tabuada na tela.
Entrada: 7
Saída:
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28
*/
$num = $_POST["num"] ?? 0;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
       <h1>
        <?php 
        $tabuada = 1;
        
        while($tabuada <= 9){
            $resultado = $num * $tabuada;
            echo "{$num} x {$tabuada} = {$resultado}<br>";
            $tabuada++;   
        }
        ?>
       </h1>
    </div>
</body>
</html>
<?php

$a = $_POST["a"] ?? 1;
 
$b = $_POST["b"] ?? 1;

$c = $_POST["c"] ?? 1;

$delta = ($b * $b) - ((4 * $a)* $c);

if($delta < 0){
    $resposta = "Não há raizes reais";
}else{
    if($delta == 0){
        $x1 =  (-$b + sqrt($delta) ) / (2  * $a);
        $resposta = "Essa equação só possui uma raiz e x é: {$x1}";
    }else{
        $x1 =  (-$b + sqrt($delta) ) / (2  * $a);
        $x2 =  (-$b - sqrt($delta) ) / (2  * $a);
        $resposta = "x1={$x1} x2={$x2}";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title> Calculadora de Bhaskára</title>
</head>
<body>
    <header>
        <h1>Calculadora de Bhaskára</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Calculadora de Bhaskára</h2>
            <form action="index.php" method="post" required>
                
                <label>Valor de a:
                        <input type="number" name="a" required>
                </label>

                <label>Valor de b:
                        <input type="number"  name="b" required>
                </label>

                <label>Valor de c:
                        <input type="number" name="c" required>
                </label>

                <button name="enviar"> Enviar </button>


            </form>



            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
						echo "<p class='alerta-verde'> {$resposta} </p>";
					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>





    
</body>
</html>
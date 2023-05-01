<?php
    $num1 =  $_POST["num1"] ?? 1; //colocando os numeros dados pelo usuario nas variaveis 
    $num2 =  $_POST["num2"] ?? 1;
    $num3 =  $_POST["num3"] ?? 1;

    $mensagem = "";
    $mensagem2 = " ";
    $triangulo = false ;



    if($num1 > $num2 && $num1 > $num3){

        if($num1 < ($num2 + $num3)){
                $triangulo = true;
        }

    }else if($num2 > $num1 && $num2 > $num3){

        if($num2 < ($num1 + $num3)){
            $triangulo = true;
        }
        
    }else if($num3 > $num1 && $num3 > $num2){

        if($num3 < ($num1 + $num2)){
            $triangulo = true;
        }
    }


    if($num1 == $num2 && $num2 == $num3){
       $mensagem = "Triangulo equilatero";
    }else if ($triangulo == true && ($num1 == $num2 || $num1 == $num3 || $num2 == $num3)){
        $mensagem = "Trianguo isoceles";
    }else if ($triangulo == true && ($num1 != $num2 && $num1 != $num3 && $num2 != $num3)){
        $mensagem = "Triangulo Escaleno";
    }else{
        $mensagem = "Não é um triangulo";
    }




   /* if ($num1 + $num2 > $num3){
        $mensagem = (" De acordo com as medidas isso é um triangulo");
    }elseif($num1 = $num2 = $num3){
        $mensagem2 = "Triangulo Equilátero";
    }elseif($num1 = $num2){
        $mensagem2 = "Triangulo Isoceles";
    }elseif($num2 = $num3){
        $mensagem2 = "Triangulo Isoceles";
    }elseif($num1 = $num3){
        $mensagem2 = "Triangulo Isoceles";
    }elseif{
        $mensagem2 = "Triangulo Escaleno";
    }else{
        $mensagem = (" De acordo com as medidas isso não é um triangulo");
        break;
    }*/

?>
    
   

<!DOCTYPE html>
<html>
<head>
<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<div class="container">
        <h1>Resposta : </h1>
        <?= "<h3>{$mensagem}<br></h4>"?> 
          
	</div>

</body>
</html>
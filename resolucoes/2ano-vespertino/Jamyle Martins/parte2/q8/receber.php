<?php
   $peso = $_GET["peso"]?? 60;
   $altura = $_GET["altura"]?? 1.55;
   $imc = $peso / ($altura * $altura);
   
       if($imc < 18.5){
           $faixa= " abaixo do peso";
       }
    else if($imc < 24.5){
           $faixa= " peso normal";
       }
    else if($imc < 29.9){
           $faixa= "sobrepeso";
       }
     else if($imc < 34.9){
           $faixa= " obesidade grau 1";
       }
   else if($imc < 39.9){
           $faixa= " obesidade grau 2";
       }
     else{
           $faixa= " obesidade grau 3";
       }


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <div class="box resposta">
    <h1>Calcular de IMC</h1>
    <h3> <?= "O seu IMC  é de {$imc}, e você está na faixa de {$faixa} "?></h3>
	</div>
    </div>
</body>
</html>
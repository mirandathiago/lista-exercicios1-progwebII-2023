<?php
    
    $peso= $_GET["peso"] ?? 60;
    $altura= $_GET["altura"] ?? 1.55;


        /*Coelecencia Nula -> ??
        Verifica se uma variavel existe e esta setada e caso ela não exista 
        este operador retorna um valor padrão definido pelo programador. 

        O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2)

        abaixo do peso (IMC menor que 18,5), 
        peso normal (IMC entre 18,5 e 24,9), 
        sobrepeso (IMC entre 25 e 29,9), 
        obesidade grau 1 (IMC entre 30 e 34,9), 
        obesidade grau 2 (IMC entre 35 e 39,9) e 
        obesidade grau 3 (IMC igual ou maior que 40).*/

        $imc = $peso / $altura ** 2;
        $imc = number_format($imc, 2, '.', '');

        if($imc <= 18.5){ 
            $analise ="abaixo do peso";
        }else if($imc > 18.5 && $imc < 24.9){ 
            $analise = "peso normal";
        }else if($imc >= 25 && $imc <= 29.9){ 
            $analise = "sobrepeso";
        }else if($imc > 30 && $imc <= 34.9){ 
            $analise = "obesidade grau 1";
        }else if($imc > 35 && $imc <= 39.9){ 
            $analise ="obesidade grau 2";
        } else if($imc >= 40){ 
            $analise ="obesidade grau 3";	
        }

   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de IMC</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	
		<h1>Calculadora de IMC</h1>
        <br>
            <h3><?= "O IMC da pessoa com o peso de {$peso}kg e altura de {$altura}m é de {$imc}"?></h3>
            <br>
            <h3><?= " Seu IMC é {$imc}, você está na faixa de {$analise}"?></h3>
</body>
</html>
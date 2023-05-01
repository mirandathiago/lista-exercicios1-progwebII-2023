
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>IMC</title>
	<meta charset="utf-8">
    <link href="estilo.css" rel="stylesheet" >
</head>
<body>
    <div class="container"> 
		<?php
            $altura = $_POST["altura"] ?? 0;
            $peso = $_POST["peso"] ?? 0;
        
            $imc = $peso / ($altura * $altura);

            if($imc < 18.5){
                echo "Seu IMC é {$imc}, você está abaixo do peso.";
            }
            else if($imc > 18.5 && $imc < 24.9){
                echo "Seu IMC é {$imc}, você está o peso ideal";
            }
            else if($imc > 25 && $imc < 29.9){
                echo "Seu IMC é {$imc}, você está com sobrepeso";
            }
            else if($imc > 30 && $imc < 34.9){
                echo "Seu IMC é {$imc}, você está com obesidade grau 1";
            }
            else if($imc > 35 && $imc < 39.9){
                echo "Seu IMC é {$imc}, você está com obesidade grau 2";
            }
            else if($imc >= 40){
                echo "Seu IMC é {$imc}, você está com obesidade grau 3";
            }
        ?>
	</div>
</body>
</html>

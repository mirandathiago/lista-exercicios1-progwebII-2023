<?php

    $peso = $_POST["peso"] ?? 40;
    $altura = $_POST["altura"] ?? 1.50;
    $imc = $peso / ($altura * $altura);

    if($imc < 18.5){
        $faixa = "abaixo do peso";
    }
    else if(18.5 <= $imc && $imc <= 24.9){
        $faixa = "peso normal";
    }
    else if(25 <= $imc && $imc <= 29.9){
        $faixa = "sobrepeso";
    }
    else if(30 <= $imc && $imc <= 34.9){
        $faixa = "Obesidade grau 1";
    }
    else if(35 <= $imc && $imc <= 39.9){
        $faixa = "Obesidade grau 2";
    }
    else{
        $faixa = "Obesidade grau 3";
    }
/*O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.
Crie um formulário que permita ao usuário informar o peso e a altura. Com base nesses dados,
 calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra. 
 Utilize as seguintes faixas: abaixo do peso (IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9),
obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).
O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), 
onde peso é a massa corporal em quilogramas e altura é a altura em metros elevada ao quadrado.
Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.
Exemplo de entrada e saída:
Entrada: Peso: 70 kg, Altura: 1.70 m
Saída: Seu IMC é 24.22, você está na faixa de peso normal.
Entrada: Peso: 90 kg, Altura: 1.75 m
Saída: Seu IMC é 29.39, você está na faixa de sobrepeso.*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculo de IMC</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                <label>
                    Peso:
                    <input type="number" name="peso" required>
                </label>
                <br> 
                <label>
                    Altura:
                    <input type="number" name="altura" step ="0.01" required>
                </label> 
                <br>
                <button class="enviar">Enviar</button>   
            </form>

            <?php
            $metodo = $_SERVER["REQUEST_METHOD"]; 
                if($metodo == "POST"){
                   echo "<h2>Seu IMC é {$imc}, você está na faixa de {$faixa}</h2>";
                }    
            ?>        
		</div>
	</div>

</body>
</html>
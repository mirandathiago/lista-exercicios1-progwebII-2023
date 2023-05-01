corporal em quilogramas e altura é a altura em metros elevada ao quadrado.
Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.
Exemplo de entrada e saída:
Entrada: Peso: 70 kg, Altura: 1.70 m
Saída: Seu IMC é 24.22, você está na faixa de peso normal.
Entrada: Peso: 90 kg, Altura: 1.75 m
Saída: Seu IMC é 29.39, você está na faixa de sobrepeso.
 
 */

<!doctype>
<html>
<head>
<title> Questao 8</title>
</head>


<body>
<form action="Imc.php" method="post">

     <input type="number" name="peso">
     <input type="number" name="altura">
     <input type="submit" Value= " Enviar">
 
</form>

<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso/($altura*$altura);

if($imc <= 18.4){
    
    echo " {$imc} kg, a pessoa esta abaixo do peso normal";
    
}if($imc >= 18.4){
    
    echo " {$imc} kg, peso ideal ";
    
}else($imc > 25){
    
    echo  "{$imc} kg, a pessoa ta acima do peso"

}





?>


</body>




</html>

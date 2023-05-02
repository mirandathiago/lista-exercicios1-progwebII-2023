<?php 
   /* 
   1- crie um formulário com três campos do tipo number e um botão, 
   em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
   Entrada: 2 5 1
   Saída: Menor Número: 1 e o Maior Número: 5
   */
  
   $numero1 = $_POST["num1"] ?? "";
   $numero2 = $_POST["num2"] ?? "";
   $numero3 = $_POST["num3"] ?? "";
   $resultado = $_POST["resul"] ?? "";
   $resultado2 = $_POST["resul2"] ?? "";

   if($numero1 > $numero2 && $numero1 > $numero3){
    $resultado = $numero1;
   }else if($numero2 > $numero1 && $numero2 > $numero3){
    $resultado = $numero2;
   }else if($numero3 > $numero1 && $numero3 > $numero2){
    $resultado = $numero3;
   }

   if($numero1 < $numero2 && $numero1 < $numero3){
    $resultado2 = $numero1;
   }else if($numero2 < $numero1 && $numero2 < $numero3){
    $resultado2 = $numero2;
   }else if($numero3 < $numero1 && $numero3 < $numero2){
    $resultado2 = $numero3;
   }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <h1>O maior número é <?=number_format($resultado)?> e o menor número é <?=number_format($resultado2)?>.</h1>
    </div>
</body>
</html>
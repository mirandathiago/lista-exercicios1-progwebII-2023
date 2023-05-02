<!--1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5-->

<?php
    $num1 =  $_POST["num1"] ?? 1; //Colocando os números dados pelo usuário nas variáveis 
    $num2 =  $_POST["num2"] ?? 1;
    $num3 =  $_POST["num3"] ?? 1;

        $mensagem = "";
        $mensagem2 = "";

//Estrutura para calcular qual o número maior
if($num1 > $num2 && $num1 > $num2){
    $mensagem = "O número maior é {$num1}";
}elseif($num2 > $num3){
    $mensagem = "O número maior é {$num2}";
}else{
    $mensagem = "O número maior é {$num3}";
}

//Estrutura para calcular qual o número menor
if($num1 < $num2 && $num1 < $num3){
    $mensagem2 = "O número menor é {$num1}";
}elseif($num2 < $num3){
    $mensagem2 = "O número menor é {$num2}";
}else{
    $mensagem2 = "O número menor é {$num3}";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>FORMULÁRIO</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
    
<body>
	<div class="container">
        <h1>MAIOR E MENOR</h1>
        <?= "<h3>{$mensagem}<br></h4>"?>
        <?= "<h3>{$mensagem2}<br></h4>"?>
        
	</div>
</body>
</html>
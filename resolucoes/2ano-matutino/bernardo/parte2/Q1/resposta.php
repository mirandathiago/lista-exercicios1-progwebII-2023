<?php
    $num1 =  $_POST["num1"] ?? 1; //colocando os numeros dados pelo usuario nas variaveis 
    $num2 =  $_POST["num2"] ?? 1;
    $num3 =  $_POST["num3"] ?? 1;

        $mensagem = "";
        $mensagem2 = "";

    //MAIOR
if($num1 > $num2 && $num1 > $num2){
    $mensagem = "O número maior é {$num1}";
}elseif($num2 > $num3){
    $mensagem = "O número maior é {$num2}";
}else{
    $mensagem = "O número maior é {$num3}";
}

//MENOR
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
<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <h1>Maior e menor</h1>
        <?= "<h3>{$mensagem}<br></h4>"?>
        <?= "<h3>{$mensagem2}<br></h4>"?>

	</div>
</body>
</html>
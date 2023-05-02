<?php
            //Estruta while usa quando não sabe quantas repetições precisa
			//   I - inicializacao       II - condicao    III - modificacao
            $num1 =  $_POST["num1"] ?? "";
			$mult = 0; //inicialização
			$i = 0; //inicializaçao
			//condicao
            echo "<div class='item'><h4>Tabuada do {$num1}<br></h4></div>";
			while($i<=10){
				
                //modificacao
				$mult = $num1 * $i;
                echo "<div class='item'>{$num1}x{$i}={$mult}</div>";
                $i++;
                
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
	</div>
</body>
</html>
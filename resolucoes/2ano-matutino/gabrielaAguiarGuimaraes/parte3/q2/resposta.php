<!--2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28
-->
<?php
            //Estruta while usa quando não sabe quantas repetições precisa
			//   I - inicializacao       II - condicao    III - modificacao

            $num1 =  $_POST["num1"] ?? "";
			$mult = 0; //inicialização
			$i = 0; //inicializaçao do numero que vai começar multiplicando

			//condicao
            echo "<div class='item'><h4>Tabuada do {$num1}<br></h4></div>";
			while($i<=10){
				
                //modificacao
				$mult = $num1 * $i; //A variável mult, começa multiplicando por 0 o número digitado
                
            echo "<div class='item'>{$num1}x{$i}={$mult}</div>"; //Iprimi a linha da tabela com o numero digitado multiplicado a outro numero natural que inicia no 0 e logo na frente o resultado da multiplicação
                
            $i++; //Depois soma com 1, o número que vai ser multiplicado pelo numero digitado pelo usuário
                
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
	</div>
</body>
</html>
<?php
/*
2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. 
Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28
 */
$number = $_GET["numero"] ?? 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tabuada</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>TABUADA PHP</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>TABUADA DE UM NÚMERO</h2>
			<form action = "index.php" method = "get">				
				<label>Informe um número:
					<input type="number" name="numero" required value = "<?=$number?>">
				</label>
                <button>Enviar</button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

            <?php

           $contador = 1; //controla a execução do while
           
           while($contador <= 10){ //contador começa a rodar em 1 e vai até 10
               $r = $number * $contador; //resultado da multiplicação vai ser igual ao numero enviado vezes o contador
               $multi = "$number x $contador = $r"; //impressão 
               echo "<p>{$multi}</p>"; 
               $contador++; //contador aumenta um número e o loop continua até que contador seja == 10
           }
            echo "<br>";
            ?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>

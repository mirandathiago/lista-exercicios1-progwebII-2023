<?php
/*
1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. 
Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 
O fatorial é representado por:
n! = n x (n – 1) x (n – 2) x (n – 3)!
Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura condicional para verificar esta situação.
Entrada: 3
Saída: 6 
-> Cálculo realizado: 3 x 2 x 1

*/
$n1 = $_GET["n1"] ?? 0; // recupera o valor de n1
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fatorial</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fatorial de um número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe um número para encontrar o fatorial</h2>
			<form action = "index.php" method = "get">				
				<label>Informe um número:
					<input type="number" name="n1" required value = "<?=$n1?>">
				</label>
				<button name = "botao"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php 
//não utilizei uma condicional para zero pois já estava informando o fatorial de 0 corretamente
           $fatorial = 1; //cria uma variavel fatorial e atribui um valor inicial
           for($i = 1; $i <= $n1; $i++){ //$i representa cada um dos numeros que compõem o fatorial
            $fatorial = $fatorial * $i; //a variável fatorial vai sendo atualizada multiplicando o ultimo valor fatorial pelo numero do fatorial $i
           }
           echo "<p>O fatorial de {$n1} é {$fatorial}!</p>";
            ?>
					
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>

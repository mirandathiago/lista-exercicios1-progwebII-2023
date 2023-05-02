<?php

/*
	1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 
	O fatorial é representado por:
	n! = n x (n – 1) x (n – 2) x (n – 3)!
	Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura condicional para verificar esta situação.
	Entrada: 3
	Saída: 6 
	-> Cálculo realizado: 3 x 2 x 1
*/
    $num = $_POST["num"] ?? 0;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fatorial de um número</h2>
			<form action="index.php" method="post">
                <label>
                   	Número:
                        <input type="number" id="num" name="num" required >
                </label>
				<button name="enviar"> Enviar </button>
				
				

			</form>
		</div>
		
		<div class="box resposta">
			<h2>Fatorial de um número</h2>
				<?php 
				if($num == 0){ echo "<h4> O fatorial de 0 é 1 <br>";}
					else{
						$fatorial = 1;
						for ($i = 1; $i <= $num; $i++) { 
						$fatorial *= $i;
					}
					echo "<h4>O fatorial de {$num} é: {$fatorial}</h4>";
					}
                    
                ?>
			
			
		</div>
	</div>
</body>
</html>
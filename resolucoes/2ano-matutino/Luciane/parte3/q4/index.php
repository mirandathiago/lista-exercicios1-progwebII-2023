<?php

/*Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. 
Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for,
 calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5
Exemplo de saída: Soma dos números de 1 a 5: 15
*/
$n = $_GET["n"] ?? 0; //recupera o valor informado
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Soma Números</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Somando os números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Soma dos números</h2>
			<form action = "index.php" method = "get">				
				<label>Informe um número:
					<input type="number" name="n" required value = "<?=$n?>">
				</label>	
				<button name = "botao"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php 
                $soma = 0; //inicia uma variável com o valor 0 para ser atualizada
                for($i = $n; $i >= 1; $i--){ //começa com o número informado, para quando chegar em um e vai decrescendo
                    $soma = $i + $soma; //valor atualizado da variável soma com a sequencia percorrida
                }
                echo "<p>A soma dos números de 1 a {$n} = {$soma}!</p>"; //imprime
            ?>
					
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>

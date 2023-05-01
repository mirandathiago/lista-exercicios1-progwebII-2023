<?php 

/*
	4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
	Exemplo de entrada:
	N: 5
	Exemplo de saída: Soma dos números de 1 a 5: 15
*/


    $num = $_POST["n"] ?? 0;
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
		<h1>Soma de números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Soma de números</h2>
			<form action="index.php" method="post">
                <label>
                   	N:
                        <input type="number" id="n" name="n" value="<?=$num?>" required >
                </label>
				<button name="enviar"> Enviar </button>
				
				

			</form>
		</div>
		
		<div class="box resposta">
			<h2>Soma de números</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$soma = 0;
					for($i = 1; $i <= $num; $i++){
						
						$soma += $i;				
					}
					echo "<br><h4>O resultado da soma de 1 a {$num} é: {$soma}</h4>";
                }
            ?>
			
			
		</div>
	</div>
</body>
</html>
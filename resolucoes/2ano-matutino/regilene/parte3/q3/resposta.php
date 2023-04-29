<?php

	/*3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
	Exemplo de entrada:
	Início do intervalo: 3
	Fim do intervalo: 15
	Exemplo de saída:
	Quantidade de números pares: 6
	*/

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
		<h1>Números pares em um intervalo</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Intervalo</h2>

			<form action="resposta.php" method="post">

				<label>Início do intervalo:
					<input type="number" name="i" required>
				</label>

				<label>Fim do intervalo:
					<input type="number" name="f" required>
				</label>

				

				<button name="enviar"> Enviar </button>

			</form>

		</div>	

		<div class="box resposta">
			<h2>Quantidade de numeros pares no intervalo:</h2>
			
				<?php
					$numeroinicial = $_POST["i"] ?? 00;
					$numerofinal = $_POST["f"] ?? 00;
					$contador = 0;
			
					for($numeroinicial; $numeroinicial <= $numerofinal; $numeroinicial++){
						if($numeroinicial % 2 == 0){
							$contador ++;
						}
					}
					echo "<p class='alerta-amarelo'> Quantidade de números pares: {$contador}</p>";
				?>
		
	</div>

</body>
</html>
<!--
3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Intervalo</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Números pares existem em um intervalo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Números pares existem em um intervalo</h2>
			<form action="index.php" method="post">
				<label>Inicio de Intervalo:
					<input type="number" id="inicio" name="inicio" required>
				</label>
				<label>Fim de Intervalo:
					<input type="number" id="fim" name="fim" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
				$inicio = $_POST["inicio"] ?? 0;
				$fim = $_POST["fim"] ?? 0;
	
				if($inicio <= $fim){
					$cont = 0;

					for($i = $inicio; $i <= $fim; $i ++){
						if($i % 2 == 0){
							$cont ++;
						}
					}
					echo "<p>Quantidade de números pares: {$cont} </p>";
				}else{
					echo "<p>O valor inicial deve ser menor que o valor final.</p>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>
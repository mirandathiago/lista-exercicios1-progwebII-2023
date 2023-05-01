<!--8- O Instituto Nacional de Estatística precisa de um programa que calcule em quantos anos a população de uma cidade A irá ultrapassar a população de uma cidade B, considerando suas respectivas taxas de crescimento. O programa deve solicitar ao usuário o número atual de habitantes e a taxa anual de crescimento de cada cidade através de um formulário. Caso a população de A já seja maior do que a população de B, o programa deve informar que a cidade A já tem mais habitantes do que a cidade B e encerrar. Já se a taxa de crescimento de A for menor do que a taxa de crescimento de B, o programa deve informar que a cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.

O programa deve exibir o número de anos necessários para que a população de A ultrapasse a população de B e também a população de cada cidade ao final desse período. O usuário deverá informar os valores através de um formulário e a solução deve utilizar alguma estrutura de repetição para realizar os cálculos necessários.
 -->
 <?php
	$cidadeA = $_POST["cidadeA"] ?? 0;
	$cidadeB = $_POST["cidadeB"] ?? 0;
	$taxaA = $_POST["taxaA"] ?? 0;
	$taxaB = $_POST["taxaB"] ?? 0;
	$acumulador = 0;

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
		<h1>CONTAGEM</h1>
	</header>
	<div class="container">
		<div class="box formulario">
            <form action = "index.php" method = "POST">
            <label> População da cidade A:
                <input type = "number" name = "cidadeA">
            </label>
			<label> Taxa de crescimento da cidade A:
				<input type = "number" name = "taxaA" step = "0.01">
			</label>
			<label> População da cidade B:
				<input type = "number" name = "cidadeB">
			</label>
			<label>Taxa de crescimento da cidade B:
				<input type = "number" name = "taxaB" step = "0.01">
			</label>

            <button> ENVIAR </button>
            </form>			
		</div>

		<div class = "box resposta">
			<h2> RESPOSTA </h2>

			<?php

					$metodo = $_SERVER["REQUEST_METHOD"];

					if($metodo == "POST"){
						$taxaA = $taxaA / 100;
						$taxaB = $taxaB / 100;

						if($cidadeA > $cidadeB){
							echo "<p class = 'alerta-verde'> A população da cidade A é maior que a população da cidade B </p>";
						}

						else if($taxaA < $taxaB){

							echo "<p class = 'alerta-verde'> A cidade A não alcançará o número de habitanres da cidade B com essa taxa.</p> ";
						}
						else{	
							//Enquanto cidade B for maior que cidade A faça
							while($cidadeB >= $cidadeA){

								$cidadeA = $cidadeA + ($cidadeA * $taxaA);
								$cidadeB = $cidadeB + ($cidadeB * $taxaB);

								$acumulador++;
							}

							echo "<p class = 'alerta-verde'>A cidade A demorará {$acumulador} anos para ultrapassar a cidade B. </p>";
						}

			}

			?>
		</div>
	</div>
</body>
</html>
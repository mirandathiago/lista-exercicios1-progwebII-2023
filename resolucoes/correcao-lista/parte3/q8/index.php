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
		<h1>Questão 8 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>8- O Instituto Nacional de Estatística precisa de um programa que calcule em quantos anos a população de uma cidade A irá ultrapassar a população de uma cidade B, considerando suas respectivas taxas de crescimento. O programa deve solicitar ao usuário o número atual de habitantes e a taxa anual de crescimento de cada cidade através de um formulário. Caso a população de A já seja maior do que a população de B, o programa deve informar que a cidade A já tem mais habitantes do que a cidade B e encerrar. Já se a taxa de crescimento de A for menor do que a taxa de crescimento de B, o programa deve informar que a cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.</h2>

			<form action="index.php" method="post">
				
				<label>População da Cidade A:
					<input type="number" id="popA" name="popA" required value="<?=$_POST["popA"] ?? ""?>">
				</label>
				<label>Taxa de Crescimento da Cidade A:
					<input type="number" id="taxaA" name="taxaA" step="0.1" required value="<?=$_POST["taxaA"] ?? ""?>">
				</label>


				<label>População da Cidade B:
					<input type="number" id="popB" name="popB" required value="<?=$_POST["popB"] ?? ""?>">
				</label>

				<label>Taxa de Crescimento da Cidade B:
					<input type="number" id="taxaB" name="taxaB" step="0.1" required value="<?=$_POST["taxaB"] ?? ""?>">
				</label>
				

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST"){

					$popA = $_POST["popA"] ?? 0;
					$popB = $_POST["popB"] ?? 0;
					$taxaA = $_POST["taxaA"] ?? 0;
					$taxaB = $_POST["taxaB"] ?? 0;
					$anos = 0;

					if($popA > $popB){
						echo "<p class='alerta-vermelho'>A População de A já é Maior que a População de B</p>";
					}else if($taxaA <= $taxaB){
						echo "<p class='alerta-vermelho'>A Taxa de Crescimento de A é menor que a Taxa de Crescimento de B, desta forma a cidade A nunca irá ultrapassar a cidade B com esta taxa.</p>";
					}else{


						while($popA < $popB){

							$popA = $popA + ($popA * ($taxaA/100) );
							$popB = $popB + ($popB * ($taxaB/100) );
							$anos++;

						}

						$popA = number_format($popA,0,"",".");
						$popB = number_format($popB,0,"",".");

						echo "<p class='alerta-verde'>A cidade A ultrapassará a cidade B em {$anos} anos</p>";
						echo "<p>População da Cidade A depois de {$anos} anos: {$popA} </p>";
						echo "<p>População da Cidade B depois de {$anos} anos: {$popB} </p>";
					}
					
				}

			?>


		</div>
	</div>
</body>
</html>

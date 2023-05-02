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
		<h1>Questão 8</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="index.php" method="post">
				<label>População da cidade A:
					<input type="number" id="numA" name="numA" required step="0.01">
				</label>

				<label>Taxa de crescimento da cidade A:
					<input type="number" id="taxA" name="taxA" required step="0.01">
				</label>

				<label>População da cidade B:
					<input type="number" id="numB" name="numB" required step="0.01">
				</label>

				<label>Taxa de crescimento da cidade B:
					<input type="number" id="taxB" name="taxB" required step="0.01">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				if($metodo == "POST"){

					$habA = $_POST["numA"] ?? 80000;
					$taxA = $_POST["taxA"] ?? 3;
					
					$habB = $_POST["numB"] ?? 200000;
					$taxB = $_POST["taxB"] ?? 1.5;
					
					

					if($habA >= $habB){
						echo "<p>A cidade A já tem uma quantidade de hábitantes maior que a cidade B</p>";
					}elseif($taxA < $taxB){
						echo "<p>A cidade A com essa taxa de crescimento não alcançará a cidade B</p>";
					}else{
						$anos = 0;
						while($habA <= $habB){
							$habB += $habB * $taxB / 100;
							$habA += $habA * $taxA / 100;
							$anos++;
						}
						echo "<p>A cidade A vai precisar de {$anos}anos para ultrapassar a cidade B</p>";
					}

				}
			?>
		</div>
	</div>
</body>
</html>
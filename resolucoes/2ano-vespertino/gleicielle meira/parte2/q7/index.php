<?php


$nome = $_POST["nome"] ?? 0;
$idade = $_POST["idade"] ?? 0;
$peso = $_POST["peso"] ?? 0;
$altura = $_POST["altura"]?? 0;
$genero = $_POST["genero"]?? 0;

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
		<h1>Calculadora de TMB</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os dados:</h2>
			<form action = "index.php" method = "post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>

				<label>Idade em (Anos): 
					<input type="number" id="idade" name="idade" required>
				</label>

				<label>Peso em (Kg): 
					<input type="number" id="peso" name="peso" step="0.01" required>
				</label>

				<label>Altura em (Cm): 
					<input type="number" id="altura" name="altura" step="0.01" required>
				</label>

				<label for="genero">Gênero:</label>
		        <select name="genero" required>
				<option value="masculino">Masculino</option>
				<option value="feminino">Feminino</option>
		    	</select>

				<button name="enviar"> CALCULAR TMB </button>
			</form>
		</div>

		<div class="box resposta">

			<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

switch ($genero) {
	case "masculino":
		$tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);

		echo "<p> {$nome}, a sua taxa metabólica basal é de aproximadamente {$tmb} calorias por dia. </p>";
		break;
	case "feminino":
		$tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);

		echo "<p> {$nome}, a sua taxa metabólica basal é de aproximadamente {$tmb} calorias por dia. </p>";
		break;

		default: 
		echo "<p> VALORES INVÁLIDOS </p>";
		break;

}
}

?>

		</div>
	</div>
</body>
</html>
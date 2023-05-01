<?php
	$altura = $_POST["altura"] ?? 1.6;
    $peso = $_POST["peso"] ?? 60;
    $imc = $peso / $altura ** 2;
	$imc = round($imc, 2);
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
		<h1>IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
			<label>Altura em m:
                <input type="number" name="altura" step="0.01" value= "1.60" required>
                <br>
            </label>
           
            <label>Peso em kg:
                <input type="number" name="peso" step="0.01" value= "60" required>
                <br>
            </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
					echo "Seu IMC é $imc, você está na faixa de ";
					if($imc < 18.5) {
						echo  "abaixo do peso.";
					} elseif($imc >= 18.5 && $imc <= 24.9) {
						echo "peso normal.";
					} elseif($imc >= 25 && $imc <= 29.9) {
						echo "sobrepeso.";
					} elseif($imc >= 30 && $imc <= 34.9) {
						echo "obesidade grau 1.";
					} elseif($imc >= 35 && $imc <= 39.9) {
						echo "obesidade grau 2.";
					} else {
						echo "obesidade grau 3.";
					}
				
			?>

		</div>
	</div>
</body>
</html>
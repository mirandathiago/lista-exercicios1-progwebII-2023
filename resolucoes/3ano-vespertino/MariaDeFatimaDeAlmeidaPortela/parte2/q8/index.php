<?php
	$peso = $_POST["peso"] ?? 50;
	$altura = $_POST["alt"] ?? 1.60;
	$imc = round($peso/pow($altura,2),2); 

	if($imc >= 40) {
		$resultado = "Seu imc indica obesidade grau 3";
	} else {
		if($imc >= 35) {
			$resultado = "Seu imc indica obesidade grau 2";
		} else {
			if($imc >= 30){
				$resultado = "Seu imc indica obesidade grau 1";
			} else {
				if($imc >= 25) {
					$resultado = "Seu imc indica sobrepeso";
				} else{
					if($imc >= 18.5) {
						$resultado = "Seu imc indica peso normal";
					} else{
						$resultado = "Seu imc indica a baixo do Peso";
					}
				}
			}
		}
	}
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
		<h1>Calculadora de IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira Dados</h2>
			<form action="index.php" method="post">
				<label>Peso:
					<input type="number" id="nome" name="peso" required>
				</label>
				<label>Altura:
					<input type="number" id="nome" name="altura" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "<p class='alerta-verde'>Seu IMC é de $imc | $resultado</p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
<?php

$peso = $_POST["peso"] ?? "";
$altura = $_POST["altura"] ?? "";


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
		<h1>Formulário de IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora IMC</h2>
			<form action="index.php" method="post">
				<label>Peso(Kg):
					<input type="number" id="peso" name="peso" required>
				</label>

				<label>Altura(M):
					<input type="number" id="altura" name="altura" step="0.01" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
			
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$imc = $peso / ($altura ** 2);
		$imc_formatado = number_format($imc,2,',',".");
       
    if($imc < 18.5){
     echo "Seu IMC é", " ", $imc_formatado, ",",  "você está abaixo do peso.";
    }else if($imc >= 18.5 && $imc <= 24.9 ){
        echo "Seu IMC é"," ", $imc_formatado, ",",  "você está na faixa de peso normal.";
    }else if($imc >= 25 && $imc_formatado <= 29.9 ){
        echo "Seu IMC é", " ", $imc_formatado, ",",  "você está na faixa de sobrepeso.";
    }else if($imc >= 30 && $imc <= 34.9 ){
        echo "Seu IMC é", " ", $imc_formatado, ",", "você está com obesidade grau 1.";
    }else if($imc >= 35 && $imc <= 39.9 ){
        echo "Seu IMC é", $imc_formatado, ",", "você está com obesidade grau 2.";
    }else if($imc >= 40 ){
        echo "Seu IMC é", " ", $imc_formatado,",", "você está com obesidade grau 3.";
    }
}
?>

		</div>
	</div>
</body>
</html>
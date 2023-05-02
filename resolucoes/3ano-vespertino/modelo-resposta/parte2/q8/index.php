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
		<h1>Calculador de índice de massa corporal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite suas medidas</h2>
			<form>
				<label>Altura:
					<input type="number" id="altura" name="altura" step= "0.01" required>
				</label>

				<label>Peso:
					<input type="number" id="peso" name="peso" step = "0.01" required>
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

<?php


$altura = $_GET["altura"]?? 1.50;
$peso = $_GET["peso"] ?? 40;

$imc= $peso/$altura**2;

if($imc < 18.5){
	$status = "Abaixo do peso";

}elseif($imc <= 24.9){
	$status = "Peso normal";

}elseif($imc <= 29.9){
	$status = "Sobrepeso";

}elseif($imc <= 34.9){
	$status = "Obesidade grau 1";

}elseif($imc <= 39.9){
	$status = "Obesidade grau 2";

}elseif($imc >=40){
	$status = "Obesidade grau 3";

}

$imc = number_format($imc,2);
echo"<p>O seu índice de massa corporal é $imc</p>";
 echo "<h3> Você está na faixa: {$status}</h3>";

?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
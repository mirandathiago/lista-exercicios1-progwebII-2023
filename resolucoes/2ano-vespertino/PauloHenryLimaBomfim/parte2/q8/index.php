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
		<h1>IMC Calculadora</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
				<label>Entre com seu peso:
					<input type="number" name="peso" required value="<?=$peso?>">
				</label>
				<label>Entre com sua altura:
					<input type="number" name="altura" step="0.01" required value="1.50">
				</label> 
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php $metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$imc = $peso / ($altura*$altura);
					if($imc < 18.5){
						$status = "Você está abaixo do peso!";
					}
					else if($imc >= 18.5 && $imc <= 24.9){
						$status = "Você está com peso normal!";
					}
					else if($imc >= 25 && $imc <= 29.9){
						$status = "Você está com sobrepeso!";
					}
					else if($imc >= 30 && $imc <= 34.9){
						$status = "Você está com obesidade grau 1!";
					}
					else if($imc >= 35 && $imc <= 39.9){
						$status = "Você está com obesidade grau 2!";
					}
					else if($imc >= 40){
						$status = "Você está com obesidade grau 3!";
					}
					?>
			<h2>Seu imc é de <?=$imc?>, <?=$status?></h2>
			<?php }else{
				print("Envie o formulário!");
			}?>
		</div>
	</div>
</body>
</html>
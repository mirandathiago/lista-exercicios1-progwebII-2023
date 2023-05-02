<?php
	$altura = $_GET["altura"] ?? "";
	$peso = $_GET["peso"] ?? "";
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Ìndice de Massa Corporal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="get">
				<label>Peso (kg):
					<input type="number" id="number" name="peso" min="0" value="<?=$peso?>" required>
				</label>

				<label>Altura (M):
					<input type="number" id="number" name="altura" min="0" step="0.01" value="<?=$altura?>" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				// Calcula o IMC com base na altura e peso inseridos no formulário e armazena o resultado na variável $imc
			$imc = ($peso / ($altura ** 2));
			// Arredonda o IMC para duas casas decimais e armazena o resultado na variável $meta
			$meta = round($imc,2);
			// Verifica se o método HTTP usado na solicitação é GET
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "GET"){
				// Exibe uma mensagem correspondente com base na classificação do IMC
				if($imc < 18.5){
					echo "Seu IMC é $meta, você está abaixo do peso.<br>";
				}else if($imc >= 18.5 && $imc <= 24.9){
					echo "Seu IMC é $meta, você está com o peso normal.<br>";
				}else if($imc >= 25 && $imc <= 29.9){
					echo "Seu IMC é $meta, você está com sobrepeso.<br>";
				}else if($imc >= 30 && $imc <= 34.9){
					echo "Seu IMC é $meta, você está com obesidade grau 1.<br>";
				}else if($imc >= 35 && $imc <= 39.9){
					echo "Seu IMC é $meta, você está com obesidade grau 2.<br>";
				}else{
					echo "Seu IMC é $meta, você está com obesidade grau 3.<br>";
				}
			}else{
					echo "<p>Aguardando Informação</p>";
				}
			?>
		</div>
	</div>
</body>
</html>
<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$Pes = $_POST["Pes"] ?? 30;
	$Alt = $_POST["Alt"] ?? 1.65;
	$Imc = round($Pes/pow($Alt,2),2); 
	$Res = " ";

	if($Imc >= 40) {
		$Res = "Obesidade Grau 3";
	} else {
		if($Imc >= 35) {
			$Res = "Obesidade Grau 2";
		} else {
			if($Imc >= 30){
				$Res = "Obesidade Grau 1";
			} else {
				if($Imc >= 25) {
					$Res = "Sobrepeso";
				} else{
					if($Imc >= 18.5) {
						$Res = "Peso Normal";
					} else{
						$Res = "Abaixo do Peso";
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="index.php" method="post">
				<label>Peso:
					<input type="number" id="nome" name="Pes" required>
				</label>
				<label>Altura:
					<input type="number" id="nome" name="Alt" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($metodo == "POST"){
					echo "<p class='alerta-verde'>IMC é de $Imc | Você esta na faixa de $Res</p>";
				} else {
					echo "<p class='alerta-amarelo'>aguardando o envio</p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
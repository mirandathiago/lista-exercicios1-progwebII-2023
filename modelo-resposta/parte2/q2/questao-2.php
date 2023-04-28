<?php
	$consumo = $_POST["kwh"] ?? 1;

	if ($consumo<100) {
		$valor=$consumo*0.50;
	}else if ($consumo<=200) {
		$valor=$consumo*0.70;
	}else{
		$valor=$consumo*0.87;
	}
	
	if ($valor<20) {
		$valor=20;
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
			<form action="questao-2.php" method="post">
				<label>Indique o consumo de energia:
					<input type="number" id="kwh" name="kwh" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				echo "<p class='alerta-amarelo'>O Valor da conta de energia será: R$ {$valor}</p>";
			}
			?>
		</div>
	</div>
</body>
</html>
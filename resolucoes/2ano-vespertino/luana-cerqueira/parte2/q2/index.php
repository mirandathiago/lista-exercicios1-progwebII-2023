<?php
	$consumo = $_POST["consumo_energia"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo: conta de energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Consumo de energia</h2>
			<form action="index.php" method="post">
				<label>Consumo de energia elétrica em KWh:
					<input value="<?=$consumo?>" type="number" id="consumo_energia" name="consumo_energia" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$method = $_SERVER["REQUEST_METHOD"];

			if($method == "POST"){
				if($consumo <= 100){
					$valorfinal = $consumo * 0.50;
					if($valorfinal > 20){
						$valorfinal = $valorfinal + 20;
					}
				}else if($consumo <= 200){
					$valorfinal = $consumo * 0.70 + 20;
				}else{
					$valorfinal = $consumo * 0.87 + 20;
				}

				$valorfinal = number_format($valorfinal,2,',','.');

				echo "<p>Valor da conta de energia: <strong>R$ {$valorfinal}</strong></p>";

			}else{
				echo "<p>Aguardando envio do formulário.</p>";
			}
			?>
		</div>
	</div>
</body>
</html>
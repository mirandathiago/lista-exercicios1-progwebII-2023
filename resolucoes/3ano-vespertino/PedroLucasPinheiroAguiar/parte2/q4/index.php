<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$ValA = $_POST["ValA"] ?? " ";
	$ValB = $_POST["ValB"] ?? " ";
	$ValC = $_POST["ValC"] ?? " ";
	$Verif = true;

	if (is_numeric($ValA) ) {
		if (is_numeric($ValB) ) {
			if (is_numeric($ValC) ) {
				$delt = pow($ValB,2) - 4 * $ValA * $ValC;
				$X1 = (-$ValB + sqrt($delt))/(2 * $ValA);
				$X2 = (-$ValB - sqrt($delt))/(2 * $ValA);
			} else {
				$Verif = false;
			}
		} else {
			$Verif = false;
		}
	} else {
		$Verif = false;
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
				<label>Valor de A:
					<input type="number" id="nome" name="ValA" value="<?=$ValA?>" required>
				</label>
				<label>Valor de B:
					<input type="number" id="nome" name="ValB" value="<?=$ValB?>" required>
				</label>
				<label>Valor de C:
					<input type="number" id="nome" name="ValC" value="<?=$ValC?>" required>
				</label>
				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
				if($metodo == "POST"){
					if($Verif){
						echo "<p class='alerta-verde'>X1 = $X1 | X2 = $X2</p>";
					} else {
						echo "<p class='alerta-vermelho'>Por favor insira números.</p>";
					}
				} else {
					echo "<p class='alerta-amarelo'>aguardando o envio</p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
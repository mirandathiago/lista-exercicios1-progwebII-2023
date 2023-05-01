<?php
	$vlr = $_POST["vlr"] ?? 1;
	$par = $_POST["par"] ?? 1;
	$jrs = $_POST["jrs"] ?? 1;
	$dias = 0;
	$txt = $vlr;
	if($metodo == "POST"){
		for($i = $par; $i <= $vlr; $i = $i + $par){
			$vlr = $vlr + ($txt * ($jrs/100));
			$dias = $dias + 1;
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
		<h1>Cauculadora</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira as Informações</h2>
			<form action="index.php" method="post">
				<label>Insira o Valor Total:
					<input type="number" id="nome" name="vlr" required>
				</label>
				<label>Insira o Valor das Parcelas:
					<input type="number" id="nome" name="par" required>
				</label>
				<label>Insira a taxa:
					<input type="number" id="nome" name="jrs" max="100" min="1" required>
				</label>
				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "<p class='alerta-verde'>$dias</p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
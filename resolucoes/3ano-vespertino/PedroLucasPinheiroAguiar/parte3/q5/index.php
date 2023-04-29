<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$Val = $_POST["Val"] ?? 1;
	$Par = $_POST["Par"] ?? 1;
	$Jur = $_POST["Jur"] ?? 1;
	$NDias = 0;
	$Test = $Val;
	if($metodo == "POST"){
		for($i = $Par; $i <= $Val; $i = $i + $Par){
			echo "$Val \ $i | ";
			$Val = $Val + ($Test * ($Jur/100));
			$NDias = $NDias + 1;

			if ($Val > 1000000){
				break;
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
		<h1>Formulário de Calculo de Juros</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira as Informações</h2>
			<form action="index.php" method="post">
				<label>Insira o Valor Total:
					<input type="number" id="nome" name="Val" required>
				</label>
				<label>Insira o Valor das Parcelas:
					<input type="number" id="nome" name="Par" required>
				</label>
				<label>Insira a Taxa de Juros:
					<input type="number" id="nome" name="Jur" max="100" min="1" required>
				</label>
				<button name="enviar"> Calcule </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado dos Calculos</h2>
			<?php
				if($metodo == "POST"){
					echo "<p class='alerta-verde'>$NDias</p>";
				} else {
					echo "<p class='alerta-amarelo'>aguardando o envio</p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
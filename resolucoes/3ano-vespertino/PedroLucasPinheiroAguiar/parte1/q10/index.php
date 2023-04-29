<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$Emp = $_POST["Emp"] ?? 1;
	$Mes = $_POST["Mes"] ?? 1;
	$Tax = 0.025;

	$Mont = round($Emp * pow((1+$Tax), $Mes),2);

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
			<h2>Calculadora de Juros Compostos</h2>
			<form action="index.php" method="post">
				<label>Emprestimo:
					<input type="text" id="nome" name="Emp" value="<?=$Emp?>" required>
				</label>
				<label>Meses:
					<input type="text" id="nome" name="Mes" value="<?=$Mes?>" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Montate Total a se Pagar</h2>
			<?php
				if($metodo == "POST"){
					echo "<p class='alerta-verde'>$Mont</p>";
				} else {
					echo "<p class='alerta-amarelo'>aguardando o envio</p>";
				}
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
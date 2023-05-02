<?php
	$nmr = $_POST["nmr"] ?? 1;
	$cnt = 1;
	for($i=1; $i <= $nmr; $i++){
		$cnt = $cnt * $i;
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
			<h2>Calculadora fatorial</h2>
			<form action="index.php" method="post">
				<label>Insira o Número:
					<input type="number" id="nome" name="nmr" value="<?=$nmr?>" required>
				</label>
				<button name="enviar"> Fatorar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "<p class='alerta-verde'>$cnt</p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
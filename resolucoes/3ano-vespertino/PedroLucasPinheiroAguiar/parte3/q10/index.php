<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$NumL = $_POST["NumL"] ?? 1;
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
		<h1>Fazedor de Piramide</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira as Informações</h2>
			<form action="index.php" method="post">
				<label>Número de Camadas:
					<input type="number" id="nome" name="NumL" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($metodo == "POST"){
					for ($i=1;$i<=$NumL;$i++) {
						for ($x=1; $x<=$i; $x++){
							echo "*";
						}
						echo "<br>";
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
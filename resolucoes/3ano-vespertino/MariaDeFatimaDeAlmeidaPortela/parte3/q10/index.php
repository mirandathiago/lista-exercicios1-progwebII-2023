<?php
	$nmrC = $_POST["nmrC"] ?? 1;
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
		<h1>Piramide machine</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira as Informações</h2>
			<form action="index.php" method="post">
				<label>Número de Camadas:
					<input type="number" id="nome" name="nmrC" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				for ($i=1;$i<=$nmrC;$i++) {
					for ($x=1; $x<=$i; $x++){
						echo "❁";
					}
					echo "<br>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
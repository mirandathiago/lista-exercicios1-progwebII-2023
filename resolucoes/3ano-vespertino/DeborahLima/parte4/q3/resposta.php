<?php
	$nome = $_POST["nome"];
	$sabor = $_POST["sabores"];
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

		<div class="box resposta">
			<h2>Sabores Escolhidos</h2>
			<?php
				foreach ($sabor as $sabores) {
					echo $sabores."<br>";
				}
			?>

            <a href = "index.php" class="link">Voltar</a>
		</div>
		
	</div>
</body>
</html>
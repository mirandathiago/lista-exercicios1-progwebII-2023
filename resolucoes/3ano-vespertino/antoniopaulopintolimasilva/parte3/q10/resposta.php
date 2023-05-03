<?php
	$num = $_POST["num"] ?? 1;
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
			<h2>Resposta</h2>
			<?php
					for($i = 0; $i < $num; $i++){
							for($j=0; $j < $i; $j++){
								echo "*";
							}
						echo "*";
						echo "<br>";
					}
				
				
			?>
			<br>
			<br>
			<a href="formulario.php">
				<button class="button">Voltar</button>
			</a>
		</div>
	</div>
</body>
</html>
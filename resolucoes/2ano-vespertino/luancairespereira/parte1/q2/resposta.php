<?php
	$num = $_POST["num"] ?? 0;
	$dobro = 2*$num;
	$metade = $num/2; 
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
			<?php echo "<p>Para o número {$num}, temos que seu dobro é igual a {$dobro}, e a metade dele é igual a {$metade}.</p>"?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
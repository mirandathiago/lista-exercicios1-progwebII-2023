<?php
//criação das variáveis;
	$n = $_POST["n"];
	$dobro = 2*$n;//cálculo do dobro do núm;
	$metade = $n/2; //cálculo da metade de um número
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
			<!--criação do bloco php para apresentar a resposta-->
			<?php echo "<p>Para o número {$n}, temos que seu dobro é igual a {$dobro}, e a metade dele é igual a {$metade}.</p>"?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
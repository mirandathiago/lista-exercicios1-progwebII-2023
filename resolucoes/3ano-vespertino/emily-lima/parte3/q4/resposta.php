<?php
  $N = $_GET["N"] ?? 1;
  
?>
<?php
	$s = 0; //s é a soma

	for($z = 1; $z <= $N; $z++){
		$s += $z; //A soma de cada repetição
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
		<h1>Formulário da Soma de 1 a N</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>A soma dos números inteiros de 1 a <?=$N?></h2>

			<p class="alerta-amarelo"><?=$s?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
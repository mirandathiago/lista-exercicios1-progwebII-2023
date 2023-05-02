<?php
//criação das variáveis;
	$num = $_POST["num"];
	$resultado = 0;
	//utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N
	for($i = 1; $i <= $num; $i++){
		$resultado += $i;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário para soma de números de 1 a n</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada</h2>
			<?php	echo "Soma dos números 1 a {$num} = {$resultado}"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
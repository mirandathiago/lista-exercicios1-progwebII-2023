

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
		<h2>Fatoramento</h2>
		<?php
		$numero = $_POST["numero"] ?? 0;
		$fatoramento = 1;

		echo "<p class='alerta-verde'> ";

	for($numero; $numero >=  1; $numero--){
		if($numero != 0){
			echo "{$numero} x ";
			
		}else{
		echo "{$numero} ";
		}

		$fatoramento = $fatoramento * $numero;
	}

		echo " = {$fatoramento} </p>";
?>
			

            <a href="questao1.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
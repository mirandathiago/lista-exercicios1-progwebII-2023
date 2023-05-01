
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
		$n = $_POST["numero"] ?? 0;
		$ft = 1;

		echo "<p class='alerta-verde'> ";

	for($n; $n >=  1; $n--){
		if($n != 0){
			echo "{$n} x ";
			
		}else{
		echo "{$n} ";
		}

		$ft = $ft * $n;
	}

		echo " = {$ft} </p>";
?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
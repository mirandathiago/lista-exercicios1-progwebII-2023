<?php
	$numero1 = $_POST["numero1"];
	$numero2 = $_POST["numero2"];
	$numeropar = 0;
	
	for($i = $numero1; $i <= $numero2; $i++){
		if($i % 2 == 0){
			$numeropar ++;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<div class="box resposta">
			<h2>Números pares em um intervalo</h2>
			<?php	echo "O intervalo entre {$numero1} e {$numero2} possui {$numeropar} números pares";?>
			<br>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
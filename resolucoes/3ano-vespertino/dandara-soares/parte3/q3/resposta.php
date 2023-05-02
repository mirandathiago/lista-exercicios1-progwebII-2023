<?php
	$num1 = $_POST["num1"] ?? 0 ;
	$num2 = $_POST["num2"] ?? 0;
	$np = 0 ; // $np = números pares
	$numtt = 0 ; // $numtt = quantidade de números presentes no intervalo
	
	for($i = $num1; $i <= $num2; $i++){
		if($i % 2 == 0){
			$np ++;
		}
		$numtt ++;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário para gerar o total de números pares</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada</h2>
			<?php echo "O intervalo entre os números {$num1} e {$num2} detêm o total de {$numtt} números, 
			mas só {$np} são números pares";?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
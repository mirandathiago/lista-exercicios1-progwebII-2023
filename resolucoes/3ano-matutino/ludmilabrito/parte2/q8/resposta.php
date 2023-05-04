<?php  
    $altura = $_GET["altura"];
	$peso = $_GET["peso"];

	$imc = $peso /$altura **2;

	if ($imc >= 40) {
		$mensagem = "com obesidade de 3° grau";
	}elseif ($imc >= 35 && $imc < 40) {
		$mensagem = "com obesidade de 2° grau";
	}elseif ($imc >= 30 && $imc < 35) {
		$mensagem = "com obesidade de 1° grau";
	}elseif ($imc >=25 && $imc < 30) {
		$mensagem = "com sobrepeso";
	}elseif ($imc >= 18.5 && $imc < 25) {
		$mensagem = "com peso normal";
	}else {
		$mensagem = "abaixo do peso";
	}
    $imc = number_format($imc, 2);
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
		
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php 
                
                echo "<br>Seu IMC é ". $imc. "<br>";
				echo "<br>Você está ". $mensagem. "<br>";
            ?>
			<a href="imc.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
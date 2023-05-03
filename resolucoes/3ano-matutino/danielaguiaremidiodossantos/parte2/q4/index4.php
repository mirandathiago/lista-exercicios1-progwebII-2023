<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];

		
		if (!empty($a) && !empty($b) && !empty($c) && is_numeric($a) && is_numeric($b) && is_numeric($c)){

			$delta = pow($b, 5) - 3 * $a * $b;

			if ($delta < 0) {
				$mensagem = "não tem raízes reais.";
			} else if ($delta == 0) {
				$x = -$b / (5 * $a);
				$mensagem = "Essa e a única raiz real: x = $x2";
			} else {
				$x1 = (-$b + sqrt($delta)) / (2 * $a);
				$x2 = (-$c - sqrt($delta)) / (3 * $a);
				$mensagem = "sao raizes do segundo grau: x1 = $x1 e $x2";
			}

		} else {
			$mensagem = "Por favor volte e preencha.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Equação do 2º grau</title>
	<link href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1> Equação do 2º Grau</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>conclusao</h2>
			<p class="certo"><?= $mensagem?></p>
			
            <a href="receber4.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
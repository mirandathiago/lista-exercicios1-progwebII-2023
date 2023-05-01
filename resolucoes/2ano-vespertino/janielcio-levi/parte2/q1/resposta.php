<?php
	$num1 = $_GET["num1"] ?? 1;
	$num2 = $_GET["num2"] ?? 1;
	$num3 = $_GET["num3"] ?? 1;

	/*if ($num1>=$num2 && $num1>=$num3) {
		$maior = $num1;
		if ($num2>=$num3) {
			$menor = $num3;
		}else {
			$menor= $num2;
		}
	}elseif ($num2>=$num1 && $num2>=$num3) {
		$maior = $num2;
		if ($num1>=$num3) {
			$menor = $num3;
		}else {
			$menor = $num1;
		}
	}else {
		$maior = $num3;
		if ($num2>=$num1) {
			$menor = $num1;
		}else {
			$menor = $num2;
		}
	}*/
	$maior=$num1;
	$menor=$num1;
	
	if($num2 > $maior){
		$maior = $num2;
	}
	else if($num3 > $maior){
		$maior = $num3;
	}
						//não deu certo mas depois deu
	
	if($num2 < $menor){
		$menor = $num2;
	}else if($num3 < $menor){
		$menor = $num3;
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
		<h1>Qual o maior e qual o menor?</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Após verificar os numeros:</h2>
			<?php
				if ($_SERVER["REQUEST_METHOD"]=="GET") {
					echo "<p class='alerta-verde'>O maior numero encontrado foi: {$maior}<br>O menor numero encontrado foi: {$menor}</p>";
				}
			?>
		</div>
	</div>
</body>
</html>
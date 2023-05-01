<?php
	$num1 = $_POST["num1"] ?? 0 ;
	$num2 = $_POST["num2"] ?? 0 ;
	$num3 = $_POST["num3"] ?? 0 ;
	//ENCONTRANDO O MAIOR NÚMERO
	if ($num1 >= $num2 && $num1 >= $num3) {
		$maior = $num1;
	  }else if ($num2 >= $num1 && $num2 >= $num3) {
		$maior = $num2;
	  }else{
		$maior = $num3;
	  }
	  //ENCONTRANDO O MENOR NÚMERO;
	  if ($num1 <= $num2 && $num1 <= $num3) {
		$menor = $num1;
	  }else if ($num2 <= $num1 && $num2 <= $num3) {
		$menor = $num2;
	  }else{
		$menor = $num3;
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
	<header>
		<h1>Formulário para descoberta do maior e do menor número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Maior e Menor número</h2>
			<!-- Bloco de impressão php dentro do html-->
			<?php echo"<p> O maior número foi: {$maior} <br> O menor número foi: {$menor} </p>"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>
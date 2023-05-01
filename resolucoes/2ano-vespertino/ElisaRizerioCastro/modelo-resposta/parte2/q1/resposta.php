<?php
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
	$n3 = $_POST["n3"];
	//ENCONTRANDO O MAIOR NÚMERO
	if ($n1 >= $n2 && $n1 >= $n3) {
		$maior = $n1;
	  }else if ($n2 >= $n1 && $n2 >= $n3) {
		$maior = $n2;
	  }else{
		$maior = $n3;
	  }
	  //ENCONTRANDO O MENOR NÚMERO;
	  if ($n1 <= $n2 && $n1 <= $n3) {
		$menor = $n1;
	  }else if ($n2 <= $n1 && $n2 <= $n3) {
		$menor = $n2;
	  }else{
		$menor = $n3;
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
			<!-- aq eu criei um bloco php dentro do bloco html para imprimir as respostas dos cálculos realizados no bloco php anterior-->
			<?php echo"<p> O maior número foi: {$maior} <br> O menor número foi: {$menor} </p>"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>